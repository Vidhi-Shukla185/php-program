<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation check
    if (empty($username) || empty($email) || empty($password)) {
        echo "<h3 style='color:red;'>Error: All fields are required!</h3>";
    } else {
        echo "<h2>Registration Successful!</h2>";
        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Password:</strong> (Hidden for security reasons)</p>";
    }
} else {
    echo "Invalid Request!";
}
?>
