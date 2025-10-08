<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
  
    setcookie("username", $name, time() + (30 * 24 * 60 * 60), "/");
    echo "<h2>Welcome, $name!</h2>";
    echo "<p>Your name has been saved. Come back later to see the greeting!</p>";
} 

elseif (isset($_COOKIE['username'])) {
    $name = $_COOKIE['username'];
    echo "<h2>Welcome back, $name!</h2>";
    echo "<p>Nice to see you again!</p>";
} 

else {
?>
    <form method="POST" action="">
        <h2>Enter your name:</h2>
        <input type="text" name="name" required>
        <input type="submit" value="Submit">
    </form>
<?php
}
?>
