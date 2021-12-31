<?php
    $S = 'll be ba,.,ck after 20 minu,.,tes';


    function longestWords($Str): string
    {
        $StrCase = preg_replace('/[^a-z \d]/i', '', $Str);
        $StrArray = explode(' ',$StrCase);
        $max = 0;
        $mark = 0;
        foreach($StrArray as $key=>$value) {
            if($max < strlen($StrArray[$key])) {
                $max = strlen($StrArray[$key]);
                $mark = $key;
            }
        }
        return $StrArray[$mark];
    }

    
    echo 'string: '.$S.'<br>';
    echo 'the longest word in string iz "'. longestWords($S).'"';
?>