<?php
include 'database.php';
$sql2 = "select * from fantom_input";
$result = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result);
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
            <h2>Enter content for the webpage</h2>
            <!-- <label for="imageradio">Image</label>
            <input type="radio" name="choice" value="image">
            <label for="textradio">Text</label>
            <input type="radio" name="choice" value="text"> -->
            <label>choice for logo</label>
            <?php if ($row['textforlogoc'] == "null") {
                echo "<select id='selectchoice'>
                        <option value='choose'>options</option>
                        <option value='image' selected>image</option>
                        <option value='text'>text</option>
                    </select>";
                // echo "<script>
                //      $('.logotext').show();
                //      $('.logoimage').hide();
                //      </script>";
            } else {
                echo "<select id='selectchoice'>
                        <option value='choose'>options</option>
                        <option value='image'>image</option>
                        <option value='text' selected>text</option>
                    </select>";
                // echo "<script>
                //     $('.logoimage').show();
                //     $('.logotext').hide();
                //     </script>";
            
            } ?>
            <div class="logoimage">
                <input type="file" name="upload_file" accept="image/*" id="upload_file" class="uploadfilebutton">
                <br>
                <label for="uploadfilebutton" id="label-for-image">
                    <?php echo $row['imagec']; ?>
                </label>
            </div>
            <div class="logotext">
                <input type="text" name="textinlogo" id="textinlogo" value="<?php echo $row['textforlogoc']; ?>">
            </div>
            <label for="menuitem1">menuitem1</label>
            <input type="text" name="menuitem1" id="menuitem1" value="<?php echo $row['menuitem1c']; ?>">
            <label for="menuitem2">menuitem2</label>
            <input type="text" name="menuitem2" id="menuitem2" value="<?php echo $row['menuitem2c']; ?>">
            <label for="menuitem3">menuitem3</label>
            <input type="text" name="menuitem3" id="menuitem3" value="<?php echo $row['menuitem3c']; ?>">
            <label for="menuitem4">menuitem4</label>
            <input type="text" name="menuitem4" id="menuitem4" value="<?php echo $row['menuitem4c']; ?>">
            <label for="menuitem5">menuitem5</label>
            <input type="text" name="menuitem5" id="menuitem5" value="<?php echo $row['menuitem5c']; ?>">
            <label for="heading">heading</label>
            <input type="text" name="heading" id="heading" value="<?php echo $row['headingc']; ?>">
            <label for="paragraph">paragraph </label>
            <input type="text" name="paragraph" id="paragraph" class="content-admin"
                value="<?php echo $row['paragraphc']; ?>">
            <label for="button">button</label>
            <input type="text" name="button" id="button" value="<?php echo $row['buttonc']; ?>">
            <label for="upload_background">Enter background image </label>
            <input type="file" name="upload_background" accept="image/*" id="upload_background"
                class="uploadfilebutton">
            <label for="upload_background">
                last choosen image:
                <?php echo $row['backgroundimagec']; ?>
            </label>
            <input type="submit" value="submit" id="admin-submit">
            <input type="submit" value="logout" id="admin-logout">
        </form>
    </div>
</body>

</html>