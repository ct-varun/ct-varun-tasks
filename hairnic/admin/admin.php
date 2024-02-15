<?php
include 'database.php';
$sql2 = "select * from hairnic_data";
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
            <label>choice for logo</label>
            <?php if ($row['logotextc'] == "null") {
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
                    <?php echo $row['logoimagec']; ?>
                </label>
            </div>
            <div class="logotext">
                <input type="text" name="textinlogo" id="textinlogo" value="<?php echo $row['logotextc']; ?>">
            </div>
            <label for="navhome">navhome</label>
            <input type="text" name="navhome" id="navhome" value="<?php echo $row['navhomec']; ?>">
            <label for="navabout">navabout</label>
            <input type="text" name="navabout" id="navabout" value="<?php echo $row['navaboutc']; ?>">
            <label for="navproducts">navproducts</label>
            <input type="text" name="navproducts" id="navproducts" value="<?php echo $row['navproductsc']; ?>">
            <label for="navpages">navpages</label>
            <input type="text" name="navpages" id="navpages" value="<?php echo $row['navpagesc']; ?>">
            <label for="navcontact">navcontact</label>
            <input type="text" name="navcontact" id="navcontact" value="<?php echo $row['navcontactc']; ?>">
            <label for="navshopnow">navshopnow</label>
            <input type="text" name="navshopnow" id="navshopnow" value="<?php echo $row['navshopnowc']; ?>">
            <label for="bannerh3">bannerh3</label>
            <input type="text" name="bannerh3" id="bannerh3" value="<?php echo $row['bannerh3c']; ?>">
            <label for="bannerh1beforespan">bannerh1beforespan</label>
            <input type="text" name="bannerh1beforespan" id="bannerh1beforespan"
                value="<?php echo $row['bannerh1beforespanc']; ?>">
            <label for="bannerh1span">bannerh1span</label>
            <input type="text" name="bannerh1span" id="bannerh1span" value="<?php echo $row['bannerh1spanc']; ?>">
            <label for="bannerh1afterspan">bannerh1afterspan</label>
            <input type="text" name="bannerh1afterspan" id="bannerh1afterspan"
                value="<?php echo $row['bannerh1afterspanc']; ?>">
            <label for="bannerp">bannerp</label>
            <input type="text" name="bannerp" id="bannerp" value="<?php echo $row['bannerpc']; ?>">
            <label for="bannerbuttonleft">bannerbuttonleft</label>
            <input type="text" name="bannerbuttonleft" id="bannerbuttonleft"
                value="<?php echo $row['bannerbuttonleftc']; ?>">
            <label for="bannerbuttonright">bannerbuttonright</label>
            <input type="text" name="bannerbuttonright" id="bannerbuttonright"
                value="<?php echo $row['bannerbuttonrightc']; ?>">
            <label for="bannerimage">bannerimage</label>
            <input type="file" name="bannerimage" accept="image/*" id="bannerimage">
            <label for="bannerimage" id="labelbannerimage">
                <?php echo $row['bannerimagec']; ?>
            </label>
            <label for="featuresleft">featuresleft</label>
            <input type="text" name="featuresleft" id="featuresleft" value="<?php echo $row['featuresleftc']; ?>">
            <label for="featurescenter">featurescenter</label>
            <input type="text" name="featurescenter" id="featurescenter" value="<?php echo $row['featurescenterc']; ?>">
            <label for="featuresright">featuresright</label>
            <input type="text" name="featuresright" id="featuresright" value="<?php echo $row['featuresrightc']; ?>">
            <label for="aboutimage">aboutimage</label>
            <input type="file" name="aboutimage" accept="image/*" id="aboutimage">
            <label for="aboutimage" id="labelaboutimage">
                <?php echo $row['aboutimagec']; ?>
            </label>
            <label for="abouth1">abouth1</label>
            <input type="text" name="abouth1" id="abouth1" value="<?php echo $row['abouth1c']; ?>">
            <label for="abouth1span">abouth1span</label>
            <input type="text" name="abouth1span" id="abouth1span" value="<?php echo $row['abouth1spanc']; ?>">
            <label for="aboutptop">aboutptop</label>
            <input type="text" name="aboutptop" id="aboutptop" value="<?php echo $row['aboutptopc']; ?>">
            <label for="aboutpbottom">aboutpbottom</label>
            <input type="text" name="aboutpbottom" id="aboutpbottom" value="<?php echo $row['aboutpbottomc']; ?>">
            <label for="aboutbutton">aboutbutton</label>
            <input type="text" name="aboutbutton" id="aboutbutton" value="<?php echo $row['aboutbuttonc']; ?>">
            <input type="submit" value="submit" id="admin-submit">
            <input type="submit" value="logout" id="admin-logout">
        </form>
    </div>
</body>

</html>