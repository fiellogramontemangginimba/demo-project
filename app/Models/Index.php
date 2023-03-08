<?php

namespace App\Models;

class Index{

    public static function all(){
        $partial_estate1 = [
            [
                'head'          =>  'l, Florida',
                'body'          =>  '78345',
                'section'          =>  '204',
                'description'   =>  'rent | $ 12.000'
            ]
        ];

        return($partial_estate1);
    }

}