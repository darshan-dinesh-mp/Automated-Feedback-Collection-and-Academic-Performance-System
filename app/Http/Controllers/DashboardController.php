<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;


class DashboardController extends Controller
{
    public function admin()
    {
        $teachers = Teacher::all();
        return view('admin.dashboard',compact('teachers')); 
    }

    public function student()
    {
        return view('student.dashboard');
    }

    public function teacher()
    {
        return view('teacher.dashboard'); 
    }
}
