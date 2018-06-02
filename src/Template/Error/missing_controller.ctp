<?php 
    $this->layout = 'homepage';
?>
<?= $this->Element('Homepage/Header/header')?>
<section class="section bg-light-5" id="page-header">
    <img src="/homepage/img/others/lamp-holder.png" class="img-fluid lamp-style-2 position-absolute transform-center-x appear-animation" data-appear-animation="fadeIn" alt="" />
    <div class="container">
        <div class="row justify-content-center text-center py-5 mt-5 mb-3">
            <div class="col-md-8 col-lg-6 pt-4 mt-5">
                <h1 class="font-weight-bold text-6 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><strong class="d-block font-weight-bold text-20">404!</strong>KHÔNG TÌM THẤY</h1>
                <p class="mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Trang bạn yêu cầu không có trên hệ thống hoặc đã bị xóa. Bạn vui lòng truy trang khác hoặc quay về trang chủ. </p>
                <form id="404ErrorSearch" class="mx-auto max-width-320 mb-5 appear-animation" action="" method="get" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="input-group input-group-style-2">
                        <input type="text" class="form-control line-height-1 bg-light border-0" name="s" id="s" placeholder="Nhập nội dung tìm kiếm..." required="">
                        <span class="input-group-btn">
                            <button class="btn btn-light align-items-center" type="submit"><i class="fas fa-search text-color-primary"></i></button>
                        </span>
                    </div>
                </form>
                <a href="<?= $this->Url->build(['controller'=>'Pages','action'=>'index','home']) ?>" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"><i class="fas fa-angle-left mr-3 text-3"></i> QUAY VỀ TRANG CHỦ</a>
            </div>
        </div>
    </div>
</section>