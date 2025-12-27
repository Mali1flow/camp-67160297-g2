<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function __construct(){

    }
    function index(){
        return $this->MYFUNCTION();
    }
    function myfunction(){
        return view('myview.index');
    }
    function process(Request $request){
        //echo $request->input('num');
        $data['mynum']= $request->input('num');
        return view('myview.process', $data);
    }
}
