<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view

        return view('faculty.faculty', []);
    }
}
