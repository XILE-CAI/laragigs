<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [          
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'test laravel app description' 
                ],
                [
                    'id' => 2,
                    'title' => 'Listing two',
                    'description' => 'test laravel app description' 
                ]
            ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id'] == $id){
                    return $listing;
                }else{
                    echo "no item";
                }
            }
        }
    }