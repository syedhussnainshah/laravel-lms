<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;

class singup extends Controller
{
    public function add_reg(Request $request)
    {
    	$save = new register;
    	$save->fname = $request->fname;
    	$save->lname = $request->lname;
    	$save->email = $request->email;
    	$save->password = $request->password;
    	$save->save();
    	if ($save) {
    		return redirect('login');
    	}
    }
    public function user_login(Request $request)
    {
    	// $email = $register->email;
    	// $password = $request->password;
    	$request->validate([
    		'email'=>'required|email',
    		'password'=>'required|min:5|max:12'
    	]);
    	$userInfo = register::where('email','=',$request->email)->first();
    	if (!$userInfo) {
    		return back()->with('fail','We do not recognized your email');
    	}else{
    		if ($request->password,$userInfo->password) {
    			$request->session()->put('loggedUser','$userInfo->id');
    			return redirect('add_student');
    		}else{
    			return back()->with('fail','INccorect Passowrd');
    		}
    	}
    }
}
