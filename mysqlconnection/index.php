<?php
        include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_task1</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/onclick.js"></script>  
</head>
<body>
<form id="myForm" method="post" action="#" enctype="multipart/form-data" >
    <label for=" first_name">First name:</label><br>
    <input type="text" id="first_name" name="first_name"><br>
 <!--keep name and id same -->

    <label for="middle_name">Middle name:</label><br>
    <input type="text" id="middle_name" name="middle_name"><br>

    <label for="last_name">Last name:</label><br>
    <input type="text" id="last_name" name="last_name"><br>

   <input type="file" name="upload_file" id="upload_file">
    <input type="submit" class="form" id="submit" value="submit">
</form>

<?php
       
       $sql = "SELECT firstnamec, middlenamec, lastnamec, imagec FROM forminfo";
       $result = mysqli_query($conn, $sql);
       
       if (mysqli_num_rows($result) > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
               echo "First name: " . $row["firstnamec"] . ",   Middle name: " . $row["middlenamec"] . ",   Last name: " . $row['lastnamec'] . "<br>";
               echo "<img src='assets/uploads/" . $row['imagec'] . "' alt='Uploaded Image' height='50px' width='50px'><br>";
           }
       } else {
           echo "No result";
       }
       
       
?>

</body>
</html>