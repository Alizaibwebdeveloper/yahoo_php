<?php
    
// min() and max() function of php


$numbers = [10, 20, 30, 40, 50];

$min = min($numbers);

$max = max($numbers);

echo "Minimum number is: " . $min . "<br>";

echo "Maximum number is: " . $max;

// abs() function in php

$number = -10;

$abs = abs($number);

echo "<br>Absolute value of " . $number . " is: " . $abs;

// floor() function in php

$number = 12.7;

$floor = floor($number);

echo "<br>Floor value of " . $number . " is: " . $floor;

// ceil() function in php

$number = 12.3;

$ceil = ceil($number);

echo "<br>Ceil value of " . $number . " is: " . $ceil;

// round() function in php

$number = 12.5;

$round = round($number);

echo "<br>Round value of " . $number . " is: " . $round;

// sqrt() function in php

$number = 25;

$sqrt = sqrt($number);

echo "<br>Square root of " . $number . " is: " . $sqrt;

// pow() function in php

$base = 2;

$exponent = 3;

$pow = pow($base, $exponent);

echo "<br>Result of " . $base . " raised to the power of " . $exponent . " is: " . $pow;

// intdiv()

$dividend = 10;

$divisor = 3;

$quotient = intdiv($dividend, $divisor);

echo "<br>Quotient of " . $dividend . " divided by " . $divisor . " is: " . $quotient;

// rand() functionin php

$min = 1;

$max = 100;

$random = rand($min, $max);

echo "<br>Random number between " . $min . " and " . $max . " is: " . $random;

// Date() function in php

$date = date("Y-m-d H:i:s");

echo "<br>Current date and time: " . $date;

// date_crete() function in php

$date = date_create("2028-01-01");

$formatted_date = date_format($date, "Y-m-d");

echo "<br>Formatted date: " . $formatted_date;

// check_date() and date_diff() function in php

$date1 = date_create("2021-01-01");

$date2 = date_create("2022-12-31");

$diff = date_diff($date1, $date2);

echo "<br>Difference between 2021-01-01 and 2022-12-31: " . $diff->format("%Y years, %m months, %d days");

// date_add() and date_sub() function in php

$date = date_create("2021-01-01");

echo "<pre>";
print_r($date);

echo "</pre>";

$date_add = date_add($date, date_interval_create_from_date_string("2 years"));

$formatted_date_add = date_format($date_add, "Y-m-d");

echo "<br>Date after adding 2 years: ". $formatted_date_add;

$date_sub = date_sub($date, date_interval_create_from_date_string("1 month"));

$formatted_date_sub = date_format($date_sub, "Y-m-d");

echo "<br>Date after subtracting 1 month: ". $formatted_date_sub;

// getdate() 


echo "<pre>";

print_r(localtime(time(),true));

echo "</pre>";

$date = gettimeofday();

echo $date['usec'];

// date_parse() function in php

$date = "2021-01-01";

$parsed_date = date_parse($date);

echo "<pre>";

print_r($parsed_date);

echo "</pre>";

// date_time_set() function in php

$date = new DateTime();

$date->setDate(2021, 1, 1);

$date->setTime(12, 0, 0);

echo $date->format("Y-m-d H:i:s");

// date_timezone_set() function in php

  date_default_timezone_set('Asia/Karachi') ."<br>";

echo date_default_timezone_get()."<br>";

$tz = timezone_open("Asia/Karachi");

echo timezone_name_get($tz);

$get_location=  timezone_location_get($tz);

echo "<pre>";

print_r($get_location);

echo "</pre>";

echo "<pre>";

print_r(timezone_identifiers_list());

echo "</pre>";

// $_GET() 

// $_SERVER() variable in php

$url = "https://www.example.com/search?q=apple&sort=desc";

parse_str(parse_url($url, PHP_URL_QUERY), $query_params);

echo "<pre>";

print_r($query_params);

echo "</pre>";

// $_cookie() superglobal in php



$cookie_name = "name";
$cookie_value = "John Doe";

// Set the cookie to expire in 30 days if it is not already set
if(!isset($_COOKIE['name'])){
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    
} else {
    // Check if the cookie is set
   
}

// session() variable in php

session_start();    

$_SESSION["name"] = "John Doe";

echo "Session value: ". $_SESSION["name"];

















