<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data=[
            'theme'=>[
                'name'=>'john',
                'dob'=>'10/10/1990'
            ],
            'couses'=>[
                'name'=>'MCA',
                'bcn'=>'dd'
            ]
        ];
        return view('home.home',$data);
    }

    public function about(){

        return view('about.about');
    }
}
