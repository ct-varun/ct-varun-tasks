<?php
include 'database.php';
// if (isset($_COOKIE["bool"])) {
//     if ($_COOKIE["bool"] == 1) {
//         header("location: admin.php");
//         exit();
//     }
// }
session_start();
if (isset($_SESSION["bool"])) {
    if ($_SESSION["bool"] == 1) {
        header("location:admin.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="assets/formstyle.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/onclick.js"></script>
</head>

<body>
    <div class="form-div">
        <form id="myform" method="post" action="#" enctype="multipart/form-data">
            <h2>Enter your login details</h2>
            <label for="username">username </label>
            <input type="text" name="username" id="username">
            <label for="password">password </label>
            <input type="password" name="password" id="password" pattern="(?=.*[A-Z])[a-zA-Z0-9]{8,}">
            <input type="submit" value="login" id="login-submit">
            <input type="submit" value="click here to signup" id="login-signup-button">
        </form>
    </div>
</body>

</html>