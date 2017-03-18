<?php

$names = array(
    'John',
    'Bon',
    'Rusty',
    'Max'
);

foreach($names as $value){
    
echo $value . '<br>';
    
}

$bigger = get_bigger(5,10);
echo $bigger;

function get_bigger($a,$b){
    if ($a<$b){
        return $b;
    }
    else{
        return $a;
    } 
    
}
    







