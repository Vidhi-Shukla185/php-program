<?php
$fruits = array(
    "Apple"  => 120,
    "Banana" => 40,
    "Mango"  => 100,
    "Orange" => 80,
    "Grapes" => 60
);

echo "<h3>Sorted by Price (asort)</h3>";
asort($fruits);
foreach($fruits as $fruit => $price){
    echo $fruit . " => " . $price . "<br>";
}

echo "<h3>Sorted by Fruit Name (ksort)</h3>";
ksort($fruits);
foreach($fruits as $fruit => $price){
    echo $fruit . " => " . $price . "<br>";
}
?>