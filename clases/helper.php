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
        if (preg_match("~[a-zA-Z0-9]+~", $pw, $matches)){
            return true;
        }else{
            return false;
        }
    }
    function keepValue($val, $type, $attr){
        switch($type){
            case 'textbox':
                echo "value = '$val'";
                break;
            case 'textarea':
                echo "value = '$val'";
                break;
            case 'select':
                if ($attr == 'value'){
                    echo "value = '$val'";        
        }else {
            echo ($val);
        }
    }}
}