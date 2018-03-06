$(function() {
    // $('.color_settings_box').animate({ 'right': '0px' }, 'slow').addClass('active');

    if ($('.content-wrapper').hasClass('wood-wrapper')) {
        $('#wood-wrapper-checkbox').prop('checked', true);
    }

    $('#wood-wrapper-checkbox').on('change', function() {
        if ($(this).is(':checked')) {
            $('.content-wrapper').addClass('wood-wrapper');
        } else {
            $('.content-wrapper').removeClass('wood-wrapper');
        }
    });

    $('.toggle-color-settings').on('click', function() {
        if ($('.color_settings_box').hasClass('active')) {
            $('.color_settings_box').animate({ 'right': '-200px' }, 'slow').removeClass('active');
            $('.toggle-color-settings span').text('Hiện');
        } else {
            $('.color_settings_box').animate({ 'right': '0px' }, 'slow').addClass('active');
            $('.toggle-color-settings span').text('Ẩn');
        }
        return false;
    });

    $('.color-tooltip').tooltip();

    $('.color-box').on('click', function() {
        $(this).closest('.color-settings-w').find('.color-box').removeClass('active');
        $(this).addClass('active');
        var replace_element = $(this).closest('.color-settings-w').data('replace-element');
        var leave_class = $(this).closest('.color-settings-w').data('leave-class');
        var add_class = $(this).data('replace-with');
        $(replace_element).prop('class', leave_class);
        $(replace_element).addClass(add_class);
        $('#wood-wrapper-checkbox').prop('checked', false);
        $('.content-wrapper').removeClass('wood-wrapper');
        return false;
    });

    $('#on-off-a').on('click', function() {
        let input = $('#on-off-a').attr('d-val');
        turnOnOff('Maintain', input, this);
    });

    $('#on-off-b').on('click', function() {
        let input = $('#on-off-b').attr('d-val');
        turnOnOff('Register', input, this);
    });

    $('#on-off-c').on('click', function() {
        let input = $('#on-off-c').attr('d-val');
        turnOnOff('Payment', input, this);
    });
});

function turnOnOff(target, status, el) {
    $.ajax({
        url: 'cpanel/onoff',
        type: 'post',
        data: { target: target, status: status },
        success: function(res) {
            if (res.code == 200) {
                changeOnStatus(target, status, el);
            }
        },
        error: function() {

        }
    })
}

function changeOnStatus(target, status, el) {
    let reverseStatus = (status == 0) ? 1 : 0;
    let onClass = 'btn btn-success col-md-12';
    let offClass = 'btn btn-danger col-md-12';

    $(el).attr('d-val', reverseStatus);
    $(el).removeClass();

    switch (target) {
        case 'Maintain':
            {
                if (reverseStatus) {
                    $(el).html('BẬT BẢO TRÌ');
                    $(el).addClass(onClass);
                } else {
                    $(el).html('TẮT BẢO TRÌ');
                    $(el).addClass(offClass);
                }
                break;
            }
        case 'Register':
            {
                if (reverseStatus) {
                    $(el).html('MỞ ĐĂNG KÝ');
                    $(el).addClass(onClass);
                } else {
                    $(el).html('TẮT ĐĂNG KÝ');
                    $(el).addClass(offClass);
                }
                break;
            }
        case 'Payment':
            {
                if (reverseStatus) {
                    $(el).html('MỞ THANH TOÁN');
                    $(el).addClass(onClass);
                } else {
                    $(el).html('TẮT THANH TOÁN');
                    $(el).addClass(offClass);
                }
                break;
            }
    }
}