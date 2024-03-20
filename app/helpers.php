<?php

use App\Models\portofolio;
use App\Models\section;
use App\Models\setting;
use App\Models\skill;

function get_setting_value($key){
    $data = setting::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;

    }else{
        return 'empty';
    }
}

function get_section_data(){
    $data = section::all();
    return $data;
}


function get_portofolio(){
    $data = portofolio::all();
    return $data;
}


function get_porto_value($key){
    $data = setting::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;

    }else{
        return 'empty';
    }
}
function get_skill_value($key){
    $data = skill::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;

    }else{
        return 'empty';
    }
}
