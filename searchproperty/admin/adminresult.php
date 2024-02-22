<?php
include 'database.php';
$sql = "select * from sp_data";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['idc'];
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $choice = $_POST["choice"];
    if (mysqli_num_rows($result) < 1) {
        if ($choice == "image") {
            if (isset($_FILES['logoimagec'])) {
                $logoimagec = $_FILES['logoimagec']['name'];
                $file_tmp = $_FILES['logoimagec']['tmp_name'];
                move_uploaded_file($file_tmp, "assets/uploads/" . $logoimagec);
            }
            $homec = $_POST['homec'];
            $aboutusc = $_POST['aboutusc'];
            $whyusc = $_POST['whyusc'];
            $freeebookc = $_POST['freeebookc'];
            $onlinecoursec = $_POST['onlinecoursec'];
            $bookacallc = $_POST['bookacallc'];
            $bannerheadertopc = $_POST['bannerheadertopc'];
            $bannerheaderbottomc = $_POST['bannerheaderbottomc'];
            $bannerbuttonleftc = $_POST['bannerbuttonleftc'];
            $bannerbuttonrightc = $_POST['bannerbuttonrightc'];
            $sql1 = "INSERT INTO sp_data (logoimagec, logotextc, homec, aboutusc, whyusc, freeebookc, onlinecoursec, bookacallc, bannerheadertopc, bannerheaderbottomc, bannerbuttonleftc, bannerbuttonrightc) VALUES ('$logoimagec', 'null', '$homec', '$aboutusc', '$whyusc', '$freeebookc',    '$onlinecoursec', '$bookacallc', '$bannerheadertopc', '$bannerheaderbottomc', '$bannerbuttonleftc', '$bannerbuttonrightc')";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted in admin no rows";
            } else {
                echo "data not inserted in admin no rows";
            }
        } else {
            $logotextc = $_POST['logotextc'];
            $homec = $_POST['homec'];
            $aboutusc = $_POST['aboutusc'];
            $whyusc = $_POST['whyusc'];
            $freeebookc = $_POST['freeebookc'];
            $onlinecoursec = $_POST['onlinecoursec'];
            $bookacallc = $_POST['bookacallc'];
            $bannerheadertopc = $_POST['bannerheadertopc'];
            $bannerheaderbottomc = $_POST['bannerheaderbottomc'];
            $bannerbuttonleftc = $_POST['bannerbuttonleftc'];
            $bannerbuttonrightc = $_POST['bannerbuttonrightc'];
            $sql1 = "INSERT INTO sp_data (logoimagec, logotextc, homec, aboutusc, whyusc, freeebookc, onlinecoursec, bookacallc, bannerheadertopc, bannerheaderbottomc, bannerbuttonleftc, bannerbuttonrightc) VALUES ('null', '$logotextc', '$homec', '$aboutusc', '$whyusc', '$freeebookc', '$onlinecoursec', '$bookacallc', '$bannerheadertopc', '$bannerheaderbottomc', '$bannerbuttonleftc', '$bannerbuttonrightc')";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted in admin logo text";
            } else {
                echo "data not inserted in admin logotext";
            }

        }
    } else {
        if ($choice == "image") {
            if (isset($_FILES['logoimagec'])) {
                $logoimagec = $_FILES['logoimagec']['name'];
                $file_tmp = $_FILES['logoimagec']['tmp_name'];
                move_uploaded_file($file_tmp, "assets/uploads/" . $logoimagec);
            } else {
                $logoimagec = $_POST['logoimagec'];
            }
            $homec = $_POST['homec'];
            $aboutusc = $_POST['aboutusc'];
            $whyusc = $_POST['whyusc'];
            $freeebookc = $_POST['freeebookc'];
            $onlinecoursec = $_POST['onlinecoursec'];
            $bookacallc = $_POST['bookacallc'];
            $bannerheadertopc = $_POST['bannerheadertopc'];
            $bannerheaderbottomc = $_POST['bannerheaderbottomc'];
            $bannerbuttonleftc = $_POST['bannerbuttonleftc'];
            $bannerbuttonrightc = $_POST['bannerbuttonrightc'];
            $sql1 = "UPDATE sp_data set logoimagec='$logoimagec', logotextc='null', homec='$homec', aboutusc='$aboutusc', whyusc='$whyusc', freeebookc='$freeebookc', onlinecoursec='$onlinecoursec', bookacallc='$bookacallc', bannerheadertopc='$bannerheadertopc', bannerheaderbottomc='$bannerheaderbottomc', bannerbuttonleftc='$bannerbuttonleftc', bannerbuttonrightc='$bannerbuttonrightc' where idc='$id'";
            echo $sql1;
            if (mysqli_query($conn, $sql1)) {
                echo "data updated admin more rows";
            } else {
                echo "data not updated admin more rows";
            }
        } else {
            $logotextc = $_POST['logotextc'];
            $homec = $_POST['homec'];
            $aboutusc = $_POST['aboutusc'];
            $whyusc = $_POST['whyusc'];
            $freeebookc = $_POST['freeebookc'];
            $onlinecoursec = $_POST['onlinecoursec'];
            $bookacallc = $_POST['bookacallc'];
            $bannerheadertopc = $_POST['bannerheadertopc'];
            $bannerheaderbottomc = $_POST['bannerheaderbottomc'];
            $bannerbuttonleftc = $_POST['bannerbuttonleftc'];
            $bannerbuttonrightc = $_POST['bannerbuttonrightc'];
            $sql1 = "UPDATE sp_data set logoimagec='null', logotextc='$logotextc', homec='$homec', aboutusc='$aboutusc', whyusc='$whyusc', freeebookc='$freeebookc', onlinecoursec='$onlinecoursec', bookacallc='$bookacallc', bannerheadertopc='$bannerheadertopc', bannerheaderbottomc='$bannerheaderbottomc', bannerbuttonleftc='$bannerbuttonleftc', bannerbuttonrightc='$bannerbuttonrightc' where idc='$id'";
            if (mysqli_query($conn, $sql1)) {
                echo "data updated admin more rows";
            } else {
                echo "data not updated admin more rows";
            }

        }


    }
}
?>