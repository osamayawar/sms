<?php

namespace SMS\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	return view('student/index');
    }

    public function add() {
    	return view('student/add');
    }
}
