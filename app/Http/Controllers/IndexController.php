<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Slider;
use Illuminate\support\Facads\Storage;


class IndexController extends Controller
{
    //Get data from DB in here and pass it to the view

    public function index() {

        $news = News::all();
        $news = $news->take(4);
        $sliders = Slider::all();
        return view('index.index', compact('news','sliders'));
    }

}
