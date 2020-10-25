<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models;


class ModelsController extends Controller
{
    public function index(){

        $models = Models::
                    join('galleries', 'galleries.model_id','=','models.id')
                    ->get();

        $data = [
            'content'  => 'model',
            'template' => 'vips',
            'models'   => $models,
            'title'    => 'V.I.P'
        ];

        return view('index' , $data);
    }
   
    public function vip(){
        $data = [
            'content'  => 'model',
            'template' => 'vips'
        ];

        return view('index' , $data);
    }

    public function all(){
        $data = [
            'content'  => 'model',
            'template' => 'basics'
        ];

        return view('index' , $data);
    }

    public function profile(){
        $data = [
            'content'  => 'model',
            'template' => 'profile'
        ];

        return view('index' , $data);
    }

    public function search(){
        $data = [
            'content'  => 'model',
            'template' => 'search'
        ];

        return view('index' , $data);
    }
}
