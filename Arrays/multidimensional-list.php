
<?php
    
// multidimensional Array with list() function

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2)
);

// print each data item using foreach loop using list() functiion

foreach ($cars as list($make, $model, $year)) {
    echo "Make: $make, Model: $model, Year: $year <br>";
}

?>

