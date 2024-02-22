<?php
include 'database.php';
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
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" id="firstname" value="">
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname" value="">
        <label for="password">password</label>
        <input type="text" name="password" id="password" value="">
        <label for="confirmpassword">confirmpassword</label>
        <input type="text" name="confirmpassword" id="confirmpassword" value="">
        <input type="submit" value="signup" id="signup-submit">
        <input type="reset" value="reset">
        <input type="submit" value="login" id="signup-login">
    </form>
</body>

</html>