<?php
    $S = '#######';


    function backspacesInString($Str): string
    {
        $Str = ltrim($Str,'#');
        $key = 0;
        while ($key < strlen($Str)-1 && strlen($Str) > 2 ) {
            while(strlen($Str) > 2 && $Str[$key+1] == '#' && $key+1 < strlen($Str)) {
                $Str = substr_replace($Str, '', $key, 2);
                if($key>0) $key--;
                else $Str = ltrim($Str,'#');
            }
            $key++;
        }
        if (strlen($Str) == 2 && $Str[1] == '#') {
            return '#';
        }
        $Str = ltrim($Str,'#');
        return $Str;
    }

    
    if (($S)){
        echo '"'.$S.'"<br>';
        if(backspacesInString($S) != '#') echo '"'.backspacesInString($S).'"';
        else echo '""';
    }else{
        echo '""<br>';
        echo '""';
    }
    
    
?>