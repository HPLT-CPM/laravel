<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show (){
    $num = 11;
    $str = 'wwwww';
    $mas = [1,3,2,3,4] ;
    return view('win', compact('num', 'str'));
    }
}
