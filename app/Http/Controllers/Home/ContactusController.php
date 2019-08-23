<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Config;
use App\Banner;

class ContactusController extends Controller
{
    public function index(){
        $banner = Banner::where('flag',2)->where('isshow',1)->first();
        return view('home.contact.index')
            ->with('banner',$banner);

    }
}
