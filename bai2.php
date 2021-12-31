<?php
    $S = 'fun times!';

    $vowel = array('a','e','i','o','u');

    function letterIncrease($Str): string
    {
        for($key = 0;$key < strlen($Str);$key++) {
            if(ctype_alpha($Str[$key])) {
                if($Str[$key] == 'z') {
                    $Str[$key] = 'a';
                }else {
                    $Str[$key] = chr(ord($Str[$key]) + 1) ;
                }
                
            }
        }
        return $Str;
    }   

    function letterVower($Str, $vowel): string 
    { 
        for($key = 0;$key < strlen($Str);$key++) {
            if (in_array($Str[$key], $vowel)){
                $Str[$key] = strtoupper($Str[$key]);
            }      
        }
        return $Str;
    }

    
    echo $S.'<br>';
    echo letterVower(letterIncrease($S), $vowel);
?>