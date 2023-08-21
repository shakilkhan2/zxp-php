<?php

/*
PHP sessions are a fundamental part of web development. They allow you to store and retrieve user data across different pages of a website. Sessions are particularly useful for maintaining user authentication, shopping carts, and other user-specific information. In PHP, you can start a session using the session_start() function, and then use the $_SESSION super global to store and retrieve data. Remember to close the session using session_destroy() when you're done.
**/




// Start the session
session_start();

// Check if the user is logging in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulate user authentication (you'd typically check against a database)
    $username = $_POST["username"];

    // Store the username in the session
    $_SESSION["username"] = $username;

    // Redirect the user to a protected page
    header("Location: index.php");
    exit();
}
?>

<?php
// Set a cookie named "user" with the value "Shakil" that expires in 1 day
setcookie("user", "Shakil", time() + (86400 * 1), "/");
?>

<?php
// Check if the "user" cookie is set
if (isset($_COOKIE["user"])) {
    $username = $_COOKIE["user"];
    echo "Welcome back, $username!";
} else {
    echo "Welcome, guest!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <input type="submit" value="Log In">
    </form>
</body>
</html>
