<?php

namespace App\Models;

class Property{

    public static function all(){
        $partial_estate3 = [
            [
                'head'          =>  'Our Amazing Properties',
                'body'          =>  'Grid Properties'
            ]
        ];

        return($partial_estate3);
    }

}