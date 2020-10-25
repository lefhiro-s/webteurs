<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function contact(){
        $data = [
            'content' => 'general',
            'template' => 'contact'
        ];

        return view('index' , $data);
    }

    public function info(){
        $data = [
            'content' => 'general',
            'template' => 'info'
        ];

        return view('index' , $data);
    }

    public function search($data){
        $data = [
            'content' => 'general',
            'template' => 'search'
        ];
    }

    public function signup(){
        $data = [
            'content' => 'general',
            'template' => 'signup'
        ];

        return view('index' , $data);
    }
}
