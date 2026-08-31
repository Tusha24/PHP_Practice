//Check if it called from http or https

<?php

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    echo "HTTPS";
} else {
    echo "HTTP";
}

?>
