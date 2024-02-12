<?php
include 'admin/database.php';
session_start();
if (!isset($_SESSION["username"])) {
    $_SESSION["username"] = "guest";
}
?>
<html>

<head>
    <title>display</title>
    <link rel="stylesheet" href="display.css">
</head>

<body>
    <div class="display-div">
        <?php
        $sql = "SELECT * FROM content";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<h2> hello " . $_SESSION["username"] . "</h2>";
            echo "<h1>" . $row["headingc"] . "</h1>";
            echo "<p>" . $row["contentc"] . "</P>";
            echo "<img src='admin/assets/uploads/" . $row['imagec'] . "' alt='no upload' width='30%vw' height='70%vh'><br>";
        } else {
            echo "No result";
        }
        ?>
    </div>
</body>

</html>