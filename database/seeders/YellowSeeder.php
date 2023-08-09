<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YellowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            array(
                'title' => 'Applicants',
                'description' => 'Applicants Personal details, Name, Phone Number and Qualification',
                'amount' => 0
            ),
            array(
                'title' => 'Associations',
                'description' => 'Associations Exco Page',
                'amount' => 20000
            ),
            array(
                'title' => 'Entrepreneurs',
                'description' => 'Entrepreneurs, Business & Contact Details',
                'amount' => 10000
            ),
            array(
                'title' => 'Professional',
                'description' => 'Professional Specifications & Contact Complementary Cards Details',
                'amount' => 10000
            ),
            array(
                'title' => 'Fliers for Advert Full',
                'description' => 'Fliers for Advert Full Page',
                'amount' => 50000
            ),
            array(
                'title' => 'Fliers for Advert Half',
                'description' => 'Fliers for Advert Half',
                'amount' => 20000
            ),
            array(
                'title' => 'Fliers for Advert Quarter',
                'description' => 'Fliers for Advert Quarter',
                'amount' => 10000
            ),
            array(
                'title' => 'Word Advert',
                'description' => 'Word Advert',
                'amount' => 10000
            ),
            array(
                'title' => 'Center Spread',
                'description' => 'Center Spread',
                'amount' => 1000000
            ),
            array(
                'title' => 'Inside',
                'description' => 'Inside Front & Back Covers',
                'amount' => 1000000
            ),
            array(
                'title' => 'Back',
                'description' => 'Back Cover',
                'amount' => 2000000
            ),

        );

        DB::table('yellows')->insert($data);
    }
}
