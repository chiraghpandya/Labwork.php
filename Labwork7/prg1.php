<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Dummy credentials for demo
    $validUser = "admin";
    $validPass = "1234";

    if ($username === $validUser && $password === $validPass) {
        $_SESSION['loggedin'] = true;
        echo "Login successful!";
    } else {
        echo "Invalid credentials.";
    }
}
?>
<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
</form>
