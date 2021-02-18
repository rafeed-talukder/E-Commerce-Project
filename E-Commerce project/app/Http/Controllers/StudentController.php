<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
//        return"come from controller";
        $name="Md.Rafeed Talukder";
        $age='40';
//        return view('home',compact('name','age'));   //value call er method 1.compact()
//        return view('home')
//            ->with('name',$name)
//            ->with('age',$age);                      //value call er second method 2.->with()

        return view('home')
            ->with('name2',$name)
            ->with('age2',$age);

        return view('home',[
            'name2'=>$name,
             'age2'=>$age
        ]);



    }
    public function about(){
        return"come from about controller";
//        return view('home');
    }
}
