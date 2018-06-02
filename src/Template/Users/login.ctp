<?= $this->Element('Homepage/Header/header_custom_1')?>
<section class="section page-header mb-0" id="page-header">
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
            <div class="col-8 offset-2 mb-5 mb-md-0">
                <div class="bg-primary rounded p-5">
                    <span class="top-sub-title text-color-light-2">ĐÃ CÓ TÀI KHOẢN</span>
                    <h2 class="text-color-light font-weight-bold text-4 mb-4">Đăng Nhập</h2>

                    <form action="#" id="shopLoginSignIn" method="post">
                        <div class="form-row">
                            <div class="form-group col mb-2">
                                <label class="text-color-light-2" for="SignInAccount">TÀI KHOẢN / E-MAIL</label>
                                <input type="text" value="" maxlength="100" class="form-control bg-light border-0 rounded text-1" name="username" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="text-color-light-2" for="SignInPassword">MẬT KHẨU</label>
                                <input type="password" value="" class="form-control bg-light border-0 rounded text-1" name="pwd" required="">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col">
                                <div class="form-check checkbox-custom checkbox-custom-transparent checkbox-default">
                                    <input class="form-check-input" name="rememberme" type="checkbox" id="SignInRemember">
                                    <label class="form-check-label text-color-light-2" for="SignInRemember">
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
                                <button type="button" id="btn_dangnhap" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">ĐĂNG NHẬP</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


