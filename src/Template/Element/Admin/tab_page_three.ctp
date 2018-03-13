<?php 
use App\Classes\PolygonHelper;
    $polyHelper = new PolygonHelper();
?>
<?= $this->Html->css('/lib/font-awesome/css/font-awesome.css'); ?>
<div class="shadowed-bottom">      
    <div class="social-div-custom">
        <h3 class="form-title form-title-first" title><i class="icon-terminal"></i> Socket Server</h3> 
        <div class="form-group">
            <div class="alert alert-warning alert-dismissable">
                <i class="icon-lightbulb"></i> <strong>Cảnh báo!</strong> Nên tiến hành thay đổi khi bảo trì hệ thống.
            </div>
        </div>
        <?php for($i = 1; $i <= 5; $i++): ?>
        <div class="row">
            <?= $this->Form->create(false); ?>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Name</label>
                    <input plk type="text" class="form-control" placeholder="Socket name" value="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Host</label>
                    <input plk type="text" class="form-control" placeholder="Domain hoặc IP" value="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Port</label>
                    <input pvk type="text" class="form-control" placeholder="Socket port" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-default col-md-12" btnSKSave style="margin-top:25px;"><i class="icon-save"></i> Lưu cài đặt</button>
                <input type="text" value="<?= 'socket_'.$i ?>" hidden>
            </div>
            <?= $this->Form->end(); ?>
        </div>
        <?php endfor; ?>
    </div>
    <br/> 
</div>   

<script>

    $(document).ready(function() {  

        $('button[btnSKSave]').on('click',function(){
            let data = getInit(this);
            let curButton = $(this);
            curButton.html('<i class="fa fa-refresh fa-spin"></i> Vui lòng đợi');

            
        });

    });  

</script>