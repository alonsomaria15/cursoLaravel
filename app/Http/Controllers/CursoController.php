<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName(){
return view('welcome',['name'=> 'Lupita']);
    }

    public function sumar(){
    $x = 20;
    $y = 30;
    echo 'La suma es:' $x,$y;
    }


}
