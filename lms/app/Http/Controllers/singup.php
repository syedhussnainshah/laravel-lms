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
    	$email = $register->email;
    	$password = $request->password;
    	
    $class_student = DB::table('add_students')
	->where('std_class',$id)
    ->where('std_gen', 2)
	->join('student_class','student_class.id','=','add_students.std_class')
    ->join('section','section.id','=','add_students.std_section')
	->join('std_gen','std_gen.id','=','add_students.std_gen')
	->select('add_students.id','add_students.std_class','add_students.std_name','add_students.std_reg_no','add_students.std_rol_no','section.section_name','student_class.class_name','std_gen.gen_name')
	->get();
    }
}
