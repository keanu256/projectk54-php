<?php 
    $session = $this->request->session();
?>
<style>
    span a:hover{
        text-decoration: none !important;
        color: -webkit-linear-gradient(#9f814a,#7e6234);
    }
    .login span a{
        color: white;
    }

</style>
<header>
    <div id="header-top-wrap">
        <section id="header-top" class="clearfix">
            <p class="contact">
                Nếu bạn có bất kỳ yêu cầu nào hãy cho chúng tôi biết
                <a href="mailto:admin@polygonvietnam.com">admin@polygonvietnam.com</a>
            </p>
            <p class="login">
                Xin chào, 
                <span style="color:cyan">
                    <?= $this->Html->image('/homepage/badges/bronze_s.png',[
                            'height' => 9,
                            'width' => 9
                        ]) ?> 
                    <?= $session->read('Auth.User.fullname') ?>                       
                </span>                   
                <span>
                    <?= $this->Html->link('<i class="fa fa-desktop" aria-hidden="true"></i> Trang quản lý',
                        [
                            'controller'=>'Dashboard',
                            'action'=>'index'
                        ],[
                            'escape' => false
                        ]
                    ) ?> 
                </span> 
                <span class="user_logout">
                    <?= $this->Html->link('<i class="fa fa-power-off"></i> Thoát',
                        [
                            'controller'=>'Users',
                            'action'=>'logout'
                        ],[
                            'escape' => false
                        ]
                    ) ?> 
                </span>  
            </p>
        </section>
    </div>
</header>

<style>
    .login span:nth-child(n+2):before{
        content: '|';
    }
</style>
