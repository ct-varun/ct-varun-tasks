<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // setcookie("bool", 0, time() - 86400 * 30, "/");
    session_start();
    session_unset();
    echo "1";
}
?>