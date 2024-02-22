<?php
include 'database.php';
session_start();
if (!isset($_SESSION["login"])) {
    $_SESSION["login"] = 0;
}
$sql = "select * from user_data";
$result = mysqli_query($conn, $sql);
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $usernamel = $_POST['usernamefinal'];
    $passwordl = $_POST['passwordfinal'];
    $count = 0;
    if (mysqli_num_rows($result) < 1) {
        echo "no users in the database";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['usernamec'] == $usernamel && $row['passwordc'] == $passwordl) {
                $count++;
                break;
            }
        }
        if ($count > 0) {
            $_SESSION["login"] = 1;
            echo "1";
            exit();
        } else {
            echo "0";
            exit();
        }
    }
}
?>