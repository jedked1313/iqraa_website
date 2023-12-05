<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view
    
        return view('Programs.Programs', []);
    }
}
