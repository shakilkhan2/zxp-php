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
