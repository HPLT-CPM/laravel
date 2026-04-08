<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        $num = 11;
        $str = "Hello";
        $mas = [5, 2, -9, 12];
        return view('array', compact('num','str','mas'));
    }
}

