<?php

$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo"
);

$countries["Germany"] = "Berlin";


foreach($countries as $country => $capital){
    echo $country . " => " . $capital . "<br>";
}
?>