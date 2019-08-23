<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Designer extends Model
{
    public $timestamps=true;

    protected $createDesignerValidateMeg=[
        'rules'=>[
            'name'=>'required',
            'sort'=>'required|integer',
            'subtitle'=>'required',
            'file'=>'image'
        ],
        'message'=>[
            'name.required'=>'分类名称不能为空！',
            'sort.required'=>'排序不能为空',
            'sort.integer'=>'排序只能为整数',
            'subtitle.required'=>'英文标题必须填写',
            'file.image'=>'必须上传图片',
        ]
    ];


    public function validateCreateDesigner($data){
        $vali=Validator::make($data,$this->createDesignerValidateMeg['rules'],$this->createDesignerValidateMeg['message']);
        if($vali->passes()){
            return 1;
        }else{
            return $vali->errors()->all();
        }
    }
}
