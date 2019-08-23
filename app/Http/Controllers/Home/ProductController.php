<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Banner;
use App\Category;
use App\Config;
/*
 * 前台产品详情
 * */
class ProductController extends Controller
{
    public function show(Product $product){
        $banner = Banner::where('flag',2)->where('isshow',1)->first();
        return view('home.product.show')
            ->with('product',$product)
            ->with('banner',$banner);
    }

    public function list(Category $category){
        $productTabNum =(integer) ceil((count(Product::where('tuijian',1)->where('cid',$category->id)->get()))/7);
        $product = Product::where('cid',$category->id)->where('tuijian',1)->get();
        $banner = Banner::where('flag',1)->where('isshow',1)->first();

        return view('home.product.list')
            ->with('banner',$banner)
            ->with('productTabNum',$productTabNum)
            ->with('product',$product)
            ->with('category',$category);
    }
}
