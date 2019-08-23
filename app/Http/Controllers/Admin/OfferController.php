<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offer;
/*
 * 报价查看控制器
 * */
class OfferController extends Controller
{
    public function index(){
        $offer=Offer::OrderBy('id','asc')->paginate(20);
        return view('admin.offer.index')->with('offer',$offer);
    }
    public function destroy(Offer $offer){
        $offer->delete();
        return back();
    }
}
