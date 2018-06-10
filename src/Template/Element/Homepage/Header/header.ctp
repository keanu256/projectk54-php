
<?php 
    $isPageIndex = strtolower($this->request->getParam('controller')) == 'pages' 
                    && strtolower($this->request->getParam('action')) == 'index';
?>

<header id="header" class="header-with-borders header-with-borders-sticky" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '<?= $isPageIndex ? '#header': '#page-header' ?>'}">
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
                                        <a href="<?= $isPageIndex ? '#home': '#' ?>" <?= !$isPageIndex ? 'onclick="goToPage(0);"': '' ?> data-hash class="dropdown-item dropdown-toggle active">
                                            Trang chủ
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-mega">
                                        <a href="<?= $isPageIndex ? '#aboutus': '#' ?>" <?= !$isPageIndex ? 'onclick="goToPage(3);"': '' ?> data-hash data-hash-offset="70" class="dropdown-item dropdown-toggle">Giới thiệu</a>
                                        <?= $this->Element('Homepage/MegaMenu/mega_gioithieu')?>
                                    </li>
                                    <li class="dropdown dropdown-mega">
                                        <a href="<?= $isPageIndex ? '#services': '#' ?>" <?= !$isPageIndex ? 'onclick="goToPage(4);"': '' ?> data-hash data-hash-offset="70" class="dropdown-item dropdown-toggle">Dịch vụ</a>
                                        <?= $this->Element('Homepage/MegaMenu/mega_dichvu')?>
                                    </li>
                                    <li class="dropdown dropdown-mega dropdown-mega-style-2" >
                                        <a href="<?= $isPageIndex ? '#portfolio': '#' ?>" <?= !$isPageIndex ? 'onclick="goToPage(5);"': '' ?> data-hash data-hash-offset="70" class="dropdown-item dropdown-toggle">Kho giao diện</a>
                                        <?= $this->Element('Homepage/MegaMenu/mega_khogiaodien')?>
                                    </li>
                                    <li class="dropdown dropdown-mega">
                                        <a href="<?= $isPageIndex ? '#figure': '#' ?>" <?= !$isPageIndex ? 'onclick="goToPage(6);"': '' ?> data-hash data-hash-offset="70" class="dropdown-item dropdown-toggle">Kho ứng dụng</a>
                                        <?= $this->Element('Homepage/MegaMenu/mega_khoungdung')?>
                                    </li>
                                    <li class="dropdown dropdown-mega">
                                        <a href="<?= $isPageIndex ? '#blog': '#' ?>" <?= !$isPageIndex ? 'onclick="goToPage(7);"': '' ?> data-hash data-hash-offset="70" class="dropdown-item dropdown-toggle">Tin tức</a>
                                        <?= $this->Element('Homepage/MegaMenu/mega_tintuc')?>
                                    </li>
                                    <li class="dropdown dropdown-mega">
                                        <a href="#footer" data-hash data-hash-offset="70" class="dropdown-item dropdown-toggle">liên hệ</a>
                                        <?= $this->Element('Homepage/MegaMenu/mega_lienhe')?>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-button d-none d-sm-flex border-right-0 border-left-0 pr-2 pr-lg-4">
                        <?php if(!empty($this->request->session()->read('Auth.User.id'))): ?>
                            <a href="<?= $this->Url->build(['controller'=>'Users','action'=>'profile'])?>" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1">
                                <span class="wrap">
                                    <span>Xin chào, <?= $this->request->session()->read('Auth.User.username')?></span>
                                    <i class="fas fa-cogs"></i>
                                </span>
                            </a>                        
                        <?php else: ?>
                            <a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'register'])?>" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1">
                                <span class="wrap">
                                    <span>ĐĂNG KÝ NGAY</span>
                                    <i class="fas fa-registered"></i>
                                </span>
                            </a>
                        <?php endif; ?>
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