<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Aboutus extends Model
{
    public $timestamps=true;


    protected $validateCreateAboutMeg=[
        'rules'=>[
            'title'=>'required',
            'flag'=>'required'
        ],
        'message'=>[
            'title.required'=>'标题不能为空',
            'flag.required'=>'所属栏目必须选择'
        ]
    ];


    public function validateCreateAbout($data){
        $vali=Validator::make($data,$this->validateCreateAboutMeg['rules'],$this->validateCreateAboutMeg['message']);
        if($vali->passes()){
            return 1;
        }else{
            return $vali->errors()->all();
        }
    }
}
