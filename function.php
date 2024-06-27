
<?php
    
// function in php

function percentage($total){

    $per = $total / 300 * 100;
    echo $per;
}

function sum($math, $eng , $urdu){

    $v = $math + $eng + $urdu;
    return $v;
}


$total = sum(55, 50, 56);

echo $total;

percentage($total);