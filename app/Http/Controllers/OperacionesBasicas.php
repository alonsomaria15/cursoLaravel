<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesBasicas extends Controller
{
    public function sumar($x,$y){
        echo 'La suma de ' . $x . ' y ' . $y . ' es: ' . $x+$y;
    }

    public function restar($x,$y){
        echo 'La resta de ' . $x . ' y ' . $y . ' es: ' . $x-$y;
    }

    public function multiplicar($x,$y){
        echo 'La multiplicar de ' . $x . ' y ' . $y . ' es: ' . $x*$y;
    }

    public function dividir($x,$y){
        if ($y == 0) {
            return "No se puede dividir entre 0";
        } else {
            return $x / $y;
        }
        echo 'La dividir de ' . $x . ' y ' . $y . ' es: ' . $x/$y;
    }
}
