<?php
namespace dat;
class ArrayCallback {
    public static function select($arr, $callback){
        $result = [];
        if($arr && is_array($arr)){
            foreach($arr as $key=>$val){
                $result[] = $callback($val, $key);
            }
        }
        return $result;
    }
    
    public static function reduce($arr, $callback, $inital=null){
        $sum = $inital;
        if($arr && is_array($arr)){
            foreach($arr as $val){
                $sum = $callback($sum, $val);
            }
        }
        return $sum;
    }

    public static function filter($arr, $callback){
        
    }
}

?>