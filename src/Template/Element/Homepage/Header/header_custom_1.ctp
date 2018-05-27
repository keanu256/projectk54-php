<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}" style="min-height: 141px;">
    <div class="header-body">
        <div class="header-container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <div class="header-logo border-left-0 px-4">
                        <a href="<?= $this->Url->build(['controller'=>'Pages','action'=>'index'])?>">
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
                                        <a href="#home" onclick="backToHomePage()" data-hash class="dropdown-item dropdown-toggle active">
                                            Về trang chủ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#account" data-hash data-hash-offset="70" class="dropdown-item">Tài Khoản</a>
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
                        <a href="<?= $this->Url->build(['controller'=>'Users','action' => 'login'])?>" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1">
                            <span class="wrap">
                                <span>ĐĂNG KÝ NGAY</span>
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