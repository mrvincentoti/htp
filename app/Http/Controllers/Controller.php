<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function sendYellowPageEmail(string $email, string $name, string $qualification, string $amount): void
    {
        $message = "Hello $name,\n\n";
        $message .= "Your payment of the sum of $amount for the yellow page service has been completed.\n";
        $message .= "Please follow up with John Doe | wisgeorge.wg@gmailcom | 08097760707.\n";

        Mail::raw($message, function ($emailMessage) use ($email) {
            $emailMessage->to($email)
                ->subject('Yellow Page Payment Successful');
        });
    }
}
