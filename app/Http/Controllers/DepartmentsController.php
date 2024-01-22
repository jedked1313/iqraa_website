<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //Get data from DB in here and pass it to the view

    public function index() {

        return view('departments.departments', []);
    }

}
