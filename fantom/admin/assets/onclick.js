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
            var mi1 = $("#menuitem1").val();
            var mi2 = $("#menuitem2").val();
            var mi3 = $("#menuitem3").val();
            var mi4 = $("#menuitem4").val();
            var mi5 = $("#menuitem5").val();
            var heading = $("#heading").val();
            var paragraph = $("#paragraph").val();
            var button = $("#button").val();
            var image = $("#upload_file")[0].files[0];
            if (image == undefined) {
                image = $("#label-for-image").text().trim();
                if (image == "null") {
                    alert("no image in the database");
                    exit();
                }
            }
            var bimage = $("#upload_background")[0].files[0];
            if (mi1 == null || mi2 == null || mi3 == null || mi4 == null || mi5 == null || heading == null || paragraph == null || button == null || bimage == null) {
                alert("fill all fields");
            }
            else {
                var formdata = new FormData();
                formdata.append("mi1", mi1);
                formdata.append("mi2", mi2);
                formdata.append("mi3", mi3);
                formdata.append("mi4", mi4);
                formdata.append("mi5", mi5);
                formdata.append("heading", heading);
                formdata.append("paragraph", paragraph);
                formdata.append("button", button);
                formdata.append("uploadimage", image);
                formdata.append("backgroundimage", bimage);
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
        }

        else {
            var textoflogo = $("#textinlogo").val();
            var mi1 = $("#menuitem1").val();
            var mi2 = $("#menuitem2").val();
            var mi3 = $("#menuitem3").val();
            var mi4 = $("#menuitem4").val();
            var mi5 = $("#menuitem5").val();
            var heading = $("#heading").val();
            var paragraph = $("#paragraph").val();
            var button = $("#button").val();
            var bimage = $("#upload_background")[0].files[0];
            var image = null;
            if (textoflogo == null || mi1 == null || mi2 == null || mi3 == null || mi4 == null || mi5 == null || heading == null || paragraph == null || button == null || bimage == null) {
                alert("fill all fields");
            }
            else {
                var formdata = new FormData();
                formdata.append("textinlogo", textoflogo);
                formdata.append("mi1", mi1);
                formdata.append("mi2", mi2);
                formdata.append("mi3", mi3);
                formdata.append("mi4", mi4);
                formdata.append("mi5", mi5);
                formdata.append("heading", heading);
                formdata.append("paragraph", paragraph);
                formdata.append("button", button);
                formdata.append("uploadimage", image);
                formdata.append("backgroundimage", bimage);
                $.ajax({
                    url: 'result.php',
                    type: 'post',
                    data: formdata,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        alert(response);
                    }

                });
            }
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