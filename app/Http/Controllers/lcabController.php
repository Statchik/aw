<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class lcabController extends Controller
{

public function lcb()
     { 
        $yslugi = DB::table('yslugi')->get(); 
        $people = DB::table('users')->get();  
        return view('lcb', ['people' => $people, 'yslugi' => $yslugi]);
      }
}

     

    // public function lcb()
    // {
    //     return view ('lcb');
    // }

 
 
     

