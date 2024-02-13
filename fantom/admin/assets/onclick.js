$(document).ready(function () {
    $("#selectchoice").change(function () {
        var choiceoflogo = $("#selectchoice option:selected").text();
        if (choiceoflogo == "image") {
            $(".logotext").hide();
            $(".logoimage").show();
        }
        else {
            $(".logotext").show();
            $(".logoimage").hide();
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
            var bimage = $("#upload_background")[0].files[0];
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
            alert("image");
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

    });
});