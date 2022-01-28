<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client')->delete();
        
        \DB::table('client')->insert(array (
            0 => 
            array (
                'CPF' => '16410954077',
                'NAME' => 'KELVIN PEREIRA BISERRA',
                'DT_BIRTH' => '1997-04-21',
                'SEX' => 'MASCULINO',
                'created_at' => NULL,
                'updated_at' => '2022-01-28 04:37:44',
            ),
            1 => 
            array (
                'CPF' => '20260451002',
                'NAME' => 'FERNANDO FREIRE',
                'DT_BIRTH' => '1998-09-14',
                'SEX' => 'MASCULINO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'CPF' => '47086093025',
                'NAME' => 'DANIEL TOMAZ',
                'DT_BIRTH' => '2002-06-30',
                'SEX' => 'MASCULINO',
                'created_at' => NULL,
                'updated_at' => '2022-01-28 02:16:20',
            ),
        ));
        
        
    }
}