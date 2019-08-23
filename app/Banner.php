<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Banner extends Model
{
    public $timestamps=true;

    protected $createBannerValidateMeg=[
        'rules'=>[
            'title'=>'required',
            'sort'=>'required|integer',
            'desc'=>'required',
            'isshow'=>'required',
            'flag'=>'required',
            'file'=>'image'
        ],
        'message'=>[
            'title.required'=>'标题不能为空！',
            'sort.required'=>'排序不能为空',
            'sort.integer'=>'排序只能为整数',
            'desc.required'=>'描述不能为空',
            'isshow.required'=>'是否显示必须选择',
            'flag.required'=>'标识位置必须选择',
            'file.image'=>'必须上传图片',
        ]
    ];


    public function validateCreateBanner($data){
        $vali=Validator::make($data,$this->createBannerValidateMeg['rules'],$this->createBannerValidateMeg['message']);
        if($vali->passes()){
            return 1;
        }else{
            return $vali->errors()->all();
        }
    }
}
