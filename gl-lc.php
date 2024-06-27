
<?php
    
// Global and Local variable in php

$x = 10;
function test(){

      global $x;
    echo " value of x inside function : $x";
}

test();

echo "<br>";

echo " value of x outside function : $x";
