<?php
include 'database.php';
$sql = "SELECT * FROM content";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="assets/formstyle.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/onclick.js"></script>
</head>

<body>
    <div class="form-div">
        <form id="myform" method="post" action="#" enctype="multipart/form-data">
            <h2>Enter content in the table</h2>
            <label for="heading">heading</label>
            <input type="text" name="heading" id="heading" value="<?php echo $row['headingc']; ?>">
            <label for="content">content </label>
            <input type="text" name="content" id="content" class="content-admin"
                value="<?php echo $row['contentc']; ?>">
            <input type="file" name="upload_file" id="upload_file" accept="image/*" class="uploadfilebutton">
            <label for="" id="upload_file" class="image-label">
                <?php echo $row['imagec']; ?>
            </label>
            <input type="submit" value="submit" id="admin-submit">
            <input type="submit" value="logout" id="admin-logout">
        </form>
    </div>
</body>

</html>