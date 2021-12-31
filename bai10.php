<?php
    $S = 'Tomatoes';
    $vowel = array('a','e','i','o','u');

    function vowelReverse($Str, $vowel)
    {
        $StrArray = str_split($Str);
        $vowelArray = array();
        $vowelKey = array();
        foreach($StrArray as $key=>$value){
            if(in_array($StrArray[$key], $vowel)){
                array_push($vowelArray, $StrArray[$key]);
                array_push($vowelKey, $key);
            }
        }
        for($key = 0;$key < sizeof($vowelArray)/2;$key++){
            $exchanger = $vowelArray[$key];
            $vowelArray[$key] = $vowelArray[sizeof($vowelArray)-1-$key];
            $vowelArray[sizeof($vowelArray)-1-$key] = $exchanger;
        }
        for($key = 0;$key < sizeof($vowelArray);$key++){
            $StrArray[$vowelKey[$key]] = $vowelArray[$key];
        }
        $Str = implode($StrArray);
        return $Str;
    }
    

    echo '"'.$S.'"<br>';
    echo '"'.vowelReverse($S, $vowel).'"';
?>