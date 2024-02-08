<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username1'];
    $password = $_POST['password1'];
    $flag = 0;
    $sql1 = "SELECT usernamec, passwordc FROM details";
    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($username == $row["usernamec"] && $password == $row["passwordc"]) {
                $flag = 1;
            }
        }
    } else {
        echo "no record present";
    }
    if ($flag == 1) {
        echo "1";
    } else {
        echo "0";
    }


}
?>