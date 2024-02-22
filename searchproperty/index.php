<?php
include 'admin/database.php';
$sql = "select * from sp_data";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>twentyfour</title>
    <link rel="stylesheet" href="admin/assets/style.css">
</head>

<body>
    <header>
        <nav class="container">
            <div class="row nav-row">
                <div class="nav-div-logo-list">
                    <?php if ($row["logoimagec"] != "null") {
                        echo "<img class='logo-image' src='admin/assets/uploads/" . $row["logoimagec"] . "' alt='logo image'>";
                    } else {
                        echo $row["logotextc"];
                    }
                    ?>
                    <ul>
                        <a href=#>
                            <li>
                                <?php echo $row["homec"]; ?>
                            </li>
                        </a>
                        <a href=#>
                            <li>
                                <?php echo $row["aboutusc"]; ?>
                            </li>
                        </a>
                        <a href=#>
                            <li>
                                <?php echo $row["whyusc"]; ?>
                            </li>
                        </a>
                        <a href=#>
                            <li>
                                <?php echo $row["freeebookc"]; ?>
                            </li>
                        </a>
                        <a href=#>
                            <li>
                                <?php echo $row["onlinecoursec"]; ?>
                            </li>
                        </a>
                    </ul>
                </div>

                <a class="primary-button" href="#">
                    <?php echo $row["bookacallc"]; ?>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <main>
            <div class="banner-section">
                <div class="container banner-section-container">
                    <img class="banner-image" src="admin/assets/images/banner image sir.png"
                        alt="background banner image">
                    <div class="banner-section-text">
                        <h1>
                            <?php echo $row["bannerheadertopc"]; ?>
                        </h1>
                        <h2>
                            <?php echo $row["bannerheaderbottomc"]; ?>
                        </h2>
                        <div class="buttons">
                            <a class="primary-button anchor-left" href="#">
                                <?php echo $row["bannerbuttonleftc"]; ?>
                            </a>
                            <a class="primary-button" href="#">
                                <?php echo $row["bannerbuttonrightc"]; ?>
                            </a>
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="results-section">
                        <div class="conatiner results-section-container">
                            <h2>Real results | Real impact.</h2>
                            <p>We represent the buyer NOT the seller. Our goal is to get our clients to financial
                                freedom
                                through the right property acquisitions.</p>
                            <div class="row results-main-div">
                                <div class="col-sm-4 results-div">
                                    <h2>3 years</h2>
                                    <p>In a row outperformed national average</p>
                                </div>
                                <div class="col-sm-4 results-div">
                                    <h2>12.12%</h2>
                                    <p>Avg. property growth (2022)</p>
                                </div>
                                <div class="col-sm-4 results-div">
                                    <h2>200%</h2>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="what-includes-section">
                        <div class="container what-includes-section-container">
                            <h2>
                                What Includes
                            </h2>
                            <div class="row">
                                <div class="col-sm-2 what-includes-div">
                                    <img src="admin/assets/images/seven days a week.svg" alt="what includes image">
                                    <h5>
                                        7 days a week tech support
                                    </h5>
                                </div>
                                <div class="col-sm-2 what-includes-div">
                                    <img src="admin/assets/images/dedicated success coach.svg"
                                        alt="what includes image">
                                    <h5>
                                        Dedicated success coach
                                    </h5>
                                </div>
                                <div class="col-sm-2 what-includes-div">
                                    <img src="admin/assets/images/expert.svg" alt="what includes image">
                                    <h5>
                                        Dedicated giving expert
                                    </h5>
                                </div>
                                <div class="col-sm-2 what-includes-div">
                                    <img src="admin/assets/images/specialist.svg" alt="what includes image">
                                    <h5>Dedicated onboarding specialist

                                    </h5>
                                </div>
                                <div class="col-sm-2 what-includes-div">
                                    <img src="admin/assets/images/knowledge.svg" alt="what includes image">
                                    <h5>
                                        Robust Knowledge Center
                                    </h5>
                                </div>
                                <div class="col-sm-2 what-includes-div">
                                    <img src="admin/assets/images/reports.svg" alt="what includes image">
                                    <h5>
                                        Quarterly engagement reports
                                    </h5>
                                </div>
                            </div>
                            <h4>included in every package</h4>
                        </div>
                    </div>
        </main>
        <footer>
            <div class="footer-section">
                <div class="container footer-section-container">
                    <div class="row footer-div-with-border">

                        <div class="col-sm- footer-div footer-div-left">
                            <img class="logo-in-footer" src="admin/assets/images/logo.svg" alt="logo footer image">
                            <p>
                                We represent the buyer NOT the seller. Our goal is to get our clients to financial
                                freedom through the right property acquisitions.
                            </p>
                            <div class="flex-images">
                                <img src="admin/assets/images/facebook.svg" alt="social media icons">
                                <img src="admin/assets/images/twitter.svg" alt="social media icons">
                                <img src="admin/assets/images/instagram.svg" alt="social media icons">
                            </div>
                        </div>
                        <div class="col-sm- footer-div footer-div-middle">
                            <h2> Quick Menu </h2>
                            <ul class="list-flex-column">
                                <a href-"#">
                                    <li>Home</li>
                                </a>
                                <a href-"#">
                                    <li>About Us</li>
                                </a>
                                <a href-"#">
                                    <li>Why Us</li>
                                </a>
                                <a href-"#">
                                    <li>Online Course</li>
                                </a>
                                <a href-"#">
                                    <li>Free Ebook</li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-sm- footer-div footer-div-right">
                            <h2>
                                Contact
                            </h2>
                            <a href="mailto:hello@searchpropertyau.com">hello@searchpropertyau.com</a>
                        </div>
                    </div>
                    <p class="p-after-border">Copyright © 2023 SearchProperty. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
</body>

</html>