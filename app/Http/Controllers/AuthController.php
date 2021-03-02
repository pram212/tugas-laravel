<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showForm(){
    	return view('register');
    }
    public function showWelcomePage(){
    	return view('welcome');
    }
    public function getFullName(Request $result){
    	// debugging
    	// dd($result->all());
    	$fullname = $result["firstname"] ." ". $result["lastname"];
    	return view('welcome', ['fullname' => $fullname]);
    }
}
