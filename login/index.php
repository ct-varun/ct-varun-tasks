<?php
include 'admin/database.php';
$sql = "SELECT * FROM content";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "<div style='max-width:1280px; margin:auto;'>";
    echo "<h1>" . $row["headingc"] . "</h1> <br>";
    echo "<p>" . $row["contentc"] . "</P> <br>";
    echo "<img src='admin/assets/uploads/" . $row['imagec'] . "' alt='no upload' width='100%'> <br>";
    echo "</div>";
} else {
    echo "No result";
}