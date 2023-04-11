<?php 
if (!function_exists('fun2')){
    function fun2(){
        return "helper function 2";
    }
}
if(!function_exists('checkeven')){
    function checkeven($num = 0){

        if($num%2 == 0){
            return "Even";
        }else{
            return "Odd";
        }
    }
}
?>