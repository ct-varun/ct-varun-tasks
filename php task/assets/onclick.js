// $('form').submit(function (event) {
//     event.preventDefault();

$(".submit").click(function () {
    var firstName = $("#first_name").val();
    var lastName = $("#last_name").val();
    var mNumber = $("#m_number").val();
    //alert(firstName);
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

        }
    });
});
