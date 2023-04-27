<?php
 namespace App\Http\Controllers;
      use Illuminate\Http\Request;
      use DB;
      use App\Http\Requests;
      use App\Http\Controllers\Controller;

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use DB;

// class UpdateController extends Controller
// {
      //   public function index(){
      //      $users = DB::select('select * from users');
      //      return view('lcb',['users'=>$users]);
      //   }
      //   public function show($id) {
      //      $users = DB::select('select * from student where id = ?',[$id]);
      //      return view('stud_update',['users'=>$users]);
      //   }
      //   public function edit(Request $request,$id) {
      //      $name = $request->input('stud_name');
      //      DB::update('update student set name = ? where id = ?',[$name,$id]);
      //      echo "Record updated successfully.<br/>";
      //      echo '<a href = "/edit-records">Click Here</a> to go back.';
      //   }
     
       
      class UpdateController extends Controller {
        public function index(){
           $users = DB::select('select * from users');
           return view('rdk',['users'=>$users]);
        }
        public function show($id) {
           $users = DB::select('select * from users where id = ?',[$id]);
           return view('rdk',['users'=>$users]);
        }
        public function edit(Request $request,$id) {
           $name = $request->input('rdk');
           DB::update('update users set name = ? where id = ?',[$name,$id]);
           echo "Record updated successfully.<br/>";
           echo '<a href = "/edit-records">Click Here</a> to go back.';
        }
      }


      

