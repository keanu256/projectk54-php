<style>
    .cart-count-number{
        color: white;
        position: relative;
        width: 30px;
        top: -20px;
        font-size: 10px;
        text-align: center;
        font-family: "Montserrat";
        /* left: calc(50% - 60px); */
        left: calc(50% - 15px) ; 
    }
</style>
<nav id="main-menu">
    <img class="pull-nav" src="homepage/images/icons/pull-icon.png" alt="pull-icon">
    <ul>	
        <li>
            <?= $this->Html->link('Trang chủ',[
                'controller' => 'Pages',
                'action' => 'index'
            ],[
                'escape' => false         
            ]) ?>
        </li>	
        <li>
            <a href="#" class="submenu font-menu-style">Danh mục</a>
            <ul class="submenu-small">
                <li>
                    <a href="register-login.html">Register / Login</a>
                </li>
                <li>
                    <a href="profile.html">Profile Page</a>
                </li>
            </ul>
        </li>
        <li><a href="blog.html">Gian hàng</a></li>
        <li><a href="contact.html">Khuyến mãi</a></li>
        <li><a href="contact.html">HOT</a></li>
        <li><a href="contact.html">Tin tức</a></li>
        <li><a href="contact.html">đã xem</a></li>
        <li><a href="contact.html">Giỏ hàng</a>
            <div class="cart-count-number">123</div>
        </li>
    </ul>
</nav>