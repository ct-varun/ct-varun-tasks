<?php
include 'admin/database.php';
$sql2 = "select * from fantom_input";
$result = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin/assets/style.css">
</head>

<body>
    <div class="header-wrapper">
        <header>
            <nav class="container">
                <a>
                    <?php if ($row['imagec'] != "null") {
                        echo "<img src='admin/assets/uploads/" . $row['imagec'] . "' class='nav-logo-section' alt='image' >";
                    } else {
                        echo $row['textforlogoc'];
                    } ?>
                </a>

                <div class="nav-list-section">
                    <ul>
                        <li><a href="#">
                                <?php echo $row['menuitem1c']; ?>
                            </a></li>
                        <li><a href="#">
                                <?php echo $row['menuitem2c']; ?>
                            </a></li>
                        <li><a href="#">
                                <?php echo $row['menuitem3c']; ?>
                            </a></li>
                        <li><a href="#">
                                <?php echo $row['menuitem4c']; ?>
                            </a></li>
                        <li><a href="#">
                                <?php echo $row['menuitem5c']; ?>
                            </a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <main>
        <div class="banner-section">
            <div class="container banner-section-container">
                <img src=<?php echo "'admin/assets/uploads/" . $row['backgroundimagec'] . "' alt='graphic image'>"; ?>
                    <div class="banner-section-text">
                <h1><span class="security-color">
                        <?php echo $row['headingc']; ?>
                    </span> first</h1>
                <p>
                    <?php echo $row['paragraphc']; ?>
                </p>
                <a class="primary-button" href="#">
                    <?php echo $row['buttonc']; ?>
                </a>
            </div>

        </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>