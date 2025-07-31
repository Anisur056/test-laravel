<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function showUsers(){
        $students = DB::table('tbl_students')
                    ->orderBy('id','desc')
                    ->Paginate(2);
        return view('students', ['data' => $students]);
    }

    public function singleUser($id){
        $student = DB::table('tbl_students')->where('id',$id)->get();
        return view('student', ['data' => $student]);
    }

    public function addStudent(Request $req){

        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'city' => 'required',
        ]);

        $data_insert = DB::table('tbl_students')
                        ->insert([
                                'name' => $req->name,
                                'email' => $req->email,
                                'age' => $req->age,
                                'city' => $req->city,
                                'created_at' => now(),
                                'updated_at' => now()
                            ]);
        if($data_insert){
            return redirect()->route('students');
        }
    }

    public function updateStudentForm($id){
        // $student = DB::table('tbl_students')->where('id',$id)->get();
        $student = DB::table('tbl_students')->find($id);
        return view('student-update-form', ['data' => $student]);
    }

    public function updateStudent(Request $req){
        $data_update = DB::table('tbl_students')
                        ->where('id',$req->id)
                        ->update(
                            [
                                'name' => $req->name,
                                'email' => $req->email,
                                'age' => $req->age,
                                'city' => $req->city,
                                'updated_at' => now()
                            ]
                        );
        
        if($data_update){
            return redirect()->route('students');
        }
    }

    public function deleteStudent($id){
        $data_delete = DB::table('tbl_students')
                        ->where('id',$id)
                        ->delete();
        if($data_delete){
            echo "<h1>Data deleted successfully.</h1>";
            return redirect()->route('students');
        }else{
            echo "<h1>Data deletion failed.</h1>";
        }
    }

    
}
