<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offer;
/*
 * 报价表单处理
 * */

class OfferController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post')){
            $model= new Offer();
            $model->name = $request->name;
            $model->tel = $request->tel;
            $model->email = $request->email;
            $model->message = $request->message;
            $model->save();
        }
        return back();
    }
}
