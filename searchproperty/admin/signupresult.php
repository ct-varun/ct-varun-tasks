<?php
include 'database.php';
$sql = "select * from user_data";
$result = mysqli_query($conn, $sql);
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = $_POST['usernamefinal'];
    $password = $_POST['passwordfinal'];
    $firstname = $_POST['firstnamefinal'];
    $lastname = $_POST['lastnamefinal'];
    $count = 0;
    if (mysqli_num_rows($result) < 1) {
        $sql1 = "INSERT INTO user_data (usernamec, firstnamec, lastnamec, passwordc) VALUES ('$username','$password','$firstname','$lastname')";
        if (mysqli_query($conn, $sql1)) {
            echo "data inserted";
        } else {
            echo "data not inserted";
        }
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['usernamec'] == $username && $row['passwordc'] == $password) {
                $count++;
                break;
            }
        }
        if ($count > 0) {
            echo "details already present fill again";
            exit();
        } else {
            $sql1 = "INSERT INTO user_data (usernamec, firstnamec, lastnamec, passwordc) VALUES ('$username','$password','$firstname','$lastname')";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted";
            } else {
                echo "data not inserted";
            }

        }

    }
}
?>