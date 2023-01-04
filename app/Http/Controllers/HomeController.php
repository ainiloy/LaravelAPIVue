<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Instructor;

class HomeController extends Controller
{
    function Course(Request $request){
        $result= Course::all();
        return $result;
    }

    function Instructor(Request $request){
        $result= Instructor::all();
        return $result;
    }
}
