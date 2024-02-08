$(document).ready(function () {
    $("#login-signup-button").click(function (e) {
        e.preventDefault();
        window.location.href = "signup.php";
    });
    $("#admin-submit").click(function (e) {
        e.preventDefault();
        var heading = $("#heading").val();
        var content = $("#content").val();
        var formdata = new FormData();
        formdata.append("heading1", heading);
        formdata.append("content1", content);
        var imageinput = $("#upload_file")[0].files[0];
        formdata.append("uploadfile", imageinput);

        $.ajax({
            url: 'adminresult.php',
            type: 'post',
            data: formdata,
            contentType: false,
            processData: false,
            success: function (response) {
                // window.open("admin.php");
                alert(response);
            }

        });
    });
    $("#login-submit").click(function (e) {
        e.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            url: 'result.php',
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
    });
    $("#signup-login").click(function (e) {
        e.preventDefault();
        window.location.href = "index.php";
    });

});