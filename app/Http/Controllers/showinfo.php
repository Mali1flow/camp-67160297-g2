<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showinfo extends Controller
{

    function index(){
        return $this->MYFUNCTION();
    }
    function myfunction(){
        return view('info.myinfo');
    }
    function store(Request $request){
        //echo $request->input('num');
        $data['fname']= $request->input('first_name');
        $data['lname']= $request->input('last_name');
        $data['born']= $request->input('birth_date');
        $data['Sex']= $request->input('gender');
        $data['Picture']= $request->input('user_picture');
        $data['Address']= $request->input('address');
        $data['Favorite_color']= $request->input('favorite_color');
        $data['Type_of_music']= $request->input('music_type');

        return view('info.process', $data);
    }
}
