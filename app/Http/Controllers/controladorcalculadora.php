<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorcalculadora extends Controller
{
   public function sumar(Request $req)
   {
    $num1 = $req['num1'];
    $num2 = $req['num2'];
    $operacion = $req['operacion'];
    $res;

    if($operacion==1) {
           $res = $num1 + $num2;
    }
    if($operacion==2){
           $res = $num1 - $num2; 
    }
    if($operacion==3){
           $res = $num1 / $num2; 
    }
    if($operacion==4){
           $res = $num1 * $num2; 
    }

    return view('calculadora',['res' => $res]);

   }
}
