<div class="social-div-custom">
    <h3 class="form-title form-title-first"><i class="icon-terminal"></i> #</h3>
    <div class="row">
        <?= $this->Form->create(false); ?>
        <div class="col-md-6">
            <div class="form-group">
                <label>Public  Key</label>
                <input plk type="text" class="form-control" placeholder="Facebook APP ID" value="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Secret Key</label>
                <input pvk type="password" class="form-control" placeholder="Secret Key" value="" autocomplete="off">
            </div>
        </div>
        <?= $this->Form->end(); ?>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button type="submit" class="btn btn-default" btnSave><i class="icon-save"></i> Lưu cài đặt</button>
            <button type="submit" class="btn btn-default pull-right" btnSave><i class="icon-link"></i> Console</button>
            <input type="text" value="GoogleLogin" hidden>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-default" btnShow><i class="icon-eye-open"></i> Hiện</button>
            <button type="submit" class="btn btn-default" btnCopy><i class="icon-copy"></i> Sao chép</button>
            <button type="submit" class="btn btn-danger pull-right" btnDelete><i class="fa fa-trash-o"></i> Xóa</button>
        </div>
    </div>
</div><br/>

