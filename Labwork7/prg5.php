<?php
$ip = $_SERVER['REMOTE_ADDR'];
$method = $_SERVER['REQUEST_METHOD'];
echo "Your IP: $ip<br>";
echo "Request Method: $method";
?>
