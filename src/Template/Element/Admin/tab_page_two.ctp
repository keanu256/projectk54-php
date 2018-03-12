<?php 
use App\Classes\PolygonHelper;
    $polyHelper = new PolygonHelper();
    $linkSetConfig = $this->Url->build(['prefix'=>'Admin','controller'=>'Home','action'=> 'setconfig'])
?>
<div class="shadowed-bottom">
    
    <h3 class="form-title form-title-first"><i class="icon-terminal"></i> Hình thức đăng nhập cho hệ thống</h3>
    <div class="form-group">
        <div class="alert alert-info alert-dismissable">
            <i class="icon-lightbulb"></i> <strong>Mẹo!</strong> Bạn có thể lựa chọn một hay nhiều hình thức đăng nhập.
        </div>
    </div>
    <label>Cho phép người dùng đăng nhập bằng các hình thức sau:</label><br>
    <div class="pretty p-default">
        <input type="checkbox" <?= $polyHelper->checkLogin('MainLogin')?"checked":""; ?>
        value="MainLogin">
        <div class="state p-success">
            <label>Mặc định</label>
        </div>
    </div>

    <div class="pretty p-default">
        <input type="checkbox" <?= $polyHelper->checkLogin('FacebookLogin')?"checked":""; ?>
        value="FacebookLogin">
        <div class="state p-success">
            <label>Qua Facebook</label>
        </div>
    </div>

    <div class="pretty p-default">
        <input type="checkbox" <?= $polyHelper->checkLogin('GoogleLogin')?"checked":""; ?>
        value="GoogleLogin">
        <div class="state p-success">
            <label>Qua Google</label>
        </div>
    </div>

    <div class="pretty p-default">
        <input type="checkbox" <?= $polyHelper->checkLogin('QRLogin')?"checked":""; ?>
        value="QRLogin">
        <div class="state p-success">
            <label>Qua QR</label>
        </div>
    </div>

</div>     

<script>
    $( document ).ready(function() {

        $('div.pretty').find('input[type="checkbox"]').on('change',function(){
            let value = $(this).val();
            let status = $(this).is(':checked');
            let curInput = $(this);

            $.ajax({
                url: '<?= $linkSetConfig ?>',
                type: 'post',
                data: { target:value, status: status},
                success: function(res){
                    if(res.code == 400){
                        curInput.trigger('click');
                        alert(res.msg);
                    }
                },
                error: function(){

                }
            })
        })
    });            
</script>