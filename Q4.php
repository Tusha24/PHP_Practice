//Simple PHP Browser Detection

<?php

$browser = $_SERVER['HTTP_USER_AGENT'];

if (strpos($browser, 'Chrome') !== false) {
    echo "You are using Google Chrome";
} elseif (strpos($browser, 'Firefox') !== false) {
    echo "You are using Mozilla Firefox";
} elseif (strpos($browser, 'Safari') !== false) {
    echo "You are using Safari";
} elseif (strpos($browser, 'Edge') !== false) {
    echo "You are using Microsoft Edge";
} else {
    echo "Browser not detected";
}

?>
