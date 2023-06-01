<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SWTController extends Controller
{
     public function swt(){
       $swtstudent_info=DB::table('student_tbl')
       ->where(['student_department'=>2])
       ->get();
        $manage_student=view('admin.swt')
                ->with('swt_student_info',$swtstudent_info);
                return view('layout')
                ->with('swt',$manage_student);

    }
}
