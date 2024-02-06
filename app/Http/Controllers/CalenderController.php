<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calender;


class CalenderController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view
    
        $calendars = Calender::all();
        return view('calender.calender',compact('calendars'));
    }
}
