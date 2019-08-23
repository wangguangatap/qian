<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aboutus;
use App\Config;

class AboutController extends Controller
{
    public function index(){
        $about  = Aboutus::where('flag',0)->first();

        return view('home.about.index')->with('about',$about);
    }
}
