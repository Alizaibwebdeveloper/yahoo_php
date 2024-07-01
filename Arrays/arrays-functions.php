
<?php
    
// count and sizeof() function of array in php

$colors = ["red", "yellow", "green", "blue", "orange"];

echo "Count of colors array: ".count($colors)."<br>";

echo "Size of colors array: ".sizeof($colors)."<br>";

// in_array() and array_search() function of Arrays in php

echo "Check 'yellow' in colors array: ".in_array("yellow", $colors)."<br>";

echo "Search 'yellow' in colors array: ".array_search("yellow", $colors)."<br>";


// array_replace & array_recursive function of array in php


$fruits = [" Banana", " orange", " strabery", " apple", " grapes"];

$vegetables = [" carrot", " potato", " onion", " cucumber"];

$new_array = array_replace($fruits, $vegetables);

echo "<pre>";

print_r($new_array);

echo "</pre>";

$recursive_array = [
    "fruits" => $fruits,
    "vegetables" => $vegetables
];

$new_recursive_array = array_replace_recursive($recursive_array, $recursive_array);

echo "<pre>";

print_r($new_recursive_array);

echo "</pre>";

// Array push and array pop functions

$my_array = ["apple", "banana", "orange"];

array_push($my_array, "grapes", "mango");

echo "Array after push: <pre>";

echo "<pre>";
print_r($my_array);

echo "</pre>";

$popped_item = array_pop($my_array);
echo "Popped item: ".$popped_item."<br>";
echo "Array after pop: <pre>";
echo "<pre>";
print_r($my_array);

echo "</pre>";

// array shift() and unshift() function of array in php

$my_array = ["apple", "banana", "orange"];

array_unshift($my_array, "kiwi", "watermelon");

echo "Array after unshift: <br>";

echo "<pre>";

print_r($my_array);

echo "</pre>";

$shifted_item = array_shift($my_array);

echo "Shifted item: ".$shifted_item."<br>";

echo "Array after shift: <pre>";

echo "<pre>";

print_r($my_array);

echo "</pre>";

// array_merge() and array_combine() function in php

$array1 = ["a", "b", "c"];

$array2 = ["d", "e", "f"];

$merged_array = array_merge($array1, $array2);

echo "Merged array: <pre>";

print_r($merged_array);

echo "</pre>";

$combined_array = array_combine($array1, $array2);

echo "Combined array: <pre>";

print_r($combined_array);

echo "</pre>";

// array_slice() function in php

$array = ["a", "b", "c", "d", "e", "f"];

$sliced_array = array_slice($array, 2, 3);

echo "Sliced array: <pre>";

print_r($sliced_array);

echo "</pre>";

// array_splice() function in php

$array = ["a", "b", "c", "d", "e", "f"];

array_splice($array, 2, 3, ["x", "y", "z"]);

echo "Array after splice: <pre>";

print_r($array);

echo "</pre>";


// array_key () function in php

$array = ["a" => "apple", "b" => "banana", "c" => "cherry"];

// Get the first key of the array
$last_key = array_keys($array)[2];

echo "Last key: " . $last_key . "<br>";

$exist_key = array_key_exists('b', $array);

echo "Key 'b' exists: ". ($exist_key? "Yes" : "No"). "<br>";

echo "Key of banana: " . array_search("banana", $array) . "<br>";
echo "Key of cherry: " . array_search("cherry", $array) . "<br>";


// array intersect() function in php

function compare($a, $b) {
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array1 = ["k1" => "a", "k2" => "b", "k3" => "c", "k4" => "d", "k5" => "e"];
$array2 = ["k1" => "a", "k2" => "d", "k3" => "e", "k4" => "f", "k5" => "g"];

// Find common elements with both keys and values compared
$common_elements = array_intersect_uassoc($array1, $array2, "compare");

echo "Common elements: <pre>";
print_r($common_elements);
echo "</pre>";


// array diff() and udiff() function in php

$array1 = ["a" => "apple", "b" => "banana", "c" => "cherry"];
$array2 = ["a" => "apple", "b" => "blueberry", "c" => "cherry"];

// Find the difference in keys and values compared

$diff_keys = array_diff_key($array1, $array2);
echo "Difference in keys: <pre>";
print_r($diff_keys);
echo "</pre>";

$diff_values = array_diff_uassoc($array1, $array2, "compare");

echo "Difference in values: <pre>";

print_r($diff_values);

echo "</pre>";


// array unique() and array_values function in php

$array = ["a", "b", "c", "b", "d", "c"];

$unique_array = array_unique($array);

echo "Unique array: <pre>";

print_r($unique_array);

echo "</pre>";

$unique_values = array_values($unique_array);

echo "Unique values array: <pre>";

print_r($unique_values);

echo "</pre>";

// array_column() and array__chunk() function in array


$array = [
    ["name" => "John", "age" => 30],
    ["name" => "Alice", "age" => 25],
    ["name" => "Bob", "age" => 35],
    ["name" => "Charlie", "age" => 28]

];

$column_names = array_column($array, "name");

echo "Column names: <pre>";

print_r($column_names);

echo "</pre>";

$chunked_array = array_chunk($array, 2);

echo "Chunked array: <pre>";

print_r($chunked_array);

echo "</pre>";

// array_flip() and array_change_key_case() function in php

$array = ["a" => "apple", "b" => "banana", "c" => "cherry"];

$flipped_array = array_flip($array);

echo "Flipped array: <pre>";

print_r($flipped_array);

echo "</pre>";


$case_changed_array = array_change_key_case($array, CASE_UPPER);

echo "Case changed array (UPPER): <pre>";

print_r($case_changed_array);

echo "</pre>";

$case_changed_array = array_change_key_case($array, CASE_LOWER);

echo "Case changed array (LOWER): <pre>";

print_r($case_changed_array);

echo "</pre>";

// array_product and array_sums function in php

$array = [1, 2, 3, 4, 5];

$product = array_product($array);

echo "Product of elements: ". $product. "<br>";

$sum = array_sum($array);

echo "Sum of elements: ". $sum. "<br>";

// array_rand() and array_shuffle() function in php

$array = ["a", "b", "c", "d", "e"];

$random_key = array_rand($array);

echo "Random key: ". $random_key. "<br>";

$random_element = $array[$random_key];

echo "Random element: ". $random_element. "<br>";

$shuffled_array = $array;

shuffle($shuffled_array);

echo "Shuffled array: <pre>";

print_r($shuffled_array);

echo "</pre>";

// array_fill() and array_fill_keys() function in php

$array = array_fill(0, 5, "default");

echo "Filled array: <pre>";

print_r($array);

echo "</pre>";

$filled_keys_array = array_fill_keys(array("a", "b", "c"), "default");

echo "Filled keys array: <pre>";

print_r($filled_keys_array);

echo "</pre>";

// array_walk and array_walk_recursive() function in php

$array = ["a" => "apple", "b" => "banana", "c" => ["d" => "cherry", "e" => "date"]];

function callback($value, $key) {
    echo "Key: $key, Value: $value<br>";
}

array_walk($array, "callback");

echo "<hr>";

function callback_recursive($value, $key) {

    echo "Key: $key, Value: $value<br>";

    if (is_array($value)) {

        array_walk_recursive($value, "callback_recursive");

    }

}

array_walk_recursive($array, "callback_recursive");

// array_map() function in php

$array = [1, 2, 3, 4, 5];

$multiplied_array = array_map(function($value) {

    return $value * 2;

}, $array);


echo "Multiplied array: <pre>";

print_r($multiplied_array);

echo "</pre>";

// array_reduce() function in php

$array = [1, 2, 3, 4, 5];

$sum = array_reduce($array, function($carry, $item) {

    return $carry + $item;

});

echo "Sum of elements: ". $sum. "<br>";

// Array sorting functions in php

$array = ["apple", "banana", "cherry", "date", "elderberry"];

sort($array);

echo "Sorted array (ascending): <pre>";

print_r($array);

echo "</pre>";

rsort($array);

echo "Sorted array (descending): <pre>";

print_r($array);

echo "</pre>";

$array = ["apple" => 5, "banana" => 3, "cherry" => 2, "date" => 4, "elderberry" => 1];

asort($array);

echo "Sorted array (ascending by values): <pre>";

print_r($array);

echo "</pre>";

arsort($array);

echo "Sorted array (descending by values): <pre>";

print_r($array);

echo "</pre>";

$array = ["apple", "banana", "cherry", "date", "elderberry"];

usort($array, function($a, $b) {
    return strcmp($a, $b);
});

echo "Sorted array (ascending by alphabetical order): <pre>";

print_r($array);

echo "</pre>";

// Traversing  functions of array in php

$food = ['banana', 'orange', ' apple', 'grapes'];

echo   "<b> current : </b>". current($food)."<br>";
echo "<b> key : </b>". key($food)."<br>";
echo "<b> pos : </b>".pos($food)."<br>";


echo "<b> pos : </b>".next($food)."<br>";

// array list() function of array in php

$array = array('apple', 'banana', 'cherry', 'date', 'elderberry');

echo "<b> list : </b>";

list($fruit1, $fruit2, $fruit3, $fruit4, $fruit5) = $array;

echo $fruit1."<br>";

echo $fruit2."<br>";

echo $fruit3."<br>";

echo $fruit4."<br>";

echo $fruit5."<br>";

// array extract() and compact() function of array

$fruit = array('apple', 'banana', 'cherry', 'date', 'elderberry');

// Extract variables from indexed array
extract([
    'apple' => $fruit[0],
    'banana' => $fruit[1],
    'cherry' => $fruit[2],
    'date' => $fruit[3],
    'elderberry' => $fruit[4],
]);

// Output the extracted variables
echo "apple = $apple <br>";
echo "banana = $banana <br>";
echo "cherry = $cherry <br>";
echo "date = $date <br>";
echo "elderberry = $elderberry <br>";

// Create an associative array using compact
$fruit_compact = compact('apple', 'banana', 'cherry', 'date', 'elderberry');

echo "<pre>";
print_r($fruit_compact);
echo "</pre>";


// range() function of array in php

$array = range(1, 10);

echo "<b> range : </b>";

foreach ($array as $value) {

    echo $value." "."<br>";

}

// Explode() and implode() function of array  in php

$string = 'apple,banana,cherry,date,elderberry';

$array = explode(',', $string);

echo "<b> explode : </b>";


foreach ($array as $value) {

    echo "<br>".$value." ";

}

$string = implode('-', $array);

echo "<b> implode : </b>".$string;


// explode() and implode() function of array

$str = "Hello world. It is a beautiful day.";

explode(" ", $str);

echo "<pre>";

print_r(explode(" ", $str));

echo "</pre>";








