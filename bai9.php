<?php
    $my_array = array('a', 'b', 'c');

    $other_array= array(1, 2, 3);



    $swap_array = array_reverse($my_array);
    $my_array = array_reverse($other_array);
    $other_array = $swap_array;



    
    echo 'my_array : [';
    foreach($my_array as $key=>$Value){
        echo '\''.$my_array[$key].'\', ';
    }
    echo '] <br>';
    echo 'other_array : [';
    foreach($other_array as $key=>$Value){
        echo '\''.$other_array[$key].'\', ';
    }
    echo '] <br>';
?>