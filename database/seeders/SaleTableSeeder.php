<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SaleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sale')->delete();
        
        \DB::table('sale')->insert(array (
            0 => 
            array (
                'CPF' => '16410954077',
                'BAR_CODE' => '\'["67890", "12345", ""24680"]\'',
                'DT_SALE' => '2022-01-27 19:17:42',
            ),
            1 => 
            array (
                'CPF' => '20260451002',
                'BAR_CODE' => '\'["12345", "24680"]\'',
                'DT_SALE' => '2022-01-27 19:16:53',
            ),
            2 => 
            array (
                'CPF' => '47086093025',
                'BAR_CODE' => '\'["12345", "67890", "24680", "13579"]\'',
                'DT_SALE' => NULL,
            ),
        ));
        
        
    }
}