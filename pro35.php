<?php
$countries = array(
    "India"    => "New Delhi",
    "USA"      => "Washington D.C.",
    "France"   => "Paris",
    "Germany"  => "Berlin",
    "Japan"    => "Tokyo"
);

$capital = "Paris";


$country = array_search($capital, $countries);

if($country !== false){
    echo "The capital '$capital' belongs to country: " . $country;
} else {
    echo "The capital '$capital' was not found in the array.";
}
?>