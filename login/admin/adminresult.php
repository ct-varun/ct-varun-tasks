<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $heading = $_POST['heading1'];
    $content = $_POST['content1'];
    if (isset($_FILES['uploadfile'])) {
        $file_name = $_FILES['uploadfile']['name'];
        $file_tmp = $_FILES['uploadfile']['tmp_name'];
        move_uploaded_file($file_tmp, "assets/uploads/" . $file_name);
        $sql1 = "SELECT * FROM content";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $sql2 = "UPDATE content set headingc='$heading', contentc='$content', imagec='$file_name' where id='$id'";
            mysqli_query($conn, $sql2);
            echo "data updated";
        } else {
            $sql2 = "INSERT INTO content (headingc, contentc, imagec) VALUES ('$heading','$content','$file_name')";
            mysqli_query($conn, $sql2);
            echo "data inserted";
        }
    } else {
        $sql1 = "SELECT * FROM content";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $sql2 = "UPDATE content set headingc='$heading', contentc='$content' where id='$id'";
            mysqli_query($conn, $sql2);
            echo "data updated without image";
        }

    }

}