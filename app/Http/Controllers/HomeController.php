<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signup;

class HomeController extends Controller
{
    function index() {
    	return view('index');
    }
    function privacy() {
    	return view('privacy');
    }
    function signup() {
    	//dd(request()->all());
    	//Validate the input
    	$this->validate(request(), [
    		'id'	=>	'required|unique:signups|digits_between:6,7|integer',
    		'email'	=>	'required|unique:signups|email',
    		'1'		=>	'required_without_all:1,2,3,4,5',
    		'2'		=>	'required_without_all:1,2,3,4,5',
    		'3'		=>	'required_without_all:1,2,3,4,5',
    		'4'		=>	'required_without_all:1,2,3,4,5',
    		'5'		=>	'required_without_all:1,2,3,4,5',
    	]);
    	// Save input data to the database
    	$signup = new Signup;

    	$signup->id = request('id');

    	$signup->email = request('email');

    	//Check which competitions the user has signed up for
    	if(request('1') == true){
    		$signup->one = '1';
    	}

    	if(request('2') == true){
    		$signup->two = '1';
    	}

    	if(request('3') == true){
    		$signup->three = '1';
    	}

    	if(request('4') == true){
    		$signup->four = '1';
    	}

    	if(request('5') == true){
    		$signup->five = '1';
    	}

    	// Save to the database
    	$signup->save();

    	//Flash the session
    	flash()->overlay('Thank you for signing up! We look forward to seeing you on our scopes.','Success!');

    	//Redirect to the homepage
    	return redirect('/');
    }
}
