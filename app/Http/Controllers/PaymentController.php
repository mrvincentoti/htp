<?php

namespace App\Http\Controllers;

use Paystack;

use App\Http\Requests;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    
    public function redirectToGateway(Request $request)
    {
        $reference = Paystack::genTranxRef();
        $order_id = strtotime("now");
        $new_amount = $this->checkAndConvertAmount($request->amount);
        $transaction_id = $this->createTransaction($request->amount, $reference, $order_id);

        $metaData = json_encode(
            $array = [
                'name' => $request->name,
                // 'email' => $request->email,
                'phone_number' => $request->phone_number,
                'qualification' => $request->qualification,
                'transaction_id' => $transaction_id,
                'amount_before_conversion' => $request->amount,
                'amount_after_conversion' => $new_amount
            ]
        );

        $request->request->add(['amount' => $new_amount]);
        $request->request->add(['order_id' => $order_id]);
        $request->request->add(['reference' => $reference]);
        $request->request->add(['metadata' => $metaData]);
        
        try {
            $authorizationUrl = Paystack::getAuthorizationUrl()->redirectNow();
            return $authorizationUrl;
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }      
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Request $request)
    {
        $paymentDetails = Paystack::getPaymentData();
        $email = $request->input('email');
        $name = $request->name;
        $amount = $request->amount;

        if ($paymentDetails["data"]["status"] == "success") {
            $this->updateTransaction($paymentDetails["data"]);
            // $this->sendYellowPageEmail($email, $name, $amount);
            return Redirect::back()->withMessage(['msg' => 'Payment Successful', 'type' => 'success']);
        }
    }
    public function checkAndConvertAmount($amount)
    {
        $final_amount = 0;
        if ($amount >= 2500) {
            $charges = (1.5 / 100) * $amount + 100;
            if ($charges > 2000) {
                $charges = 2000;
            }
            $final_amount = $amount + $charges;
        } else {
            $charges = (1.5 / 100) * $amount;
            $final_amount = $amount + $charges;
        }
        return (float)$final_amount * 100;
    }

    public function createTransaction($new_amount, $reference, $order_id)
    {
        $transaction = new Payment();
        $transaction->amount = $new_amount;
        $transaction->reference = $reference;
        $transaction->order_id = $order_id;
        $transaction->save();

        return $transaction->id;
    }

    public function updateTransaction($data)
    {
        $transaction_id = $data["metadata"]["transaction_id"];
        $transaction = Payment::find($transaction_id);
        $transaction->status = 2;
        $transaction->gateway_response = $data["gateway_response"];
        $transaction->save();
        return $transaction->id;
    }
}
