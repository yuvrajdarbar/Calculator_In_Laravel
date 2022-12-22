<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{
    function show(){
        return view('welcome');
    }

    function display(Request $request){
    
$number1 =$request->num1;
$number2 =$request->num2;
$operator =$request->operator;

// print($number1);
// print($number2);
// print($operator);


switch ($operator) {
    case '1':
             $result = $number1 + $number2;
            //  print("The addition of ". $number1 ." and ".$number2. " = ". $result);
             break;
    case '2':
            $result = $number1 - $number2;
            // print("The subtraction of ". $number1 ." and ".$number2. " = ". $result);
            break;
    case '3':
                $result = $number1 * $number2;
            // print("The Multiplication of ". $number1 ." and ".$number2. " = ". $result);
                break;
    case '4':
                $result = $number1 / $number2;
            // print("The Division of ". $number1 ." and ".$number2. " = ". $result);
                break;
    default:
        $result ="Invalid operator please select valid operator";
        break;
}
        return view('welcome', ['result' => $result]);
    }
}
