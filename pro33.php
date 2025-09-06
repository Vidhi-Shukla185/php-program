<?php

$students = array(
    "Harsh" => 85,
    "Shyam" => 90,
    "Avi"  => 78,
    "Ram" => 88
);


$key = "Avi";


if(array_key_exists($key, $students)){
    echo "Key '$key' exists in the array with value: " . $students[$key];
} else {
    echo "Key '$key' does not exist in the array.";
}
?>