<?php
    $S = 'gh12cdy695m1';


    function numbersInStrings($Str)
    {
        $StrNum = preg_replace('/[^\d]/i', ' ', $Str);
        $StrNum = trim($StrNum);
        $StrNum = preg_replace('/[\s+]/i', ' ', $StrNum);
        $StrArray = explode(' ',$StrNum);
        return max($StrArray);
    }

    
    echo $S.'<br>';
    echo numbersInStrings($S);
?>