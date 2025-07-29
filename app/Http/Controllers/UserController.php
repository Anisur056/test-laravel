<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function showUsers(){
        $students = DB::table('tbl_students')->get();
        return view('students', ['data' => $students]);
    }

    public function singleUser($id){
        $student = DB::table('tbl_students')->where('id',$id)->get();
        return view('student', ['data' => $student]);
    }
}
