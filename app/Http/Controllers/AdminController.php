<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\AdminController;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdminController extends Controller
   {
    public function admin_dashboard(){

        return view('admin.dashboard');


    }
    //student login part

     public function student_dashboard(){

        return view('student.dashboard');


    }
//view profile
     public function view(){

        return view('admin.view');


    }
//setting
     public function setting(){

        return view('admin.setting');


    }
    //student setting are here
  public function studentsetting(){
            $student_id=Session::get('student_id');
            $student_descrition_view=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();
                  // echo"</pre>";
                  // print_r($student_descrition_view);
                   //echo"</pre>";

          $manage_description_student=view('student.student_setting')
               ->with('student_descrition_profile',$student_descrition_view);
                 return view('student_layout')
                ->with('student_setting',$manage_description_student);
              }
        
    
    //logoutpart
    
    public function logout()
    {

       Session::put('admin_name',null);
       Session::put('admin_id',null);

    return Redirect::to('/backend');

    }
     // Student logoutpart
    
    public function student_logout()
    {

       Session::put('student_name',null);
       Session::put('student_id',null);

    return Redirect::to('/');

    }
//login dashboard for admin
     public function login(Request $request){
       // return view('admin.dashboard');

        $email=$request-> admin_email;
        $password=md5($request->admin_password);
        $result=DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();

        if($result){
          Session::put('admin_email',$result->admin_email);
          Session::put('admin_id',$result->admin_id);
          return Redirect::to('/admin_dashboard');
          
           

        }
        else{
            Session::put('exception','Email or Password invalid');

            return Redirect::to('/backend');
   }
}

//Student login dashboard for Student
     public function student_login_dashboard(Request $request){
       // return view('admin.dashboard');

        $email=$request->student_email;
        $password=md5($request->student_password);
        $result=DB::table('student_tbl')
        ->where('student_email',$email)
        ->where('student_password',$password)
        ->first();

        if($result){
          Session::put('student_password',$result->student_email);
          Session::put('student_id',$result->student_id);
          return Redirect::to('/student_dashboard');
          
           

        }
        else{
            Session::put('exception','Email or Password invalid');

            return Redirect::to('/');
   }
}
}
