$(document).on('click', '#pcodeBtn', function() {


    $.ajax({
        url: '/cpanel/confirm',
        method: 'post',
        data: { passcode: $('#pcode').val() },
        success: function(res) {
            let data = JSON.parse(res);
            if (data.code == 200) {
                var html = '<div class="alert alert-success alert-dismissable">';
                html += '<i class="icon-check-sign"></i> <strong>Thành công!</strong> ';
                html += data.msg + '</div>';
                $('#error-div').empty();
                $('#error-div').html(html);
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