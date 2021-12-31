<?php
    $S = 'ababbab';


    function mostCommonCharInStrings($Str)
    {
        $StrCase = preg_replace('/[^a-z ^\d]/i', ' ', $Str);
        $StrCase = trim($StrCase);
        $StrCase = preg_replace('/[\s+]/i', ' ', $StrCase);
        $StrArray = str_split($StrCase);
        $StrArray = array_count_values($StrArray);
        $Max1 = max($StrArray);
        $Char = array_search($Max1, $StrArray);
        unset($StrArray[$Char]);
        $Max2 = max($StrArray);
        if($Max1 == $Max2){
            return -1;
        }
        return $Char;
    }

    
    echo '"'.$S.'"<br>';
    if(mostCommonCharInStrings($S) != -1)echo '"'.mostCommonCharInStrings($S).'"';
    else echo '""';
?>