<?php

namespace App\Models;

class Coffe{

    public static function all(){
        $product_home = [
            [
                'id'            =>  '1',
                'lead'          =>  'Fresh Coffee',
                'heading'       =>  'Worth Drinking',
                'coffee_image'  =>  'assets/img/intro.jpg',
                'desc'          =>  'Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!'
            ],
            [
                'id'            =>  '2',
                'lead'          =>  'Our Promise',
                'heading'       =>  'To You',
                'desc'          =>  'When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!'
            ]
        ];

        return($product_home);
    }

}