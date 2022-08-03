<?php

use Illuminate\Support\Facades\File;
if(!function_exists('dataJson')){
    function dataJson(){
    
        $file = File::get(public_path('files/static_content.json'));
        $data  = json_decode($file, true);//array
        return $data;
        
    }
    
}
function toastr(string $type = 'info',string $msg = ''){
    $type = strtolower($type);
    $toastrTypes = ['success','info','warning','error'];
    if(!in_array($type,$toastrTypes)){
        $type = 'info';
    }
    $toast = "";
    return session()->flash('','');
    // 'toastr["success"]("Have fun storming the castle!")'
    
    
}