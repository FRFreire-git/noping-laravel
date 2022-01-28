<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product')->delete();
        
        \DB::table('product')->insert(array (
            0 => 
            array (
                'BAR_CODE' => 12345,
                'CNPJ' => '13741832000100',
                'TITLE' => 'POKEMON: ARCEUS',
                'RELEASE_DT' => '2022-01-28',
                'COVER' => 'https://www.lendagames.com/wp-content/uploads/2021/11/GAME-POKEMON-LEGENDS-ARCEUS-COVER.jpg',
                'PRICE' => 289.99,
            ),
            1 => 
            array (
                'BAR_CODE' => 13579,
                'CNPJ' => NULL,
                'TITLE' => 'Life Is Strange: Complete Edition',
                'RELEASE_DT' => '2015-01-30',
                'COVER' => 'https://cdn.cdkeys.com/media/catalog/product/l/i/life_is_strange_complete_season_pc_cover.jpg',
                'PRICE' => 59.9,
            ),
            2 => 
            array (
                'BAR_CODE' => 24680,
                'CNPJ' => '94081949000107',
                'TITLE' => 'FINAL FANTASY: XV',
                'RELEASE_DT' => '2016-11-29',
                'COVER' => 'https://upload.wikimedia.org/wikipedia/en/5/5a/FF_XV_cover_art.jpg',
                'PRICE' => 349.99,
            ),
            3 => 
            array (
                'BAR_CODE' => 67890,
                'CNPJ' => '48433848000130',
                'TITLE' => 'LEGEND OF ZELDA: BREATH OF WILD',
                'RELEASE_DT' => '2017-03-03',
                'COVER' => 'https://cdn.cdkeys.com/media/catalog/product/t/h/the_legend_of_zelda_-_breath_of_the_wild_switch_cover.png',
                'PRICE' => 279.99,
            ),
        ));
        
        
    }
}