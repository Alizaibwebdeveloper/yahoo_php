<?php
    
// passing a value by referance in function 



function add(&$a, $b){
    $a = $a + $b;
}

$a = 10;

$b = 20;

add($a, $b);

echo $a;

echo '<br>';

echo $b;