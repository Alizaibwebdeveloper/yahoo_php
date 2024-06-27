
<?php
    
// foreach loop in php


$age = [

    "Alice" => 25,
    "Bob" => 30,
    "Charlie" => 28,
    "David" => 27,
    "Eve" => 32
];
echo "<ul>";

foreach($age as $keys => $value){

    echo "<li>" . $keys ."=>". $value . "<br>" . "</li>";

}

echo "</ul>";