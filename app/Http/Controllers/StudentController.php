<?php

namespace SMS\Http\Controllers;

use SMS\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	$student = Student::all();
    	return view('student.index', ['student', $student]);
    }

    public function add() {
    	return view('student.add');
    }
}
