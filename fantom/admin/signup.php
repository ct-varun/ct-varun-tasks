<?php
include 'databaseforlogin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="assets/formstyle.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/onclick.js"></script>
</head>

<body>
    <div class="form-div">
        <form id="myform" method="post" action="#" enctype="multipart/form-data">
            <h2>Enter your details</h2>
            <label for="firstname">firstname</label>
            <input type="text" name="firstname" id="firstname">
            <label for="lastname">lastname </label>
            <input type="text" name="lastname" id="lastname">
            <label for="password">password </label>
            <input type="password" name="password" id="password" pattern="(?=.*[A-Z])[a-zA-Z0-9]{8,}">
            <label for="confirmpassword">confirm password </label>
            <input type="password" name="confirmpassword" id="confirm-password" pattern="(?=.*[A-Z])[a-zA-Z0-9]{8,}">
            <input type="submit" value="submit the details" id="signup-button">
            <input type="reset">
            <input type="submit" value="login" id="signup-login">
        </form>
    </div>
</body>

</html>