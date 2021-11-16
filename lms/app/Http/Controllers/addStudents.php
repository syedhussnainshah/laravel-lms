<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_student;
use Illuminate\Support\Facades\DB;

class addStudents extends Controller
{
    public function std_create(Request $request)
    {
    	 $save = new add_student;
        $save->std_name = $request->std_name;
        $save->std_reg_no = $request->std_reg_no;
        $save->std_rol_no = $request->std_rol_no;
        $save->std_class = $request->std_class;
        $save->std_section = $request->std_section;
        $save->std_by_cnic = $request->std_by_cnic;
        $save->std_gen = $request->std_gen;
        // $size = $request->file('std_image')->getSize();
        // $name = $request->file('std_image')->getClientOriginalName();
        // $save->file('std_image')->store('public/assets/image');


        // if ($request->hash('std_image')) {
        //     $file = $request->file('std_image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file->move('assets/image',$filename);
        //     $save->std_image=$filename;
        // }else{
        //     return $request;
        //     $save->std_image = "";
        // }
        // $save->std_dob = $request->std_dob;
        // $save->std_rligion = $request->std_rligion;
        // $save->std_father_name = $request->std_father_name;
        // $save->std_father_cnic = $request->std_father_cnic;
        // $save->std_father_m_no = $request->std_father_m_no;
        // $save->std_mother_mother = $request->std_mother_mother;
        // $save->std_gardian = $request->std_gardian;
        // $save->std_gardian_relation = $request->std_gardian_relation;
        // $save->std_gardian_name = $request->std_gardian_name;
        // $save->std_gardian_cnic = $request->std_gardian_cnic;
        // $save->std_gardian_m_no = $request->std_gardian_m_no;
        // $save->std_province = $request->std_province;
        // $save->std_city = $request->std_city;
        // $save->std_postal_address = $request->std_postal_address;
        // $save->std_gardian_m_no = $request->std_gardian_m_no;
        $save->save();
        if ($save) {
        	return redirect('add_student');
        }  
}
public function all_student_show()
{
	$students = add_student::all();
	$all_data = DB::table('add_students')
	->join('student_class','student_class.id','=','add_students.std_class')
	->join('section','section.id','=','add_students.std_section')
	->select('add_students.std_class','add_students.std_name','add_students.std_reg_no','add_students.std_rol_no','section.section_name','student_class.class_name')
	->get();
	// $stdudent_class = DB::select('select * from student_class');
    return view ('show_student',compact('students','all_data'));
	// return view('show_student');
}

public function show(Request $request)
{
    // $id = $request->id;
	$student_classses = DB::table('student_class')
    // ->where('id',$id)
	->get();
	$variable = compact('student_classses');
	return view('find_student')->with($variable);
}
public function student_class(Request $request)
{	
    // $std_gen = $request->std_gen;
    // if () {
    //     # code...
    // }
    $id = $request->id;
	$class_student = DB::table('add_students')
	->where('std_class',$id)
    ->where('std_gen', 2)
	->join('student_class','student_class.id','=','add_students.std_class')
    ->join('section','section.id','=','add_students.std_section')
	->join('std_gen','std_gen.id','=','add_students.std_gen')
	->select('add_students.id','add_students.std_class','add_students.std_name','add_students.std_reg_no','add_students.std_rol_no','section.section_name','student_class.class_name','std_gen.gen_name')
	->get();
	// $stdudent_class = DB::select('select * from student_class');
    // Session::get($id);

	return view ('single_class_student',compact('class_student'));
}

// student_class_filter
}
