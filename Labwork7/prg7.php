<?php
$GLOBALS['counter'] = 0;

function incrementCounter() {
    $GLOBALS['counter']++;
}

incrementCounter();
incrementCounter();
echo "Counter value: " . $GLOBALS['counter'];
?>
