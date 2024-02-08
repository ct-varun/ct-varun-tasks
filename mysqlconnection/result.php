<?php
    include 'database.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST['first_name_value'];
        $middle_name = $_POST['middle_name_value'];
        $last_name = $_POST['last_name_value'];

        if (isset($_FILES['upload_file1'])) {
            $file_name = $_FILES['upload_file1']['name'];
            $file_tmp = $_FILES['upload_file1']['tmp_name'];
            move_uploaded_file($file_tmp, "assets/uploads/" . $file_name);
        }
$flag=0;

        $sql1 = "SELECT firstnamec, middlenamec, lastnamec, imagec FROM forminfo";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if($first_name==$row["firstnamec"] && $middle_name==$row["middlenamec"] && $last_name==$row["lastnamec"] && $file_name==$row["imagec"])
                {
                    $flag=1;
                    //echo "same record found";
                }
            } 
        if($flag==1)
        {
            echo "same record exits";
        }
        else 
        {
            $sql2 = "INSERT INTO forminfo (firstnamec, middlenamec, lastnamec, imagec) VALUES ('$first_name', '$middle_name', '$last_name', '$file_name')";
            if(mysqli_query($conn,$sql2))
            {
                echo "record inserted";
            }
        }
    }
    else
    {
              echo "no record present";
    }
        
        
        // if (mysqli_query($conn, $sql)) {
        //      echo "New record created successfully";
        // } else {
        //      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // }

        
    }
?>

