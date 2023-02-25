<?php

namespace App\Models;

class Routine{

    public static function all(){
        $product_about = [
            [
                'lead'          =>  'Strong Coffee, Strong Roots',
                'heading'       =>  'About Our Cafe',
                'coffee_image'  =>  'assets/img/about.jpg',
                'desc'          =>  'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.'
            ],
        ];

        return($product_about);
    }

}
