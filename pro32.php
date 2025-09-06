<?php

$students = array(
    "Rahul" => 85,
    "Sneha" => 90,
    "Amit"  => 78,
    "Priya" => 88
);

$students["Amit"] = 95;


foreach($students as $name => $marks){
    echo $name . " => " . $marks . "<br>";
}
?>