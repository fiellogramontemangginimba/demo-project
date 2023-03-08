<?php

namespace App\Models;

class About{

    public static function all(){
        $partial_estate2 = [
            [
                'head'          =>  'We Do Great Design For Creative Folks',
                'body'          =>  'EstateAgency',
                'images'        =>  'assets/img/slide-about-1.jpg',
                'description'   =>  'Sinse 2017'
            ]
        ];

        return($partial_estate2);
    }

}