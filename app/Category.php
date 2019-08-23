<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Category extends Model
{
    //

    public $timestamps=true;

    protected $createCateValidateMeg=[
        'rules'=>[
            'name'=>'required',
            'sort'=>'required|integer',
            'title'=>'required',
            'file'=>'image'
        ],
        'message'=>[
            'name.required'=>'分类名称不能为空！',
            'sort.required'=>'排序不能为空',
            'sort.integer'=>'排序只能为整数',
            'title.required'=>'英文标题必须填写',
            'file.image'=>'必须上传图片',
        ]
    ];


    public function validateCreateCategory($data){
        $vali=Validator::make($data,$this->createCateValidateMeg['rules'],$this->createCateValidateMeg['message']);
        if($vali->passes()){
            return 1;
        }else{
            return $vali->errors()->all();
        }
    }
}
