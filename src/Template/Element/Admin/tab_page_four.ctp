<?php 
use App\Classes\PolygonHelper;
    $polyHelper = new PolygonHelper();
?>
<?= $this->Html->css('/lib/font-awesome/css/font-awesome.css'); ?>
<div class="shadowed-bottom">   
    <div class="social-div-custom">
        <h3 class="form-title form-title-first"><i class="icon-terminal"></i> Đăng nhập qua MXH Facebook</h3> 
        <!-- <div class="form-group">
            <div class="alert alert-info alert-dismissable">
                <i class="icon-lightbulb"></i> <strong>Mẹo!</strong> Bạn có thể lựa chọn một hay nhiều hình thức đăng nhập.
            </div>
        </div> -->
        <div class="row">
            <?= $this->Form->create(false); ?>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Public  Key</label>
                    <input plk type="text" class="form-control" placeholder="Facebook APP ID" value="<?= $polyHelper->readConfig('FacebookLogin.PublicKey','loginconfig')?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Secret Key</label>
                    <input pvk type="password" class="form-control" placeholder="Secret Key" value="<?= $polyHelper->readConfig('FacebookLogin.SecretKey','loginconfig')?>" autocomplete="off">
                </div>
            </div>
            <?= $this->Form->end(); ?>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-default" btnSave><i class="icon-save"></i> Lưu cài đặt</button>
                <button type="button" class="btn btn-default pull-right" btnSave><i class="icon-link"></i> Console</button>
                <input type="text" value="FacebookLogin" hidden>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-default" btnShow><i class="icon-eye-open"></i> Hiện</button>
                <button type="button" class="btn btn-default" btnCopy><i class="icon-copy"></i> Sao chép</button>
            </div>
        </div>
    </div>
    <br/>
    <div class="social-div-custom">
        <h3 class="form-title form-title-first"><i class="icon-terminal"></i> Đăng nhập qua MXH Google+</h3>
        <div class="row">
            <?= $this->Form->create(false); ?>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Public  Key</label>
                    <input plk type="text" class="form-control" placeholder="Facebook APP ID" value="<?= $polyHelper->readConfig('GoogleLogin.PublicKey','loginconfig')?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Secret Key</label>
                    <input pvk type="password" class="form-control" placeholder="Secret Key" value="<?= $polyHelper->readConfig('GoogleLogin.SecretKey','loginconfig')?>" autocomplete="off">
                </div>
            </div>
            <?= $this->Form->end(); ?>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-default" btnSave><i class="icon-save"></i> Lưu cài đặt</button>
                <button type="button" class="btn btn-default pull-right" btnSave><i class="icon-link"></i> Console</button>
                <input type="text" value="GoogleLogin" hidden>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-default" btnShow><i class="icon-eye-open"></i> Hiện</button>
                <button type="button" class="btn btn-default" btnCopy><i class="icon-copy"></i> Sao chép</button>
            </div>
        </div>
    </div><br/>
</div>   
<?php  
    $setConfigLogin = $this->Url->build(['prefix'=>'Admin','controller'=>'Home','action'=>'setconfiglogin']);  
?>
<script>

    $(document).ready(function() {  

        $('button[btnSave]').on('click',function(){
            let data = getInit(this);
            let curButton = $(this);
            curButton.html('<i class="fa fa-refresh fa-spin"></i> Vui lòng đợi');

            $.ajax({
                url: '<?= $setConfigLogin ?>',
                data: {target:data.target,publickey:data.publicKey.val(),secretKey:data.secretKey.val()},
                type: 'post',
                success: function(res){
                    if(res.code == 200){
                        curButton.html('<i class="icon-save"></i> Lưu cài đặt');
                    }                
                },
                error:function(){
                    curButton.html('<i class="fa fa-undo"></i> Thử lại');
                }
            });
        });

        $('button[btnShow]').on('click',function(){
            let data = getInit(this);
            let curButton = $(this);
            
            if(data.secretKey.attr('type') == 'password'){
                data.secretKey.attr('type','text');
                curButton.html('<i class="icon-eye-close"></i> Ẩn');
            }else{
                data.secretKey.attr('type','password');
                curButton.html('<i class="icon-eye-open"></i> Hiện');
            }
        });

        $('button[btnCopy]').on('click',function(){
            let data = getInit(this);
            data.secretKey.select();
            document.execCommand("Copy");
        });
    });  

    function getInit(el){
        let parentDiv = $(el).closest('.social-div-custom');
        let publicKey = parentDiv.find('input[plk]');
        let secretKey = parentDiv.find('input[pvk]');
        let hidden = parentDiv.find('input[hidden]').val();
        return {parent:parentDiv,publicKey:publicKey,secretKey:secretKey,target:hidden};
    }
</script>