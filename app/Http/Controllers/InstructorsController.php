<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructors;


class InstructorsController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view

        $instructors = Instructors::all();
        return view('instructors.instructors', compact('instructors'));
    }
}
