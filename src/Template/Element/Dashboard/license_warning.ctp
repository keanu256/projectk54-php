<?php if(isset($license_warning) && $license_warning):?>
<style>
    #expired_counter a{
        color: #313a46;
        font-weight: bold;
    }
</style>
<?php 
    $link_license = $this->Url->build(['controller'=>'Dashboard','action'=>'license']);
?>
<div class="alert alert-dark mt-3" role="alert" id="expired_counter">
    <strong>Thời hạn sử dụng còn lại: </strong> <?= $expired_str ?>. Nhấn vào <a href="<?= $link_license ?>">đây</a> để gia hạn.
</div>

<script>
    $(function(){
        var timeleft = <?= isset($expired_seconds)? $expired_seconds : 0 ?>;
        var downloadTimer = setInterval(function(){
            var pre_a = '<strong>Thời hạn sử dụng còn lại: </strong> ';
            var pre_b = '. Nhấn vào <a href="<?= $link_license ?>">đây</a> để gia hạn.';
            $('#expired_counter').html(pre_a + countDownFormatTime(--timeleft) + pre_b);
            if(timeleft <= 0)
                clearInterval(downloadTimer);
        },1000);
    })

    function countDownFormatTime(seconds){
        var days = Math.floor(seconds/86400);
        seconds = seconds-(days*86400);
        var hours = Math.floor(seconds/3600);
        seconds = seconds-(hours*3600);
        var minutes = Math.floor(seconds/60);
        seconds = seconds - (minutes*60);
        var str_time = (days>0)? days + ' ngày ' : '';
        str_time += (hours>0)? hours + ' giờ ' : '';
        str_time += (minutes>0)? minutes + ' phút ' : '';
        str_time += (seconds>0)? seconds + ' giây ' : '';
        return $.trim(str_time);
    }
</script>
<?php endif; ?>