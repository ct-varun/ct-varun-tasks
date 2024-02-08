<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username2 = $_POST['username1'];
    $password2 = $_POST['password1'];
    $flag = 0;
    $sql1 = "SELECT usernamec, passwordc FROM details";
    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($username2 == $row["usernamec"] && $password2 == $row["passwordc"]) {
                $flag = 1;
            }
        }
    }
    if ($flag == 1) {
        echo "record already exists";
    } else {
        $sql2 = "INSERT INTO details (usernamec, passwordc) VALUES ('$username2', '$password2')";
        echo "inserted the details";
        mysqli_query($conn, $sql2);
        //     if (mysqli_query($conn, $sql2)) 
        // {
        //           echo "inserted the details";
        // }
        // else{
        //     echo "details not inserted";
        // }

        // }
    }
}
?>