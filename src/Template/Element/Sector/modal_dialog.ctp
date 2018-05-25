<?= $this->Html->css('/lib/SpinKit/spinkit') ?>
<div id="<?= $modal_id ?>" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>×</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Modal title</h4>
    <div class="custom-modal-text">
        <div class="sk-wave">
            <div class="sk-rect sk-rect1"></div>
            <div class="sk-rect sk-rect2"></div>
            <div class="sk-rect sk-rect3"></div>
            <div class="sk-rect sk-rect4"></div>
            <div class="sk-rect sk-rect5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align:center;color:#02c0ce;font-size:18px;">
                Đang xử lý dữ liệu ...
            </div>
        </div>
    </div>
</div>