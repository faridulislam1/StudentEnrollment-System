<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use DB;
use Session;
Session_start();

class TeacherController extends Controller
{
    public function allteacher(){
           $allteacher_info=DB::table('teachers_tbl')
              ->get();//all data show
              $manage_teacher=view('admin.allteacher')
                ->with('all_teacher_info',$allteacher_info);
                return view('layout')
                ->with('allteacher',$manage_teacher);
             }

     public function addteacher(){

        return view('admin.addteacher');
}

//add teacher part

public function saveteacher(Request $request){
    $data=array();
       $data['teachers_name']=$request->teachers_name;
       $data['teachers_phone']=$request->teachers_phone;
       $data['teachers_address']=$request->teachers_address;
       $data['teachers_department']=$request->teachers_department;
       $image=$request->file('teachers_image');


       if($image){

        $image_name= Str::random(40);
        
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.','.$ext;
        $upload_path='image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);

        if($success){
            $data['teachers_image']=$image_url;
            DB::table('teachers_tbl')->insert($data);
            Session::put('exception','Teacher added successfully!');
            return Redirect::to('/addteacher');

        }

       }
      $data['image']=$image_url;
      DB::table('teachers_tbl')->insert($data);
      Session::put('exception','Teacher added successfully!');
      return Redirect::to('/addteacher');

            DB::table('teachers_tbl')->insert($data);
            Session::put('exception','Teacher added successfully!');
            return Redirect::to('/addteacher');

        
    }
}
