<?php
// Student Information
$name = "XYZ";

// Subject marks
$subjects = [
    "Sub1" => 40,
    "Sub2" => 30,
    "Sub3" => 45,
    "Sub4" => 48,
    "Sub5" => 34
];

$max_marks = 50;
$total_max = $max_marks * count($subjects);
$total_obtained = array_sum($subjects);

// Calculate percentage
$percentage = ($total_obtained / $total_max) * 100;

// Result condition
if ($percentage >= 75) {
    $result = "With Distinction";
} elseif ($percentage >= 60) {
    $result = "First Division";
} elseif ($percentage >= 33) {
    $result = "Pass";
} else {
    $result = "Fail";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="3">Name : <?php echo $name; ?></th>
        </tr>
        <tr>
            <th>Subject Name</th>
            <th>Max Marks</th>
            <th>Obtained Marks</th>
        </tr>
        <?php foreach ($subjects as $sub => $marks) { ?>
        <tr>
            <td><?php echo $sub; ?></td>
            <td><?php echo $max_marks; ?></td>
            <td><?php echo $marks; ?></td>
        </tr>
        <?php } ?>
        <tr>
            <th>Total</th>
            <th><?php echo $total_max; ?></th>
            <th><?php echo $total_obtained; ?></th>
        </tr>
        <tr>
            <th colspan="2">Percentage</th>
            <td><?php echo round($percentage, 2); ?></td>
        </tr>
        <tr>
            <th colspan="2">Result</th>
            <td><?php echo $result; ?></td>
        </tr>
    </table>
</body>
</html>