<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    //
    public function home()
    {
    	return view('welcome');
    }
    public function about()
    {
    	$name = 'abc';
    	$email = 'abc@gmail.com';
    	return view('about',['name' =>$name,'email'=>$email]);
    }
    public function store(Request $request)
    {
    	$name =$request->name;
    	$email =$request->email;
    	$salary =$request->salary;


    	$obj =new Student();
    	$obj->name=$name;
    	$obj->email=$email;
    	$obj->salary=$salary;

    	if($obj->save())
    		{
    			echo "Sucessfully inserted";
    		}
    }
    public function table()
    {
    	$data=Student::all();
    	return view('list',['mydata'=> $data]);
    }
}
