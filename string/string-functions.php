<?php
    
// str_split () and chunk_split() function of string in php

$str = "Hello World";

$split_str = str_split($str, 2);

foreach($split_str as $value){
    echo $value . "<br>";
}

echo "<hr>";

$chunk_str = chunk_split($str, 2);

echo $chunk_str;

// uppercase() or lowercase() function of string in php

$str = "Hello World";

$uppercase_str = strtoupper($str);

echo "<br>Uppercase: ". $uppercase_str;

$lowercase_str = strtolower($str);

echo "<br>Lowercase: ". $lowercase_str;

// string length and count function of string in php

$str = "Hello World";

$length = strlen($str);

echo "<br>Length of string: ". $length;

$count = substr_count($str, "l");

echo "<br>Count of 'l': ". $count;

// strpos() and strrpos() function of string in php

$str = "Hello World";

$position = strpos($str, "o");

echo "<br>Position of first 'o': ". $position;

$last_position = strrpos($str, "o");

echo "<br>Position of last 'o': ". $last_position;

// search string functions

$str = "Hello World.The world is nice!";

echo strstr($str, "world");

// string replace() function in php

$str = "Hellow world. The world is nice.";

echo str_replace("world"," ",$str);

// string compare() function in  php

$str1 = "Hello";

$str2 = "Hello World";

$result = strcmp($str1, $str2);

echo "<br>Result: ". $result;

// strrev() and shuffle() function 

$str = "Hello World";

$reversed_str = strrev($str);

echo "<br>Reversed: ". $reversed_str;

$shuffle_str = str_shuffle($str);

echo "<br>Shuffled: ". $shuffle_str;

// trim() function in php

$str = " Hello world!";

// addalashes() and stripslashes()

$str = addslashes($str);

echo "<br>Addslashes: ". $str;

$str = stripslashes($str);

echo "<br>Stripslashes: ". $str;

// md5() and sha1() function in php

$str = "Hello World";

$md5_str = md5($str);

echo "<br>MD5: ". $md5_str;

$sha1_str = sha1($str);

echo "<br>SHA1: ". $sha1_str;

// convert_uuencode and convert_uudecode

$str = "Hello World";

$uuencode_str = convert_uuencode($str);

echo "<br>UUencode: ". $uuencode_str;

$uudecode_str = convert_uudecode($uuencode_str);

echo "<br>UUdecode: ". $uudecode_str;

























