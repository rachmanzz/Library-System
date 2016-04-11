<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticPageController extends Controller
{
    public function index()
    {
    	return view('librarysystem.index');
    }

    public function studentLogin()
    {
    	return view('librarysystem.studentlogin');
    }
}