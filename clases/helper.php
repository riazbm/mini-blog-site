<?php
  class Helper{
    public function __construct(){}
    function passwordsMatch($pw1, $pw2){
        if ($pw1 == $pw2){
            return true;
        }else{
            return false;
        }
    }
    function isValidLength($str, $min = 8, $max = 20){
        strlen($str);
        if ($str < $min || $str > $max){
            return false;
        }else{
            return true;
        }
    }
    function isEmpty($postValues){
        if (is_array($postValues)){
            foreach ($postValues as $key => $value){
                return true;
    }
}else{
    return false;
}
}
    function isSecure($pw){
        preg_match();
    }
    function keepValue(){}
  }