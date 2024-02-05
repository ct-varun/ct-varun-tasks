
$(document).ready(function () {
    $("#submit").click(function (e) {
        e.preventDefault();
        // Get input values
        var first_name1 = $("#first_name").val();
        var middle_name1 = $("#middle_name").val();
        var last_name1 = $("#last_name").val();

        // Create FormData
        var formData = new FormData();
        formData.append("first_name_value", first_name1);
        formData.append("middle_name_value", middle_name1);
        formData.append("last_name_value", last_name1);

        // Add file to FormData
        var fileInput = $("#upload_file")[0].files[0];
        formData.append("upload_file1", fileInput);

        // Ajax request
        $.ajax({
            type: "POST",
            url: "result.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert(response);
            }
        });
    });
});
