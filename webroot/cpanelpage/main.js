$(document).on('click', '#pcodeBtn', function() {
    $.ajax({
        url: confirmAdmin,
        method: 'post',
        data: { passcode: $('#pcode').val() },
        success: function(res) {
            let data = JSON.parse(res);
            if (data.code == 200) {
                $('#div-a').hide();
                $('#div-b').show();
                setTimeout(function() {
                    window.location.href = "";
                }, 3000);
            } else {
                var html = '<div class="alert alert-danger alert-dismissable">';
                html += '<i class="icon-remove-sign"></i> <strong>Thất bại!</strong> ';
                html += data.msg + '</div>';
                $('#error-div').empty();
                $('#error-div').html(html);
                setTimeout(function() {
                    $('#error-div').empty();
                }, 3000);
            }
        },
        error: function() {

        }
    })
});