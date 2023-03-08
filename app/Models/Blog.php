<?php

namespace App\Models;

class Blog{

    public static function all(){
        $partial_estate4 = [
            [
                'head'          =>  'Our Amazing Posts',
                'body'          =>  'Grid News'
            ]
        ];

        return($partial_estate4);
    }

}