<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "Welcome, $name!";
}
?>
<form method="GET">
    Enter your name: <input type="text" name="name" required>
    <input type="submit" value="Register">
</form>
