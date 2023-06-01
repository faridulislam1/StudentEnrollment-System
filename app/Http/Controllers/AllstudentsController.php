<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllstudentsController extends Controller
{
   public function allstudent(){

            $allstudent_info=DB::table('student_tbl')
              ->get();//all data show
              $manage_student=view('admin.allstudent')
                ->with('all_student_info',$allstudent_info);
                return view('layout')
                ->with('allstudent',$manage_student);
             }
 // student delete method info
                 public function studentdelete($student_id){
                  DB::table('student_tbl')
                  ->where('student_id',$student_id)
                  ->delete();
                  return Redirect::to('/allstudent');
               }

    // student View method info

          public function studentview($student_id){
          $student_descrition_view=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();
                  // echo"</pre>";
                   //print_r($student_descrition_view);
                  // echo"</pre>";

          $manage_description_student=view('admin.studentview')
                ->with('student_descrition_profile',$student_descrition_view);
                return view('layout')
                ->with('studentview',$manage_description_student);

}
//student Edit part
                public function studentedit($student_id){
          $student_descrition_view=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();
                  // echo"</pre>";
                  // print_r($student_descrition_view);
                   //echo"</pre>";

          $manage_description_student=view('admin.student_edit')
               ->with('student_descrition_profile',$student_descrition_view);
                 return view('layout')
                ->with('student_edit',$manage_description_student);
              }
   //student update  part
              
       public function studentupdate(Request $request,$student_id){

                $data=array();
                $data['student_name']=$request->student_name;
                $data['student_roll']=$request->student_roll;
                $data['student_fathersname']=$request->student_fathersname;
                $data['student_mothersname']=$request->student_mothersname;
                $data['student_email']=$request->student_email;
                $data['student_phone']=$request->student_phone;
                $data['student_address']=$request->student_address;
                $data['student_password']=$request->student_password;
                $data['student_admissionyear']=$request->student_admissionyear;

                DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->update($data);

                Session::put('exception', 'student update successfully');
                return Redirect::to('/allstudent');
}

//student own update  part
              
       public function studentownupdate(Request $request){

            $student_id=Session::get('student_id');
                $data=array();
                $data['student_phone']=$request->student_phone;
                $data['student_address']=$request->student_address;
                $data['student_password']=$request->student_password;
                DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->update($data);

                Session::put('exception', 'student update successfully');
                return Redirect::to('/student_setting');
}
//student profile part

      public function studentprofile(){

                   $student_id=Session::get('student_id');

                   $student_profile=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();

                   //echo"</pre>";
                   //print_r($student_profile);
                   //echo"</pre>";

              $manage_profile=view('student.student_view')
                ->with('student_profile',$student_profile);
                 return view('student_layout')
                ->with('student_view',$manage_profile);    

   }
}