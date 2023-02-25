<?php

namespace App\Models;

class Call{

    public static function all(){
        $product_store = [
            [
                'lead'          =>  'Come On In',
                'heading'       =>  'Were Open'
            ],
        ];

        return($product_store);
    }

}