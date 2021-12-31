<?php
    $S = 'ababbabweryerutry';
    $vowel = array('a','e','i','o','u');

    function vowelCount($Str, $vowel)
    {
        $StrArray = str_split($Str);
        $StrArray = array_count_values($StrArray);
        foreach($vowel as $key=>$Value){
            if(array_key_exists($vowel[$key], $StrArray)){
                echo $vowel[$key].' : '.$StrArray[$vowel[$key]].'<br>';
            }
        }
        
    }
    

    echo '"'.$S.'"<br>';
    vowelCount($S, $vowel)
?>