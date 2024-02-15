<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql2 = "select * from hairnic_data";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        $id = $row['id'];
    }
    if (mysqli_num_rows($result) < 1) {
        if (isset($_FILES['logoimage'])) {
            $file_namel = $_FILES['logoimage']['name'];
            $file_tmpl = $_FILES['logoimage']['tmp_name'];
            move_uploaded_file($file_tmpl, "assets/uploads/" . $file_namel);
            $navhome = $_POST['navhome'];
            $navabout = $_POST['navabout'];
            $navproducts = $_POST['navproducts'];
            $navpages = $_POST['navpages'];
            $navcontact = $_POST['navcontact'];
            $navshopnow = $_POST['navshopnow'];
            $bannerh3 = $_POST['bannerh3'];
            $bannerh1beforespan = $_POST['bannerh1beforespan'];
            $bannerh1span = $_POST['bannerh1span'];
            $bannerh1afterspan = $_POST['bannerh1afterspan'];
            $bannerp = $_POST['bannerp'];
            $bannerbuttonleft = $_POST['bannerbuttonleft'];
            $bannerbuttonright = $_POST['bannerbuttonright'];
            $featuresleft = $_POST['featuresleft'];
            $featurescenter = $_POST['featurescenter'];
            $featuresright = $_POST['featuresright'];
            $abouth1 = $_POST['abouth1'];
            $abouth1span = $_POST['abouth1span'];
            $aboutptop = $_POST['aboutptop'];
            $aboutpbottom = $_POST['aboutpbottom'];
            $aboutbutton = $_POST['aboutbutton'];
            if (isset($_FILES['bannerimage'])) {
                $file_nameb = $_FILES['bannerimage']['name'];
                $file_tmpb = $_FILES['bannerimage']['tmp_name'];
                move_uploaded_file($file_tmpb, "assets/uploads/" . $file_nameb);
            } else {
                $file_nameb = $_POST['bannerimage'];
            }
            if (isset($_FILES['aboutimage'])) {
                $file_namea = $_FILES['aboutimage']['name'];
                $file_tmpa = $_FILES['aboutimage']['tmp_name'];
                move_uploaded_file($file_tmpa, "assets/uploads/" . $file_namea);
            } else {
                $file_namea = $_POST['aboutimage'];
            }
            $sql1 = "INSERT INTO hairnic_data (logoimagec,logotextc,navhomec,navaboutc,navproductsc,navpagesc,navcontactc,navshopnowc,bannerh3c,bannerh1beforespanc,bannerh1spanc,bannerh1afterspanc,bannerpc,bannerbuttonleftc,bannerbuttonrightc,bannerimagec,featuresleftc,featurescenterc,featuresrightc,aboutimagec,abouth1c,abouth1spanc,aboutptopc,aboutpbottomc,aboutbuttonc) VALUES('$file_namel','null','$navhome','$navabout','$navproducts','$navpages','$navcontact','$navshopnow','$bannerh3','$bannerh1beforespan','$bannerh1span','$bannerh1afterspan','$bannerp','$bannerbuttonleft','$bannerbuttonright','$file_nameb','$featuresleft','$featurescenter','$featuresright','$file_namea','$abouth1','$abouth1span','$aboutptop','$aboutpbottom','$aboutbutton')";
            echo "$sql1";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted with image";
            } else {
                echo "data not inserted with image";
            }
        } else {
            $logotext = $_POST['logotext'];
            $navhome = $_POST['navhome'];
            $navabout = $_POST['navabout'];
            $navproducts = $_POST['navproducts'];
            $navpages = $_POST['navpages'];
            $navcontact = $_POST['navcontact'];
            $navshopnow = $_POST['navshopnow'];
            $bannerh3 = $_POST['bannerh3'];
            $bannerh1beforespan = $_POST['bannerh1beforespan'];
            $bannerh1span = $_POST['bannerh1span'];
            $bannerh1afterspan = $_POST['bannerh1afterspan'];
            $bannerp = $_POST['bannerp'];
            $bannerbuttonleft = $_POST['bannerbuttonleft'];
            $bannerbuttonright = $_POST['bannerbuttonright'];
            $featuresleft = $_POST['featuresleft'];
            $featurescenter = $_POST['featurescenter'];
            $featuresright = $_POST['featuresright'];
            $abouth1 = $_POST['abouth1'];
            $abouth1span = $_POST['abouth1span'];
            $aboutptop = $_POST['aboutptop'];
            $aboutpbottom = $_POST['aboutpbottom'];
            $aboutbutton = $_POST['aboutbutton'];
            if (isset($_FILES['bannerimage'])) {
                $file_nameb = $_FILES['bannerimage']['name'];
                $file_tmpb = $_FILES['bannerimage']['tmp_name'];
                move_uploaded_file($file_tmpb, "assets/uploads/" . $file_nameb);
            } else {
                $file_nameb = $_POST['bannerimage'];
            }
            if (isset($_FILES['aboutimage'])) {
                $file_namea = $_FILES['aboutimage']['name'];
                $file_tmpa = $_FILES['aboutimage']['tmp_name'];
                move_uploaded_file($file_tmpa, "assets/uploads/" . $file_namea);
            } else {
                $file_namea = $_POST['aboutimage'];
            }
            $sql1 = "INSERT INTO hairnic_data (logoimagec,logotextc,navhomec,navaboutc,navproductsc,navpagesc,navcontactc,navshopnowc,bannerh3c,bannerh1beforespanc,bannerh1spanc,bannerh1afterspanc,bannerpc,bannerbuttonleftc,bannerbuttonrightc,bannerimagec,featuresleftc,featurescenterc,featuresrightc,aboutimagec,abouth1c,abouth1spanc,aboutptopc,aboutpbottomc,aboutbuttonc) VALUES('null','$logotext','$navhome','$navabout','$navproducts','$navpages','$navcontact','$navshopnow','$bannerh3','$bannerh1beforespan','$bannerh1span','$bannerh1afterspan','$bannerp','$bannerbuttonleft','$bannerbuttonright','$file_nameb','$featuresleft','$featurescenter','$featuresright','$file_namea','$abouth1','$abouth1span','$aboutptop','$aboutpbottom','$aboutbutton')";
            echo "$sql1";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted with text";
            } else {
                echo "data not inserted";
            }

        }
    } else {
        if (isset($_FILES['logoimage'])) {
            $file_namel = $_FILES['logoimage']['name'];
            $file_tmpl = $_FILES['logoimage']['tmp_name'];
            move_uploaded_file($file_tmpl, "assets/uploads/" . $file_namel);
            $navhome = $_POST['navhome'];
            $navabout = $_POST['navabout'];
            $navproducts = $_POST['navproducts'];
            $navpages = $_POST['navpages'];
            $navcontact = $_POST['navcontact'];
            $navshopnow = $_POST['navshopnow'];
            $bannerh3 = $_POST['bannerh3'];
            $bannerh1beforespan = $_POST['bannerh1beforespan'];
            $bannerh1span = $_POST['bannerh1span'];
            $bannerh1afterspan = $_POST['bannerh1afterspan'];
            $bannerp = $_POST['bannerp'];
            $bannerbuttonleft = $_POST['bannerbuttonleft'];
            $bannerbuttonright = $_POST['bannerbuttonright'];
            $featuresleft = $_POST['featuresleft'];
            $featurescenter = $_POST['featurescenter'];
            $featuresright = $_POST['featuresright'];
            $abouth1 = $_POST['abouth1'];
            $abouth1span = $_POST['abouth1span'];
            $aboutptop = $_POST['aboutptop'];
            $aboutpbottom = $_POST['aboutpbottom'];
            $aboutbutton = $_POST['aboutbutton'];
            if (isset($_FILES['bannerimage'])) {
                $file_nameb = $_FILES['bannerimage']['name'];
                $file_tmpb = $_FILES['bannerimage']['tmp_name'];
                move_uploaded_file($file_tmpb, "assets/uploads/" . $file_nameb);
            } else {
                $file_nameb = $_POST['bannerimage'];
            }
            if (isset($_FILES['aboutimage'])) {
                $file_namea = $_FILES['aboutimage']['name'];
                $file_tmpa = $_FILES['aboutimage']['tmp_name'];
                move_uploaded_file($file_tmpa, "assets/uploads/" . $file_namea);
            } else {
                $file_namea = $_POST['aboutimage'];
            }
            $sql1 = "UPDATE hairnic_data SET logoimagec='$file_namel', logotextc='null', navhomec='$navhome', navaboutc='$navabout', navproductsc='$navproducts',navpagesc='$navpages', navcontactc='$navcontact', navshopnowc='$navshopnow', bannerh3c='$bannerh3', bannerh1beforespanc='$bannerh1beforespan',bannerh1spanc='$bannerh1span', bannerh1afterspanc='$bannerh1afterspan', bannerpc='$bannerp', bannerbuttonleftc='$bannerbuttonleft',bannerbuttonrightc='$bannerbuttonright', bannerimagec='$file_nameb', featuresleftc='$featuresleft', featurescenterc='$featurescenter',featuresrightc='$featuresright', aboutimagec='$file_namea', abouth1c='$abouth1', abouth1spanc='$abouth1span', aboutptopc='$aboutptop',aboutpbottomc='$aboutpbottom', aboutbuttonc='$aboutbutton' where id=$id";
            echo "$sql1";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted with image";
            } else {
                echo "data not inserted with image";
            }
        } else if ($_POST['logoimage'] != "null") {
            $logoimage = $_POST['logoimage'];
            $navhome = $_POST['navhome'];
            $navabout = $_POST['navabout'];
            $navproducts = $_POST['navproducts'];
            $navpages = $_POST['navpages'];
            $navcontact = $_POST['navcontact'];
            $navshopnow = $_POST['navshopnow'];
            $bannerh3 = $_POST['bannerh3'];
            $bannerh1beforespan = $_POST['bannerh1beforespan'];
            $bannerh1span = $_POST['bannerh1span'];
            $bannerh1afterspan = $_POST['bannerh1afterspan'];
            $bannerp = $_POST['bannerp'];
            $bannerbuttonleft = $_POST['bannerbuttonleft'];
            $bannerbuttonright = $_POST['bannerbuttonright'];
            $featuresleft = $_POST['featuresleft'];
            $featurescenter = $_POST['featurescenter'];
            $featuresright = $_POST['featuresright'];
            $abouth1 = $_POST['abouth1'];
            $abouth1span = $_POST['abouth1span'];
            $aboutptop = $_POST['aboutptop'];
            $aboutpbottom = $_POST['aboutpbottom'];
            $aboutbutton = $_POST['aboutbutton'];
            $file_namel = $_POST['logoimage'];
            if (isset($_FILES['bannerimage'])) {
                $file_nameb = $_FILES['bannerimage']['name'];
                $file_tmpb = $_FILES['bannerimage']['tmp_name'];
                move_uploaded_file($file_tmpb, "assets/uploads/" . $file_nameb);
            } else {
                $file_nameb = $_POST['bannerimage'];
            }
            if (isset($_FILES['aboutimage'])) {
                $file_namea = $_FILES['aboutimage']['name'];
                $file_tmpa = $_FILES['aboutimage']['tmp_name'];
                move_uploaded_file($file_tmpa, "assets/uploads/" . $file_namea);
            } else {
                $file_namea = $_POST['aboutimage'];
            }
            $sql1 = "INSERT INTO hairnic_data (logoimagec,logotextc,navhomec,navaboutc,navproductsc,navpagesc,navcontactc,navshopnowc,bannerh3c,bannerh1beforespanc,bannerh1spanc,bannerh1afterspanc,bannerpc,bannerbuttonleftc,bannerbuttonrightc,bannerimagec,featuresleftc,featurescenterc,featuresrightc,aboutimagec,abouth1c,abouth1spanc,aboutptopc,aboutpbottomc,aboutbuttonc) VALUES('$file_namel','null','$navhome','$navabout','$navproducts','$navpages','$navcontact','$navshopnow','$bannerh3','$bannerh1beforespan','$bannerh1span','$bannerh1afterspan','$bannerp','$bannerbuttonleft','$bannerbuttonright','$file_nameb','$featuresleft','$featurescenter','$featuresright','$file_namea','$abouth1','$abouth1span','$aboutptop','$aboutpbottom','$aboutbutton')";
            echo "$sql1";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted with image";
            } else {
                echo "data not inserted with image";
            }


        } else {
            $logoimage = $_POST['logoimage'];
            $logotext = $_POST['logotext'];
            $navhome = $_POST['navhome'];
            $navabout = $_POST['navabout'];
            $navproducts = $_POST['navproducts'];
            $navpages = $_POST['navpages'];
            $navcontact = $_POST['navcontact'];
            $navshopnow = $_POST['navshopnow'];
            $bannerh3 = $_POST['bannerh3'];
            $bannerh1beforespan = $_POST['bannerh1beforespan'];
            $bannerh1span = $_POST['bannerh1span'];
            $bannerh1afterspan = $_POST['bannerh1afterspan'];
            $bannerp = $_POST['bannerp'];
            $bannerbuttonleft = $_POST['bannerbuttonleft'];
            $bannerbuttonright = $_POST['bannerbuttonright'];
            $featuresleft = $_POST['featuresleft'];
            $featurescenter = $_POST['featurescenter'];
            $featuresright = $_POST['featuresright'];
            $abouth1 = $_POST['abouth1'];
            $abouth1span = $_POST['abouth1span'];
            $aboutptop = $_POST['aboutptop'];
            $aboutpbottom = $_POST['aboutpbottom'];
            $aboutbutton = $_POST['aboutbutton'];
            if (isset($_FILES['bannerimage'])) {
                $file_nameb = $_FILES['bannerimage']['name'];
                $file_tmpb = $_FILES['bannerimage']['tmp_name'];
                move_uploaded_file($file_tmpb, "assets/uploads/" . $file_nameb);
            } else {
                $file_nameb = $_POST['bannerimage'];
            }
            if (isset($_FILES['aboutimage'])) {
                $file_namea = $_FILES['aboutimage']['name'];
                $file_tmpa = $_FILES['aboutimage']['tmp_name'];
                move_uploaded_file($file_tmpa, "assets/uploads/" . $file_namea);
            } else {
                $file_namea = $_POST['aboutimage'];
            }
            $sql1 = "UPDATE hairnic_data SET logoimagec='null', logotextc='$logotext', navhomec='$navhome', navaboutc='$navabout', navproductsc='$navproducts',navpagesc='$navpages', navcontactc='$navcontact', navshopnowc='$navshopnow', bannerh3c='$bannerh3', bannerh1beforespanc='$bannerh1beforespan', bannerh1spanc='$bannerh1span', bannerh1afterspanc='$bannerh1afterspan', bannerpc='$bannerp', bannerbuttonleftc='$bannerbuttonleft',bannerbuttonrightc='$bannerbuttonright', bannerimagec='$file_nameb', featuresleftc='$featuresleft', featurescenterc='$featurescenter',featuresrightc='$featuresright', aboutimagec='$file_namea', abouth1c='$abouth1', abouth1spanc='$abouth1span', aboutptopc='$aboutptop',aboutpbottomc='$aboutpbottom', aboutbuttonc='$aboutbutton' where id=$id";
            if (mysqli_query($conn, $sql1)) {
                echo "data inserted with text";
            } else {
                echo "data not inserted";
            }

        }

    }
}