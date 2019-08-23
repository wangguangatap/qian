<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Config;
use App\Category;
use App\Banner;

class CategoryController extends Controller
{
    public function index(){

        $banner = Banner::where('flag',1)->where('isshow',1)->first();
        $category = Category::OrderBy('sort','asc')->limit(3)->get();

        return view('home.category.index')
            ->with('category',$category)
            ->with('banner',$banner);

    }
}
