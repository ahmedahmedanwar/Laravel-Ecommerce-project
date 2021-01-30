<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::table('Product')-> insert([
            [
                'Name'=> 'Oppo phone',
                "Price"=> '$200',
                'Description'=>"Oppo SmartPhone with 48px camera ",
                'Category'=> 'SmartPhones',
                'Gallery'=>'https://images.firstpost.com/wp-content/uploads/large_file_plugin/2019/07/1563795068_optimized-76tx.png'

            ],
            [
                'Name'=> 'Samsung phone',
                "Price"=> '$200',
                'Description'=>"Samsung SmartPhone with 48px camera ",
                'Category'=> 'SmartPhones',
                'Gallery'=>'https://media.wired.com/photos/5e4ee5f25d422000084f9b56/master/w_1600%2Cc_limit/Gear-Buying-Guide-Galaxy-S20-Cosmic-Gray.jpg'

            ],
            [
                'Name'=> 'Iphone11',
                "Price"=> '$300',
                'Description'=>"Iphone11 SmartPhone with 13Mpx camera ",
                'Category'=> 'Apple mobile',
                'Gallery'=>'https://brain-images-ssl.cdn.dixons.com/4/7/10197974/u_10197974.jpg'
            ],
            [
                'Name'=> 'Iphone11 ProMax',
                "Price"=> '$350',
                'Description'=>"Iphone11 ProMax SmartPhone with 13Mpx camera ",
                'Category'=> 'Apple mobile',
                'Gallery'=>'https://www.did.ie/media/catalog/product//m/w/mwmc2ba_2.jpg'
            ],
            [

                'Name'=> 'Xiaomi Smartphone ',
                "Price"=> '$220',
                'Description'=>"Xiaomi MI10 SmartPhone with 48Mpx camera ",
                'Category'=> 'Xiaomi mobile',
                'Gallery'=>'https://mobisee.com/wp-content/uploads/2020/12/Xiaomi-Mi-10i-488x482.png'


            ]


        ]);
    }
}
