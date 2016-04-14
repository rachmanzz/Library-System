<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests;
use Auth;

class StaticPageController extends Controller
{
    public function index()
    {
    	return view('librarysystem.index');
    }

    public function studentLogin()
    {
        if(Auth::check()){
            $id = Auth::user();
            return redirect()->route('student.show',compact('id'));
        }
    	   return view('librarysystem.studentlogin');
    }

    public function test($id)
    {
    	$student = Student::where('id',$id);
    	return view('librarysystem.test',compact('student'));
    }
}
