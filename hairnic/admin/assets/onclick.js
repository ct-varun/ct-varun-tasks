$(document).ready(function () {
    var choice = $("#selectchoice option:selected").text();
    if (choice != "image") {
        $(".logotext").show();
        $(".logoimage").hide();
    }
    else {
        $(".logotext").hide();
        $(".logoimage").show();
    }
    $("#selectchoice").change(function () {
        var choiceoflogo = $("#selectchoice option:selected").text();
        if (choiceoflogo != "image") {
            $(".logotext").show();
            $(".logoimage").hide();
        }
        else {
            $(".logotext").hide();
            $(".logoimage").show();
        }
    });
    $("#admin-submit").click(function (event) {
        var choiceoflogo = $("#selectchoice option:selected").text();
        if (choiceoflogo == "image") {
            event.preventDefault();
            var logoimage = $("#upload_file")[0].files[0];
            var navhome = $("#navhome").val();
            var navabout = $("#navabout").val();
            var navproducts = $("#navproducts").val();
            var navpages = $("#navpages").val();
            var navcontact = $("#navcontact").val();
            var navshopnow = $("#navshopnow").val();
            var bannerh3 = $("#bannerh3").val();
            var bannerh1beforespan = $("#bannerh1beforespan").val();
            var bannerh1span = $("#bannerh1span").val();
            var bannerh1afterspan = $("#bannerh1afterspan").val();
            var bannerp = $("#bannerp").val();
            var bannerbuttonleft = $("#bannerbuttonleft").val();
            var bannerbuttonright = $("#bannerbuttonright").val();
            var bannerimage = $("#bannerimage")[0].files[0];
            var featuresleft = $("#featuresleft").val();
            var featurescenter = $("#featurescenter").val();
            var featuresright = $("#featuresright").val();
            var aboutimage = $("#aboutimage")[0].files[0];
            var abouth1 = $("#abouth1").val();
            var abouth1span = $("#abouth1span").val();
            var aboutptop = $("#aboutptop").val();
            var aboutpbottom = $("#aboutpbottom").val();
            var aboutbutton = $("#aboutbutton").val();
            alert(logoimage);
            if (logoimage == undefined) {
                logoimage = $("#label-for-image").text().trim();
                if (logoimage == '' || logoimage == "null") {
                    alert("no logo image in the database");
                    exit();
                }

            }
            alert(bannerimage);
            if (bannerimage == undefined) {
                alert(bannerimage);
                bannerimage = $("#labelbannerimage").text().trim();
                alert(bannerimage);
                if (bannerimage == '') {
                    alert("no banner image in the database");
                    exit();
                }

            }
            alert(aboutimage);
            if (aboutimage == undefined) {
                alert(aboutimage);
                aboutimage = $("#labelaboutimage").text().trim();
                alert(aboutimage);
                if (aboutimage == '') {
                    alert("no about image in the database");
                    exit();
                }

            }
            alert("ajaxworking");
            var formdata = new FormData();
            formdata.append("logoimage", logoimage);
            formdata.append("navhome", navhome);
            formdata.append("navabout", navabout);
            formdata.append("navproducts", navproducts);
            formdata.append("navpages", navpages);
            formdata.append("navcontact", navcontact);
            formdata.append("navshopnow", navshopnow);
            formdata.append("bannerh3", bannerh3);
            formdata.append("bannerh1beforespan", bannerh1beforespan);
            formdata.append("bannerh1span", bannerh1span);
            formdata.append("bannerh1afterspan", bannerh1afterspan);
            formdata.append("bannerp", bannerp);
            formdata.append("bannerbuttonleft", bannerbuttonleft);
            formdata.append("bannerbuttonright", bannerbuttonright);
            formdata.append("bannerimage", bannerimage);
            formdata.append("featuresleft", featuresleft);
            formdata.append("featurescenter", featurescenter);
            formdata.append("featuresright", featuresright);
            formdata.append("aboutimage", aboutimage);
            formdata.append("abouth1", abouth1);
            formdata.append("abouth1span", abouth1span);
            formdata.append("aboutptop", aboutptop);
            formdata.append("aboutpbottom", aboutpbottom);
            formdata.append("aboutbutton", aboutbutton);
            alert("formdata working correct");
            if (navhome == null || navabout == null || navproducts == null || navpages == null || navcontact == null || navshopnow == null || bannerh3 == null || bannerh1beforespan == null || bannerh1span == null || bannerh1afterspan == null || bannerp == null || bannerbuttonleft == null || bannerbuttonright == null || featuresleft == null || featurescenter == null || featuresright == null || abouth1 == null || abouth1span == null || aboutptop == null || aboutpbottom == null || aboutbutton == null) {
                alert("fill all fields");
                exit();
            }
            $.ajax({
                url: 'result.php',
                type: 'post',
                data: formdata,
                contentType: false,
                processData: false,
                success: function (response) {
                    alert("image ajax");
                    alert(response);
                }

            });
        }

        else {
            alert("script working");
            var logotext = $("#textinlogo").val();
            var logoimage = "null";
            var navhome = $("#navhome").val();
            var navabout = $("#navabout").val();
            var navproducts = $("#navproducts").val();
            var navpages = $("#navpages").val();
            var navcontact = $("#navcontact").val();
            var navshopnow = $("#navshopnow").val();
            var bannerh3 = $("#bannerh3").val();
            var bannerh1beforespan = $("#bannerh1beforespan").val();
            var bannerh1span = $("#bannerh1span").val();
            var bannerh1afterspan = $("#bannerh1afterspan").val();
            var bannerp = $("#bannerp").val();
            var bannerbuttonleft = $("#bannerbuttonleft").val();
            var bannerbuttonright = $("#bannerbuttonright").val();
            var bannerimage = $("#bannerimage")[0].files[0];
            var featuresleft = $("#featuresleft").val();
            var featurescenter = $("#featurescenter").val();
            var featuresright = $("#featuresright").val();
            var aboutimage = $("#aboutimage")[0].files[0];
            var abouth1 = $("#abouth1").val();
            var abouth1span = $("#abouth1span").val();
            var aboutptop = $("#aboutptop").val();
            var aboutpbottom = $("#aboutpbottom").val();
            var aboutbutton = $("#aboutbutton").val();

            //     if (textoflogo == null || mi1 == null || mi2 == null || mi3 == null || mi4 == null || mi5 == null || heading == null || paragraph == null || button == null || bimage == null) {
            //         alert("fill all fields");
            //     }
            ;
            alert(bannerimage);
            if (bannerimage == undefined) {
                bannerimage = $("#labelbannerimage").text().trim();
                if (bannerimage == '') {
                    alert("no banner image in the database");
                    exit();
                }

            }
            alert(aboutimage);
            if (aboutimage == undefined) {
                aboutimage = $("#labelaboutimage").text().trim();
                if (aboutimage == '') {
                    alert("no about image in the database");
                    exit();
                }

            }
            var formdata = new FormData();
            formdata.append("logotext", logotext);
            formdata.append("logoimage", logoimage);
            formdata.append("navhome", navhome);
            formdata.append("navabout", navabout);
            formdata.append("navproducts", navproducts);
            formdata.append("navpages", navpages);
            formdata.append("navcontact", navcontact);
            formdata.append("navshopnow", navshopnow);
            formdata.append("bannerh3", bannerh3);
            formdata.append("bannerh1beforespan", bannerh1beforespan);
            formdata.append("bannerh1span", bannerh1span);
            formdata.append("bannerh1afterspan", bannerh1afterspan);
            formdata.append("bannerp", bannerp);
            formdata.append("bannerbuttonleft", bannerbuttonleft);
            formdata.append("bannerbuttonright", bannerbuttonright);
            formdata.append("bannerimage", bannerimage);
            formdata.append("featuresleft", featuresleft);
            formdata.append("featurescenter", featurescenter);
            formdata.append("featuresright", featuresright);
            formdata.append("aboutimage", aboutimage);
            formdata.append("abouth1", abouth1);
            formdata.append("abouth1span", abouth1span);
            formdata.append("aboutptop", aboutptop);
            formdata.append("aboutpbottom", aboutpbottom);
            formdata.append("aboutbutton", aboutbutton);
            if (navhome == null || navabout == null || navproducts == null || navpages == null || navcontact == null || navshopnow == null || bannerh3 == null || bannerh1beforespan == null || bannerh1span == null || bannerh1afterspan == null || bannerp == null || bannerbuttonleft == null || bannerbuttonright == null || featuresleft == null || featurescenter == null || featuresright == null || abouth1 == null || abouth1span == null || aboutptop == null || aboutpbottom == null || aboutbutton == null) {
                alert("fill all fields");
                exit();
            }
            alert("formdataworking");
            $.ajax({
                url: 'result.php',
                type: 'post',
                data: formdata,
                contentType: false,
                processData: false,
                success: function (response) {
                    alert("success working");
                    alert(response);
                }

            });
        }

    });
    $("#login-signup-button").click(function (e) {
        e.preventDefault();
        window.location.href = "signup.php";
    });
    $("#login-submit").click(function (e) {
        e.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            url: 'loginresult.php',
            type: 'post',
            data: {
                username1: username,
                password1: password
            },
            // contentType: false,
            // processData: false,
            success: function (response) {
                // alert(response);
                if (response == "1") {
                    window.location.href = "admin.php";
                }
                else {
                    alert("signup first");
                }
            }

        });
    });
    $("#admin-logout").click(function (e) {
        $.ajax({
            url: 'logout.php',
            type: 'post',
            success: function (response) {
                // alert(response);
                if (response == 1) {
                    window.location.href = "index.php";
                }
            }
        });
    });
    $("#signup-button").click(function (e) {
        e.preventDefault();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var passwordnew = $("#password").val();
        var confirmpassword = $("#confirm-password").val();
        var usernamenew = firstname.concat(lastname);
        if (passwordnew != confirmpassword) {
            alert("passwords do not match");
        }
        else {
            if (firstname && lastname && passwordnew && usernamenew) {
                $.ajax({
                    type: 'POST',
                    url: 'signupinsert.php',
                    data: {
                        username1: usernamenew,
                        password1: passwordnew
                    },
                    // contentType: 'application/json',
                    // processData: false,
                    success: function (response) {
                        alert(response);
                        if (response == "inserted the details") {
                            window.location.href = "index.php";
                        }
                    }

                });
            }
            else {
                alert("incomplete");
            }
        }
    });
    $("#signup-login").click(function (e) {
        e.preventDefault();
        window.location.href = "index.php";
    });
});