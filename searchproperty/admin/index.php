<?php
include 'database.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == 1) {
        header("location:admin.php");
        exit();
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style1.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/onclick.js"></script>
</head>

<body>
    <form>
        <label for="username">username</label>
        <input type="text" name="username" id="username" value="">
        <label for="password">password</label>
        <input type="text" name="password" id="password" value="">
        <input type="submit" value="login" id="login-submit">
        <input type="submit" value="signup" id="login-signup">
    </form>
</body>

</html>