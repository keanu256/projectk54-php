<?php 
    $session = $this->request->session();
?>
<header>
    <div id="header-top-wrap">
        <section id="header-top" class="clearfix">
            <p class="contact">
                Questions? Do you need help? Send us an email to: 
                <a href="mailto:admin@polygonvietnam.com">admin@polygonvietnam.com</a>
            </p>
    
            <p class="login">
                Xin chào, 
                <span style="color:#f1556c">
                    <?= $session->read('Auth.User.fullname') ?>                    
                </span>                   
                <span>
                    Quản lý tài khoản
                </span> 
                <span>
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
