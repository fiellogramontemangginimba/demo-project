<?php

namespace App\Models;

class Products{

    public static function all(){
        $product_coffee = [
            [
                'id'            =>  '1',
                'lead'          =>  'Blended to Perfection',
                'heading'       =>  'Coffees & Teas',
                'coffee_image'  =>  'assets/img/products-01.jpg',
                'desc'          =>  'We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether its our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.'
            ],
            [
                'id'            =>  '2',
                'lead'          =>  'Delicious Treats, Good Eats',
                'heading'       =>  'Bakery & Kitchen',
                'coffee_image'  =>  'assets/img/products-02.jpg',
                'desc'          =>  'Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.'
            ],
            [
                'id'            =>  '3',
                'lead'          =>  'From Around the World',
                'heading'       =>  'Bulk Speciality Blends',
                'coffee_image'  =>  'assets/img/products-03.jpg',
                'desc'          =>  'Travelling the world for the very best quality coffee is something take pride in. When you visit us, youll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.'
            ]
        ];

        return($product_coffee);
    }

}