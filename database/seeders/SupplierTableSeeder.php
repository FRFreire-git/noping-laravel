<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('supplier')->delete();
        
        \DB::table('supplier')->insert(array (
            0 => 
            array (
                'CNPJ' => '04399927000105',
                'NAME' => 'Bandai Namco Games',
                'EMAIL' => 'bandainamco@gmail.com',
                'LOGO' => 'https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/0015/7016/brand.gif?itok=m1gJxgXm',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'CNPJ' => '13741832000100',
                'NAME' => 'GAMEFREAK',
                'EMAIL' => 'gamefreak@gmail.com',
                'LOGO' => 'https://seeklogo.com/images/G/game-freak-logo-F83EF2E7C4-seeklogo.com.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'CNPJ' => '48433848000130',
                'NAME' => 'NINTENDO',
                'EMAIL' => 'nintendo@gmail.com',
                'LOGO' => 'https://images.squarespace-cdn.com/content/v1/58c35f74d1758e424ee76710/1517405733173-IHX7U326W33E9XN3NGOV/IMG_8513.JPG?format=500w',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'CNPJ' => '94081949000107',
                'NAME' => 'SQUARE ENIX',
                'EMAIL' => 'squareenix@gmail.com',
                'LOGO' => 'https://jolstatic.fr/www/captures/57/5/34565.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}