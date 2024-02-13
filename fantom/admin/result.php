<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql2 = "select * from fantom_input";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result);
    $id = $row['idc'];
    if (mysqli_num_rows($result) < 1) {
        if (isset($_FILES['uploadimage'])) {
            $file_name = $_FILES['uploadimage']['name'];
            $file_tmp = $_FILES['uploadimage']['tmp_name'];
            move_uploaded_file($file_tmp, "assets/uploads/" . $file_name);
            $menuitem1 = $_POST['mi1'];
            $menuitem2 = $_POST['mi2'];
            $menuitem3 = $_POST['mi3'];
            $menuitem4 = $_POST['mi4'];
            $menuitem5 = $_POST['mi5'];
            $heading = $_POST['heading'];
            $paragraph = $_POST['paragraph'];
            $button = $_POST['button'];
            if (isset($_FILES['backgroundimage'])) {
                $file_nameb = $_FILES['backgroundimage']['name'];
                $file_tmpb = $_FILES['backgroundimage']['tmp_name'];
                move_uploaded_file($file_tmpb, "assets/uploads/" . $file_nameb);
            }
            $sql1 = "INSERT INTO fantom_input (imagec,textforlogoc, menuitem1c, menuitem2c, menuitem3c, menuitem4c, menuitem5c, headingc, paragraphc, buttonc, backgroundimagec) VALUES('$file_name','null',$menuitem1','$menuitem2','$menuitem3','$menuitem4','$menuitem5','$heading','$paragraph','$button','$file_nameb')";
            echo "$sql1";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted with image";
            } else {
                echo "data not inserted with image";
            }
        } else {
            $textforlogo = $_POST['textinlogo'];
            $menuitem1 = $_POST['mi1'];
            $menuitem2 = $_POST['mi2'];
            $menuitem3 = $_POST['mi3'];
            $menuitem4 = $_POST['mi4'];
            $menuitem5 = $_POST['mi5'];
            $heading = $_POST['heading'];
            $paragraph = $_POST['paragraph'];
            $button = $_POST['button'];
            if (isset($_FILES['backgroundimage'])) {
                $file_nameb = $_FILES['backgroundimage']['name'];
                $file_tmpb = $_FILES['backgroundimage']['tmp_name'];
                move_uploaded_file($file_tmpb, "assets/uploads/" . $file_nameb);
            }
            $sql1 = "INSERT INTO fantom_input (imagec, textforlogoc, menuitem1c, menuitem2c, menuitem3c, menuitem4c, menuitem5c, headingc, paragraphc, buttonc, backgroundimagec) VALUES('null','$textforlogo','$menuitem1','$menuitem2','$menuitem3','$menuitem4','$menuitem5','$heading','$paragraph','$button','$file_nameb')";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted with text";
            } else {
                echo "data not inserted";
            }

        }
    } else {
        if (isset($_FILES['uploadimage'])) {
            $file_name = $_FILES['uploadimage']['name'];
            $file_tmp = $_FILES['uploadimage']['tmp_name'];
            move_uploaded_file($file_tmp, "assets/uploads/" . $file_name);
            $menuitem1 = $_POST['mi1'];
            $menuitem2 = $_POST['mi2'];
            $menuitem3 = $_POST['mi3'];
            $menuitem4 = $_POST['mi4'];
            $menuitem5 = $_POST['mi5'];
            $heading = $_POST['heading'];
            $paragraph = $_POST['paragraph'];
            $button = $_POST['button'];
            if (isset($_FILES['backgroundimage'])) {
                $file_nameb = $_FILES['backgroundimage']['name'];
                $file_tmpb = $_FILES['backgroundimage']['tmp_name'];
                move_uploaded_file($file_tmpb, "assets/uploads/" . $file_nameb);
            }
            $sql1 = "UPDATE fantom_input SET imagec='$file_name', textforlogoc='null', menuitem1c='$menuitem1', menuitem2c='$menuitem2',menuitem3c='$menuitem3',menuitem4c='$menuitem4',menuitem5c='$menuitem5',headingc='$heading',paragraphc='$paragraph',buttonc='$button',backgroundimagec='$file_nameb' where idc=$id";
            echo "$sql1";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted with image";
            } else {
                echo "data not inserted with image";
            }
        } else {
            $textforlogo = $_POST['textinlogo'];
            $menuitem1 = $_POST['mi1'];
            $menuitem2 = $_POST['mi2'];
            $menuitem3 = $_POST['mi3'];
            $menuitem4 = $_POST['mi4'];
            $menuitem5 = $_POST['mi5'];
            $heading = $_POST['heading'];
            $paragraph = $_POST['paragraph'];
            $button = $_POST['button'];
            if (isset($_FILES['backgroundimage'])) {
                $file_nameb = $_FILES['backgroundimage']['name'];
                $file_tmpb = $_FILES['backgroundimage']['tmp_name'];
                move_uploaded_file($file_tmpb, "assets/uploads/" . $file_nameb);
            }
            $sql1 = "UPDATE fantom_input SET textforlogoc='$textforlogo', imagec='null', menuitem1c='$menuitem1', menuitem2c='$menuitem2',menuitem3c='$menuitem3',menuitem4c='$menuitem4',menuitem5c='$menuitem5',headingc='$heading',paragraphc='$paragraph',buttonc='$button',backgroundimagec='$file_nameb' where idc=$id";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted with text";
            } else {
                echo "data not inserted";
            }

        }

    }
}