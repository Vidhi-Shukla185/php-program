<?php
// Create an array
$numbers = array(40, 10, 70, 20, 90, 50);

// Original Array
echo "<b>Original Array:</b><br>";
print_r($numbers);
echo "<br><br>";

// 1. sort() - Sort ascending (values, reindex keys)
$sorted = $numbers;
sort($sorted);
echo "<b>sort() - Ascending (reindexed):</b><br>";
print_r($sorted);
echo "<br><br>";

// 2. rsort() - Sort descending (values, reindex keys)
$sorted = $numbers;
rsort($sorted);
echo "<b>rsort() - Descending (reindexed):</b><br>";
print_r($sorted);
echo "<br><br>";

// 3. asort() - Sort ascending (values, keep keys)
$sorted = $numbers;
asort($sorted);
echo "<b>asort() - Ascending (preserve keys):</b><br>";
print_r($sorted);
echo "<br><br>";

// 4. arsort() - Sort descending (values, keep keys)
$sorted = $numbers;
arsort($sorted);
echo "<b>arsort() - Descending (preserve keys):</b><br>";
print_r($sorted);
echo "<br><br>";

// 5. ksort() - Sort by keys ascending
$sorted = $numbers;
ksort($sorted);
echo "<b>ksort() - Sort by keys ascending:</b><br>";
print_r($sorted);
echo "<br><br>";

// 6. krsort() - Sort by keys descending
$sorted = $numbers;
krsort($sorted);
echo "<b>krsort() - Sort by keys descending:</b><br>";
print_r($sorted);
echo "<br>";
?>