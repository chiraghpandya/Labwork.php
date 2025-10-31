<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['upload'])) {
    $filename = basename($_FILES['upload']['name']);
    echo "Uploaded file: " . htmlspecialchars($filename);
}
?>
<form method="POST" enctype="multipart/form-data">
    Select file: <input type="file" name="upload" required>
    <input type="submit" value="Upload">
</form>
