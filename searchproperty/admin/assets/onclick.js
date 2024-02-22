$(document).ready(function () {
    var choice = $("#select_choice option:selected").text();
    if (choice == "text") {
        $(".logoimagediv").hide();
        $(".logotextdiv").show();
    }
    else {
        $(".logoimagediv").show();
        $(".logotextdiv").hide();
    }
    $("#select_choice").change(function () {
        var choice = $("#select_choice option:selected").text();
        if (choice == "text") {
            $(".logoimagediv").hide();
            $(".logotextdiv").show();
        }
        else {
            $(".logoimagediv").show();
            $(".logotextdiv").hide();
        }
    });
    $("#login-signup").click(function (event) {
        event.preventDefault();
        window.location.href = "signup.php";
    });
    $("#login-submit").click(function (event) {
        event.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        if (username == '' || password == '') {
            alert("Enter all fields");
            exit();
        }
        $.ajax({
            type: 'post',
            url: 'loginresult.php',
            data: {
                usernamefinal: username,
                passwordfinal: password
            },
            success: function (response) {
                if (response == "1") {
                    window.location.href = "admin.php";
                }
                else {
                    alert("no user found");
                }
            }

        });
    });
    $("#signup-submit").click(function (event) {
        event.preventDefault();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var password = $("#password").val();
        var confirmpassword = $("#confirmpassword").val();
        var username = firstname + lastname;
        if (password != confirmpassword) {
            alert("passwords do not match");
            exit();
        }
        if (firstname == '' || lastname == '' || password == '' || confirmpassword == '') {
            alert("Enter all fields");
            exit();
        }
        $.ajax({
            type: 'post',
            url: 'signupresult.php',
            data: {
                usernamefinal: username,
                passwordfinal: password,
                firstnamefinal: firstname,
                lastnamefinal: lastname
            },
            success: function (response) {
                alert(response);
                alert("ajax working");
            }

        });
    });
    $("#signup-login").click(function (event) {
        event.preventDefault();
        window.location.href = "index.php";
    });
    $("#admin-logout").click(function (event) {
        event.preventDefault();
        $.ajax({
            url: 'logout.php',
            type: 'post',
            success: function (response) {
                if (response == 1) {
                    alert("logout was successful");
                    window.location.href = "index.php";
                }
            }

        });
    });
    $("#admin-submit").click(function (event) {
        event.preventDefault();
        var choice = $("#select_choice option:selected").text();
        var logoimagec = $("#logoimagec")[0].files[0];
        var logotextc = $("#logotextc").val();
        var homec = $("#homec").val();
        var aboutusc = $("#aboutusc").val();
        var whyusc = $("#whyusc").val();
        var freeebookc = $("#freeebookc").val();
        var onlinecoursec = $("#onlinecoursec").val();
        var bookacallc = $("#bookacallc").val();
        var bannerheadertopc = $("#bannerheadertopc").val();
        var bannerheaderbottomc = $("#bannerheaderbottomc").val();
        var bannerbuttonleftc = $("#bannerbuttonleftc").val();
        var bannerbuttonrightc = $("#bannerbuttonrightc").val();
        if (choice == "image") {
            if (logoimagec == undefined) {
                logoimagec = $("#label-for-image-name").trim().text();
                if (logoimagec = '') {
                    alert("no image in the database");
                }
            }
        }
        if (homec == '' || aboutusc == '' || whyusc == '' || freeebookc == '' || onlinecoursec == '' || bookacallc == '' || bannerheadertopc == '' || bannerheaderbottomc == '' || bannerbuttonleftc == '' || bannerbuttonrightc == '') {
            alert("Enter all fields");
            exit();
        }
        var formdata = new FormData();
        formdata.append("choice", choice);
        formdata.append("logoimagec", logoimagec);
        formdata.append("logotextc", logotextc);
        formdata.append("homec", homec);
        formdata.append("aboutusc", aboutusc);
        formdata.append("whyusc", whyusc);
        formdata.append("freeebookc", freeebookc);
        formdata.append("onlinecoursec", onlinecoursec);
        formdata.append("bookacallc", bookacallc);
        formdata.append("bannerheadertopc", bannerheadertopc);
        formdata.append("bannerheaderbottomc", bannerheaderbottomc);
        formdata.append("bannerbuttonleftc", bannerbuttonleftc);
        formdata.append("bannerbuttonrightc", bannerbuttonrightc);
        $.ajax({
            type: 'post',
            url: 'adminresult.php',
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                alert(response);
                alert("ajax working data insert admin");
            }
        });
    });
});