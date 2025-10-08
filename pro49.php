<?php

if (isset($_COOKIE['visits'])) {
    
    $visits = $_COOKIE['visits'] + 1;
    setcookie("visits", $visits, time() + (30 * 24 * 60 * 60), "/");
    echo "<h2>You have visited this page $visits times.</h2>";
} else {
    
    $visits = 1;
    setcookie("visits", $visits, time() + (30 * 24 * 60 * 60), "/");
    echo "<h2>This is your first visit!</h2>";
}
?>
