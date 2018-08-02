<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdressbookController extends Controller
{
    public function adressbook(){

        $data = [ 
            
        [
            'id' => 1,
            'name' => 'Max',
            'birthday' => '1980-12-31',
            
            'email' => 
            [[
                'id' => 1,
                'role' => 'private',
                'email-address' => 'max@private.com'
            ],
            'email' => 
            [
                'id' => 2,
                'role' => 'business',
                'email-address' => 'max@company.com'
            ]],
            'phone' => [[[
                'id' => 1,
                'role' => 'private',
                'email-address' => '0075 9878 5453'
            ],
                'id' => 2,
                'role' => 'business',
                'phone-number' => '0075 1233 4566'
            
        ],[
                'id' => 3,
                'role' => 'mobile',
                'phone-number' => '0075 98798 65465'
        ]
        ]]];          
             
           
            
            
            
            
            return response()->json($data);
    }
}