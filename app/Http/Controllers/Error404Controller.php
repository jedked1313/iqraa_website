<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Error404Controller extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view
    
        return view('error404.error404', []);
    }
}
