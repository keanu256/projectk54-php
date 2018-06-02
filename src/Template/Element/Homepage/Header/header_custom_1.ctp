<header id="header" class="header-with-borders header-with-borders-sticky" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#page-header' }">
    <div class="header-body">
        <div class="header-container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <div class="header-logo border-left-0 px-4">
                        <a href="<?= $this->Url->build(['controller'=>'Pages','action'=>'index','home'])?>">
                            <?= $this->Html->image('/homepage/img/logo-small.png',[
                                "alt"=>"Polygon" ,
                                "width"=>"117" ,
                                "height"=>"54" ,
                                "data-change-src"=>"/homepage/img/logo-small.png"
                            ]) ?>
                        </a>
                    </div>
                    <div class="header-nav justify-content-lg-start ml-3">
                        <div class="header-nav-main header-nav-main-uppercase header-nav-main-effect-1 header-nav-main-sub-effect-1">
                            <nav class="collapse">
                                <ul class="nav flex-column flex-lg-row" id="mainNav">
                                    <li class="dropdown">
                                        <a href="#home" onclick="goToPage(0)" data-hash class="dropdown-item dropdown-toggle active">
                                            Về trang chủ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="goToPage(1)" data-hash data-hash-offset="70" class="dropdown-item">Đăng ký</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="goToPage(2)" data-hash data-hash-offset="70" class="dropdown-item">Đăng nhập</a>
                                    </li>
                                    <li>
                                        <a href="#footer" data-hash data-hash-offset="70" class="dropdown-item">liên hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-button d-none d-sm-flex border-right-0 border-left-0 pr-2 pr-lg-4">
                        <a href="#" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1" data-toggle="modal" data-target="#sendMailActiveAccount">
                            <span class="wrap">
                                <span>KÍCH HOẠT TÀI KHOẢN</span>
                                <i class="fas fa-registered"></i>
                            </span>
                        </a>
                    </div>
                    <ul class="header-social-icons social-icons social-icons-transparent border-right-0 d-none d-xl-flex text-3 px-4">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                    </ul>
                    <button class="header-btn-collapse-nav mx-3" data-toggle="collapse" data-target=".header-nav-main nav">
                        <span class="hamburguer">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="close">
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="modal fade" id="sendMailActiveAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModal4Label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog text-left" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nhập EMail đã đăng ký</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                
                <form class="contact-form form-style-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nhập địa chỉ E-mail">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Đóng</button>
                <button type="button" onclick="activeAccount()" class="btn btn-primary">Xác nhận</button>
            </div>
        </div>
    </div>
</div>