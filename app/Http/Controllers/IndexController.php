<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //Get data from DB in here and pass it to the view

    public function index() {

        return view('index.index', []);
    }

}
