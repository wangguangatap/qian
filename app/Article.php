<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/*
 * 文章模型
 * */
class Article extends Model
{
    public $timestamps=true;


    protected $validateCreateArticleMeg=[
        'rules'=>[
            'title'=>'required',
        ],
        'message'=>[
            'title.required'=>'标题不能为空',
        ]
    ];


    public function validateCreateArticle($data){
        $vali=Validator::make($data,$this->validateCreateArticleMeg['rules'],$this->validateCreateArticleMeg['message']);
        if($vali->passes()){
            return 1;
        }else{
            return $vali->errors()->all();
        }
    }

}
