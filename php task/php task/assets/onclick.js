$(document).ready(function () {
    $(".submit").click(function () {
        var firstName = $("#first_name").val();
        var lastName = $("#last_name").val();
        var mNumber = $("#m_number").val();
        var fileinput =
            $.ajax({
                url: 'result.php',
                type: 'POST',
                data: {
                    first: firstName,
                    last: lastName,
                    m_num: mNumber
                },
                success: function (response) {
                    alert(response);
                    // var $final = response.namefirst + " " + response.namelast + " " + response.phonenumber;
                    // alert($final);

                }
            });
    });
});