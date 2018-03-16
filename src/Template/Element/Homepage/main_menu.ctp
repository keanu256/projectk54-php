<nav id="main-menu">
    <img class="pull-nav" src="homepage/images/icons/pull-icon.png" alt="pull-icon">
    <ul>
        <li>
            <?= $this->Html->link('<i class="fa fa-home" aria-hidden="true"></i> Trang chủ',[
                'controller' => 'Pages',
                'action' => 'index'
            ],[
                'escape' => false         
            ]) ?>
        </li>	
        <li>
            <a href="#" class="submenu font-menu-style"><i class="fa fa-list" aria-hidden="true"></i> Danh mục</a>
            <ul class="submenu-small">
                <li>
                    <a href="register-login.html">Register / Login</a>
                </li>
                <li>
                    <a href="profile.html">Profile Page</a>
                </li>
            </ul>
        </li>
        <li><a href="blog.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Gian hàng</a></li>
        <li><a href="contact.html"><i class="fa fa-bell-o" aria-hidden="true"></i> Khuyến mãi</a></li>
        <li><a href="contact.html"><i class="fa fa-fire" aria-hidden="true"></i> HOT</a></li>
        <li><a href="contact.html"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin tức</a></li>
        <li><a href="contact.html"><i class="fa fa-eye" aria-hidden="true"></i> S.P đã xem</a></li>
    </ul>
</nav>