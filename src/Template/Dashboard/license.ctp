<?php 
use Cake\I18n\Time;
?>
<style>
    #license_segment, label{
        font-family: 'Roboto';
    }
    .con-hsd{
        color: green;
    }
    .het-hsd{
        color: red;
    }
    .license_img{
        max-width: 100%;
        width: 150px;
        height: 150px;
    }

    #license_segment .card-title{
        font-family: 'Arimo';
        font-weight: bold;
        color: #02c0ce;
    }

    #license_segment .f-bo{
        font-weight: bold;
    }
</style>
<div id="license_segment">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group pull-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Licenses</li>
                    </ol>
                </div>
                <h4 class="page-title">Giấy phép</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <button type="button" class="btn btn-custom btn-rounded w-md waves-effect waves-light mb-4">
                <i class="mdi mdi-plus-circle"></i> Mua mới
            </button>
            <button type="button" class="ml-3 btn btn-custom btn-rounded w-md waves-effect waves-light mb-4">
                <i class="mdi mdi mdi-flash"></i> Gia hạn nhanh
            </button>
        </div>
        <div class="col-sm-8">
            <div class="project-sort pull-right">
                <div class="project-sort-item">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="phase-select">Loại :</label>
                            <select class="form-control ml-2 form-control-sm" id="phase-select">
                                <option>All Projects(6)</option>
                                <option>Complated</option>
                                <option>Progress</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sort-select">Sắp xếp :</label>
                            <select class="form-control ml-2 form-control-sm" id="sort-select">
                                <option>Date</option>
                                <option>Name</option>
                                <option>End date</option>
                                <option>Start Date</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Print data -->
    <div class="row">
        <?php foreach ($licenses as $key => $value): ?>
        <?php 
            $sec = floor(($value->expired->getTimestamp() - Time::now()->getTimestamp())/86400);
        ?>
        <div class="col-md-4">
            <div class="card m-b-30 card-body" license-id="<?= $value->id ?>" license-name="<?= $value->LicenseName['name'] ?>">
                <h5 class="card-title"><i class="fa fa-drivers-license-o"></i> <?= $value->LicenseName['name'] ?></h5>
                <p class="card-text"><?= $value->LicenseName['description'] ?></p>
                <div class="row">
                    <div class="col-md-4">
                        <?= $this->Html->image('flaticon/svg/investment.svg',['class'=>'license_img']) ?>
                    </div>
                    <div class="col-md-8">
                        <p class="card-text"><span class="f-bo">Ngày khởi tạo: </span><?= $value->created->i18nFormat('dd-MM-yyyy HH:mm:ss') ?></p>
                        <p class="card-text"><span class="f-bo">Ngày khởi tạo: </span><?= $value->created->i18nFormat('dd-MM-yyyy HH:mm:ss') ?></p>
                        <p class="card-text"><span class="f-bo">Ngày tạo mới: </span><?= $value->updated->i18nFormat('dd-MM-yyyy HH:mm:ss') ?></p>
                        <p class="card-text"><span class="f-bo">Ngày hết hạn: </span><?= $value->expired->i18nFormat('dd-MM-yyyy HH:mm:ss') ?>
                        <span><?= ($sec >= 0)? '<span class="con-hsd">(Còn '.$sec.' ngày)</span>': '<span class="het-hsd">(Đã hết hạn)</span>'?></span>
                        </p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-10">
                                <a href="#" class="btn btn-custom waves-effect waves-light col-md-12"><i class="fa fa-history"></i> Xem lịch sử thanh toán</a>
                            </div>
                            <div class="col-md-2 mt-2 pl-md-0 mt-md-0">
                                <a href="#" class="btn btn-danger waves-effect waves-light col-md-12" data-animation="blur" data-plugin="custommodal" data-overlayspeed="100" data-overlaycolor="#36404a"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Modal -->
<?= $this->Element('Sector/modal_dialog',['modal_id' => 'modal-dialog']) ?>
<!-- End Modal -->
<?= $this->Html->css('/lib/custombox/css/custombox.min.css') ?>
<?= $this->Html->script('/lib/custombox/js/custombox.min.js') ?>
<?= $this->Html->script('/lib/custombox/js/custombox.legacy.min.js') ?>
<script>
    $(function(){
        $(document).on('click touchstart','#license_segment a.btn-custom',function(ev){
            var license_id = $(this).closest('.card.card-body').attr('license-id');
            var license_name = $(this).closest('.card.card-body').attr('license-name');
            $('.custom-modal-title').html('<i class="fa fa-history"></i> '+license_name + " | Lịch sử thanh toán");    

            var modal = new Custombox.modal({
                overlay : {
                    active: true,
                    color: '#36404a',
                    opacity: .6,
                    close: false,
                },
                content : {
                    target: '#modal-dialog',
                    effect: 'blur',
                },loader : {
                    active: false
                }
            }).open();

            $.ajax({
                url: 'home/',
                data: {id:license_id},
                method: 'post',
                success: function(res){

                }
            });
            ev.preventDefault();
        });

        $(document).on('click touchstart','#license_segment a.btn-danger',function(){
            alert(2);
        });
    })
</script>