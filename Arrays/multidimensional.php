<?php
    
// Multidimensional Array in php

$emp = [

    [1, "karishna", "Manager", 50000],
    [2, "SUJAN", "Designer", 20000],
    [3, "Noman", "customer officer", 30000],
    [4, "Ali", "salesman", 40000]

];

// printing the Multidimensional Array using for loop

for($i = 0; $i < count($emp); $i++){

    echo "Employee ID: ".$emp[$i][0]."<br>";
    echo "Name: ".$emp[$i][1]."<br>";
    echo "Position: ".$emp[$i][2]."<br>";
    echo "Salary: ".$emp[$i][3]."<br>";
    echo "<hr>";

}

// printing the Multidimensional Array using foreach loop

echo "<table border= '2px solid' cellpadding= '5px'  cellspacing= 0>";

echo "<tr>";
foreach($emp as $emp_data){

    echo "<td> Employee ID: ".$emp_data[0]. '</td>'."<br>";
    echo "<td> Name: ".$emp_data[1].'</td>'."<br>";
    echo "<td> Position: ".$emp_data[2].'</td>'."<br>";
    echo "<td>  Salary: ".$emp_data[3].'</td>'."<br>";
    echo "</tr>";

}

echo "</table>";

echo "<pre>";
print_r($emp);
echo "</pre>";
