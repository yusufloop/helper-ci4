<?php 
if (!function_exists('fun1')){
    function fun1(){
        return "helper function 1";
    }
}

if(!function_exists('randomstring')){
    function randomstring($length = 8){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i = 0; $i < $length; $i++){
            $randomString .= $characters[rand(0, $charactersLength -1)];
        }
        return $randomString;
    }
}
?>