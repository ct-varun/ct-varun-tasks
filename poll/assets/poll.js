$(document).ready(function () {
    $(".formpoll").submit(function (e) {
        e.preventDefault();
    });//ask doubt from sir 

    $(".submit").click(function () {
        var vote = $('input[name="vote"]:checked').val();

        $.ajax({
            url: 'result.php',
            type: 'post',
            data: {
                selected: vote
            },
            dataType: 'json',
            success: function (response) {
                // alert(response);
                if (response >= 5) {
                    $.ajax({
                        url: 'destroy.php',
                        type: 'post',
                        success: function (response) {
                            // alert("destroy");
                        }
                    });
                }
                $('.result').text(response);
            }
        });
    });
});