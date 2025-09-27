<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.student');
    }
    public function index()
    {
        return view('modules.student.studentHome');
    }
    public function billing(){
        return view('modules.student.payment');
    }
}
