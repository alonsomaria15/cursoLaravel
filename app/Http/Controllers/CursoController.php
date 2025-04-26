<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
 /*   public function getName(){
return view('welcome',['name'=> 'Lupita']);
    }

    public function sumar(){
    $x = 20;
    $y = 30;
    echo 'La suma es:' $x,$y;
    }*/

    public function index()
    {
        $name = 'Juan';
        $lastName = 'Perez';
        $age = 35;
       /* return view('layout.child', [
            'name' => $name,
        'last_name'=> $lastName,
        'age' => $age]);*/

        //return view('layout.child')->with('name', $name)->with('last_name', $lastName)->with('age', $age);

        return view('layout.child', compact('name','last_name','age'));
    }


}
