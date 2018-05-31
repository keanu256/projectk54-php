<?= $this->Element('Homepage/Header/header_custom_1')?>
<section class="section page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="active">CỔNG THÔNG TIN & QUẢN LÝ TÀI KHOẢN</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="font-weight-bold">Polygon Portal</h1>

            </div>
        </div>
    </div>
</section>
<section id="account" class="section">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 pt-3">
                <span class="top-sub-title">THÀNH VIÊN MỚI</span>
                <h2 class="font-weight-bold text-4 mb-1">Bạn chưa có tài khoản? Hãy đăng ký ngay bây giờ!</h2>
                <p class="lead mb-4">Tài khoản dùng chung cho toàn bộ dịch vụ & ứng dụng trên hệ thống <strong>Polygon Việt Nam</strong>.</p>
                <form id="shopLoginRegister" action="#" method="post">
                    <div class="form-row">
                        <div class="form-group col-lg-6 required">
                            <label class="text-color-dark" for="shopLoginRegisterName">HỌ TÊN:</label>
                            <input type="text" value="" class="form-control bg-light-5 border-0 rounded" name="name" required="">
                        </div>
                        <div class="form-group col-lg-6 required">
                            <label class="text-color-dark" for="shopLoginRegisterEmail">ĐỊA CHỈ E-MAIL:</label>
                            <input type="email" value="" class="form-control bg-light-5 border-0 rounded" name="email" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6 required">
                            <label class="text-color-dark" for="shopLoginRegisterUsername">TÀI KHOẢN:</label>
                            <input type="text" value="" class="form-control bg-light-5 border-0 rounded" name="username" required="">
                        </div>
                        <div class="form-group col-lg-6 ">
                            <label class="text-color-dark" for="shopLoginRegisterPhone">ĐIỆN THOẠI:</label>
                            <input type="email" value="" class="form-control bg-light-5 border-0 rounded" name="phone" required="">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-group col-lg-6 required">
                            <label class="text-color-dark" for="shopLoginRegisterPassword">MẬT KHẨU:</label>
                            <input type="password" value="" class="form-control bg-light-5 border-0 rounded" name="repwd1" required="">
                        </div>
                        <div class="form-group col-lg-6 required">
                            <label class="text-color-dark" for="shopLoginRegisterPassword2">NHẬP LẠI MẬT KHẨU:</label>
                            <input type="password" value="" class="form-control bg-light-5 border-0 rounded" name="repwd2" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-inline col-lg-6" id="captcha_div"></div>
                        <div class="form-inline col-lg-6 mt-3 mt-md-0">
                            <input type="text" value="" class="form-control bg-light-5 border-0 rounded col-5" name="captcha_code" id="captcha_input_text" required="">
                            <button type="button" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold text-right col-6 offset-1" id="btn_dangky">ĐĂNG KÝ NGAY</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


