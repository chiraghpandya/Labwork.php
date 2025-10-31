<?php
if (isset($_POST['theme'])) {
    $theme = htmlspecialchars($_POST['theme']);
    setcookie("preferred_theme", $theme, time() + 3600);
    echo "Theme set to $theme.";
} elseif (isset($_COOKIE['preferred_theme'])) {
    echo "Your preferred theme is: " . htmlspecialchars($_COOKIE['preferred_theme']);
}
?>
<form method="POST">
    Choose theme: <input type="text" name="theme" required>
    <input type="submit" value="Save Preference">
</form>
