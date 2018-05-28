<?= $this->Element('Homepage/Header/header_custom_1')?>
<section class="section page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="font-weight-bold">Login</h1>

            </div>
        </div>
    </div>
</section>
<section id="account" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5 col-xl-4 mb-5 mb-md-0">
                <div class="bg-primary rounded p-5">
                    <span class="top-sub-title text-color-light-2">ĐÃ CÓ TÀI KHOẢN</span>
                    <h2 class="text-color-light font-weight-bold text-4 mb-4">Đăng Nhập</h2>

                    <form action="#" id="shopLoginSignIn" method="post">
                        <div class="form-row">
                            <div class="form-group col mb-2">
                                <label class="text-color-light-2" for="shopLoginSignInEmail">TÀI KHOẢN / E-MAIL</label>
                                <input type="email" value="" maxlength="100" class="form-control bg-light border-0 rounded text-1" name="email" id="shopLoginSignInEmail" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="text-color-light-2" for="shopLoginSignInPassword">MẬT KHẨU</label>
                                <input type="password" value="" class="form-control bg-light border-0 rounded text-1" name="password" id="shopLoginSignInPassword" required="">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col">
                                <div class="form-check checkbox-custom checkbox-custom-transparent checkbox-default">
                                    <input class="form-check-input" type="checkbox" id="shopLoginSignInRemember">
                                    <label class="form-check-label text-color-light-2" for="shopLoginSignInRemember">
                                        Lưu tài khoản
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col text-right">
                                <a href="#" class="forgot-pw text-color-light-2 d-block">Quên mật khẩu</a>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col text-right">
                                <button type="submit" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">ĐĂNG NHẬP</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-8 pt-3">
                <span class="top-sub-title">THÀNH VIÊN MỚI</span>
                <h2 class="font-weight-bold text-4 mb-1">Bạn chưa có tài khoản? Hãy đăng ký ngay bây giờ!</h2>
                <p class="lead mb-4">Tài khoản dùng chung cho toàn bộ dịch vụ & ứng dụng trên hệ thống <strong>Polygon Việt Nam</strong>.</p>
                <form id="shopLoginRegister" action="#" method="post">
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label class="text-color-dark" for="shopLoginRegisterName">HỌ TÊN:</label>
                            <input type="text" value="" class="form-control bg-light-5 border-0 rounded" name="name" id="shopLoginRegisterName" required="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="text-color-dark" for="shopLoginRegisterEmail">ĐỊA CHỈ E-MAIL:</label>
                            <input type="email" value="" class="form-control bg-light-5 border-0 rounded" name="email" id="shopLoginRegisterEmail" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label class="text-color-dark" for="shopLoginRegisterUsername">TÀI KHOẢN:</label>
                            <input type="text" value="" class="form-control bg-light-5 border-0 rounded" name="username" id="shopLoginRegisterUsername" required="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="text-color-dark" for="shopLoginRegisterPhone">ĐIỆN THOẠI:</label>
                            <input type="email" value="" class="form-control bg-light-5 border-0 rounded" name="phone" id="shopLoginRegisterPhone" required="">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-group col-lg-6">
                            <label class="text-color-dark" for="shopLoginRegisterPassword">MẬT KHẨU:</label>
                            <input type="password" value="" class="form-control bg-light-5 border-0 rounded" name="username" id="shopLoginRegisterPassword" required="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="text-color-dark" for="shopLoginRegisterPassword2">NHẬP LẠI MẬT KHẨU:</label>
                            <input type="password" value="" class="form-control bg-light-5 border-0 rounded" name="password" id="shopLoginRegisterPassword2" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-inline col-lg-6" id="captcha_div"></div>
                        <div class="form-inline col-lg-6 mt-3 mt-md-0">
                            <input type="text" value="" ata-msg-required="Hãy cho chúng tôi biết tên của bạn." class="form-control bg-light-5 border-0 rounded col-5" name="password" id="captcha_input_text" required="">
                            <button type="submit" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold text-right col-6 offset-1">ĐĂNG KÝ NGAY</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <button type="button" onclick="bigdata()">Test Async</button>
</section>
<script>
    function bigdata(){
        $.ajax({
            url: '<?= $this->Url->build(['controller'=>'Pages','action' => 'bigdata1']) ?>',
            type: 'post',
            success: function(res){
                console.log(res);
            }
        })
    }
</script>

