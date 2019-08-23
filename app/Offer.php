<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Offer extends Model
{
    public $timestamps=true;
    protected $fillable=['name','tel','email','message'];
    protected $validateOfferMsg=[
        'rules'=>[
            'webName'=>'required',
            'webDomain'=>'required|url',
            'webKeyword'=>'required',
            'webDesc'=>'required',
            'webStatus'=>'required|in:0,1',
        ],
        'message'=>[
            'webName.required'=>'网站名称不能为空',
            'webDomain.required'=>'网站域名不能为空',
            'webDomain.url'=>'网站域名不合法',
            'webDesc.required'=>'网站描述不能为空',
            'webKeyword.required'=>'网站关键字不能为空',
            'webStatus.required'=>'网站状态必选',
            'webStatus.in'=>'网站状态必须为0或者1'
        ]
    ];

    public function validateOffer($data){
        $info=Validator::make($data,$this->validateOfferMsg['rules'],$this->validateOfferMsg['message']);
        if($info->passes()){
            return 1;
        }else{
            return $info->errors()->all();
        }
    }
}
