<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddstudentsController;
use App\Http\Controllers\AllstudentsController;
use App\Http\Controllers\TutionController;
use App\Http\Controllers\CSEController;
use App\Http\Controllers\EEEController;
use App\Http\Controllers\SWTController;
use App\Http\Controllers\MBAController;
use App\Http\Controllers\BBAController;
use App\Http\Controllers\TeacherController;
//use App\Http\Controllers\Str;


//logout
Route::get('/logout','App\Http\Controllers\AdminController@logout');
//student logout

Route::get('/student_logout','App\Http\Controllers\AdminController@student_logout');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});
//admin login
Route::post('/adminlogin','App\Http\Controllers\AdminController@login');
Route::get('/admin_dashboard','App\Http\Controllers\AdminController@admin_dashboard');

//student login
Route::post('/welcome','App\Http\Controllers\AdminController@student_login_dashboard');
Route::get('/student_dashboard','App\Http\Controllers\AdminController@student_dashboard');
Route::get('/view','App\Http\Controllers\AdminController@view');
Route::get('/setting','App\Http\Controllers\AdminController@setting');

Route::get('/student_setting','App\Http\Controllers\AdminController@studentsetting');

Route::get('/student_profile','App\Http\Controllers\AllstudentsController@studentprofile');

//students info
Route::get('/addstudent','App\Http\Controllers\AddstudentsController@addstudent');
Route::post('/save_student','App\Http\Controllers\AddstudentsController@savestudent');
Route::get('/student_delete/{student_id}','App\Http\Controllers\AllstudentsController@studentdelete');
Route::get('/student_view/{student_id}','App\Http\Controllers\allstudentsController@studentview');
Route::get('/student_edit/{student_id}','App\Http\Controllers\allstudentsController@studentedit');
Route::post('/update_student/{student_id}','App\Http\Controllers\allstudentsController@studentupdate');
//student own update
Route::post('/student_own_update','App\Http\Controllers\allstudentsController@studentownupdate');

//all student part
Route::get('/allstudent','App\Http\Controllers\AllstudentsController@allstudent');

Route::get('/tutionfee','App\Http\Controllers\TutionController@tutionfee');
Route::get('/cse','App\Http\Controllers\CSEController@cse');
Route::get('/swt','App\Http\Controllers\SWTController@swt');
Route::get('/eee','App\Http\Controllers\EEEController@eee');
Route::get('/bba','App\Http\Controllers\BBAController@bba');
Route::get('/mba','App\Http\Controllers\MBAController@mba');
Route::get('/allteacher','App\Http\Controllers\TeacherController@allteacher');
Route::get('/addteacher','App\Http\Controllers\TeacherController@addteacher');
Route::post('/save_teacher','App\Http\Controllers\TeacherController@saveteacher');






