<?php
// define three numbers
$num1 = 10;
$num2 = 20;
$num3 = 30;

// calculate sum
$sum = $num1 + $num2 + $num3;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sum of Three Numbers</title>
</head>
<body>
    <h2>Adding Three Numbers using <?= "<?= ?>" ?> tag</h2>
    <p>
        The numbers are: <?= $num1 ?>, <?= $num2 ?>, <?= $num3 ?><br>
        Their sum is: <?= $sum ?>
    </p>
</body>
</html>