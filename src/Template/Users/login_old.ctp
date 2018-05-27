<?php
use App\Classes\PolygonHelper;
$polyHelper = new PolygonHelper();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->Html->css('/cpanelpage/assets/css/fullcalendar.css') ?>
<?= $this->Html->css('/cpanelpage/assets/css/datatables/datatables.css') ?>
<?= $this->Html->css('/cpanelpage/assets/css/datatables/bootstrap.datatables.css') ?>
<?= $this->Html->css('/cpanelpage/assets/scss/chosen.css') ?>
<?= $this->Html->css('/cpanelpage/assets/scss/font-awesome/font-awesome.css') ?>
<?= $this->Html->css('/cpanelpage/assets/css/app.css') ?>
<?= $this->Html->css('/lib/font-awesome/css/font-awesome.css') ?>
<?= $this->Html->css('/cpanelpage/gg-fonts.css') ?>

  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Polygon Portal | Đăng Nhập</title>

</head>

<body>
<style>
  #pllogin:focus, #fblogin:focus, #gglogin:focus, #qrlogin:focus{
    outline:none;
  }
  .nbrl{
    border-top-left-radius : 0px !important;
    border-bottom-left-radius : 0px !important;
  }
  .nbrr{
    border-top-right-radius : 0px !important;
    border-bottom-right-radius : 0px !important;
  }
  .text-login-privacy{
    border-radius:5px;
    height: 150px;
    padding: 5px;
    resize: none; 
  }
</style>
<div class="all-wrapper no-menu-wrapper">
    <div class="login-logo-w">
        <a href="#" class="logo">
            <i class="icon-lemon"></i>
            <span>Polygon Portal</span>
        </a>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="content-wrapper bold-shadow">
                <div class="content-inner">
                    <div class="main-content main-content-grey-gradient no-page-header">
                        <div class="main-content-inner" style="text-align:center;">                           
                            <form action="" role="form">
                                <center>
                                    <h3 class="form-title form-title-first">Đăng nhập hệ thống</h3>
                                </center>  
                                <div id="login-custom-pl" style="display:none;">
                                  <div class="form-group">
                                    <div id="error-div"></div>
                                    <input type="text" class="form-control" placeholder="Tài khoản" id="puser" style="text-align:center;" autocomplete="off">
                                  </div>
                                  <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Mật khẩu" id="pcode" style="text-align:center;" autocomplete="off">
                                  </div>
                                  <div class="row" style="padding: 0px 15px">
                                  <button type="button" id='pllogin-confirm' class='btn btn-info btn-lg col-sm-8 nbrr'>Đăng Nhập</button>
                                  <button type="button" id='pllogin-cancel' class='btn btn-danger btn-lg col-sm-4 nbrl'>Hủy</button> 
                                  </div>
                                </div> 
                                <div id="login-custom-qr" style="display:none;">
                                  <canvas id="qr-image" style="margin-bottom:20px;"></canvas>
                                  <div class="row" style="padding: 0px 15px">
                                  <button type="button" id='qrlogin-refresh' class='btn btn-info btn-lg col-sm-8 nbrr'>Mã QR mới</button>
                                  <button type="button" id='qrlogin-cancel' class='btn btn-danger btn-lg col-sm-4 nbrl'>Hủy</button> 
                                  </div>
                                </div> 
                                <div id="login-custom-fb" style="display:none;">
                                  <textarea class="col-md-12 text-login-privacy" readonly>
                                    <font color="red">sadasd</font>
                                  </textarea>
                                  <div class="row" style="padding: 20px 15px 0px 15px">
                                  <button type="button" id='fblogin-confirm' class='btn btn-info btn-lg col-sm-8 nbrr'>Đồng ý</button>
                                  <button type="button" id='fblogin-cancel' class='btn btn-danger btn-lg col-sm-4 nbrl'>Hủy</button> 
                                  </div>
                                </div> 
                                <div id="login-custom-gg" style="display:none;">
                                  <textarea class="col-md-12 text-login-privacy" readonly>
                                    <font color="red">sadasd</font>
                                  </textarea>
                                  <div class="row" style="padding: 20px 15px 0px 15px">
                                  <button type="button" id='gglogin-confirm' class='btn btn-info btn-lg col-sm-8 nbrr'>Đồng ý</button>
                                  <button type="button" id='gglogin-cancel' class='btn btn-danger btn-lg col-sm-4 nbrl'>Hủy</button> 
                                  </div>
                                </div> 
                                <div id="login-custom-bar" >  
                                <?php if($polyHelper->checkLogin('MainLogin')): ?>
                                  <button type="button" id='pllogin' class='btn btn-info btn-lg col-sm-12' style="border-radius:50%;width:100px;height:100px;"><i class="icon-lemon fa-3x" aria-hidden="true"></i></button> 
                                <?php endif; ?> 
    
                                <?php if($polyHelper->checkLogin('FacebookLogin')): ?>
                                  <button type="button" id='fblogin' class='btn btn-primary btn-lg col-sm-12' style="margin-left:10px;border-radius:50%;width:100px;height:100px;"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></button>
                                <?php endif; ?> 

                                <?php if($polyHelper->checkLogin('GoogleLogin')): ?>
                                  <button type="button" id='gglogin' class='btn btn-danger btn-lg col-sm-12' style="margin-left:10px;border-radius:50%;width:100px;height:100px;"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></button>
                                <?php endif; ?> 

                                <?php if($polyHelper->checkLogin('QRLogin')): ?>
                                  <button type="button" id='qrlogin' class='btn btn-success btn-lg col-sm-12' style="margin-left:10px;border-radius:50%;width:100px;height:100px;"><i class="fa fa-qrcode fa-3x" aria-hidden="true"></i></button>
                                <?php endif; ?> 
                                </div>      
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    $plLoginURL = $this->Url->build(['controller'=>'Users','action'=>'polygonLogin']);
?>

<?= $this->Html->script('/cpanelpage/jquery.min.js') ?>
<?= $this->Html->script('/cpanelpage/jquery-ui.min.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/jquery.sparkline.min.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/bootstrap/tab.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/bootstrap/dropdown.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/bootstrap/collapse.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/bootstrap/transition.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/bootstrap/tooltip.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/jquery.knob.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/fullcalendar.min.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/datatables/datatables.min.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/chosen.jquery.min.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/datatables/bootstrap.datatables.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/raphael-min.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/morris-0.4.3.min.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/for_pages/color_settings.js') ?>
<?= $this->Html->script('qrious.min.js') ?>
<?= $this->Html->script('jquery.slimscroll.js') ?>
<?= $this->Html->script('/cpanelpage/assets/js/application.js') ?>
<?= $this->Html->script('/cpanelpage/main.js') ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115093251-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-115093251-1');
    </script>
    <script>
        $(function(){

            $('.text-login-privacy').slimScroll({
                height: '250px',
                width: '100%'
            });

            $(document).on('click','#fblogin',function(){
                $('#login-custom-bar').hide('blind',{},100);
                $('#login-custom-fb').show('blind',{},300);  
            });
            $(document).on('click','#gglogin',function(){
                $('#login-custom-bar').hide('blind',{},100);
                $('#login-custom-gg').show('blind',{},300);    
            });
            $(document).on('click','#pllogin',function(){
                $('#login-custom-bar').hide('blind',{},100);
                $('#login-custom-pl').show('blind',{},300);
            }); 
            $(document).on('click','#pllogin-confirm',function(){
                var btn = $(this);
                btn.html('<i class="fa fa-refresh fa-spin" aria-hidden="true"></i> Vui lòng đợi');
                btn.attr("disabled", true);
                
                $.ajax({
                    url: '<?= $plLoginURL ?>',
                    data: {username: $('#puser').val(),pwd: $('#pcode').val()},
                    type: 'post',
                    success: function(res){
                        if(res.code == 200){
                            window.location.href= res.referer;                      
                        }else{
                            btn.html('<i class="fa fa-undo" aria-hidden="true"></i> Thử lại');
                            btn.attr("disabled", false);
                        }
                    },
                    error: function(){
                        btn.html('<i class="fa fa-undo" aria-hidden="true"></i> Thử lại');
                        btn.attr("disabled", false);
                    }
                });
            });           
                  
            $(document).on('click','#qrlogin',function(){
                $('#login-custom-bar').hide('blind',{},100);
                $('#login-custom-qr').show('blind',{},300);
                var qr = new QRious({
                    element: document.getElementById('qr-image'),
                    value: 'hello',
                    size: 180,
                    foreground: '#2196F3',
                    background: '#f7f7f7'
                });
            });
          
            $(document).on('click','#qrlogin-refresh',function(){
                let ar = ['haha','hihi','hoho'];
                let index = Math.floor((Math.random() * ar.length));
                console.log(index);
                var qr = new QRious({
                    element: document.getElementById('qr-image'),
                    value: ar[index],
                    size: 180,
                    foreground: '#2196F3',
                    background: '#f7f7f7'
                });
            });
          
            $(document).on('click','#fblogin-confirm',function(){
                var btn = $(this);
                btn.html('<i class="fa fa-refresh fa-spin" aria-hidden="true"></i> Vui lòng đợi');
                btn.attr("disabled", true);
                window.location.href="fblogin";
                setTimeout(function(){
                    btn.html('<i class="fa fa-undo" aria-hidden="true"></i> Thử lại');
                    btn.attr("disabled", false);
                },60000);
            });

            $(document).on('click','#gglogin-confirm',function(){
                // var btn = $(this);
                // btn.html('<i class="fa fa-refresh fa-spin" aria-hidden="true"></i> Vui lòng đợi');
                // btn.attr("disabled", true);
                // window.location.href="gglogin";
                // setTimeout(function(){
                //     btn.html('<i class="fa fa-undo" aria-hidden="true"></i> Thử lại');
                //     btn.attr("disabled", false);
                // },60000);
                alert('OK');
            });

            $(document).on('click','#pllogin-cancel,#qrlogin-cancel,#fblogin-cancel,#gglogin-cancel',function(){
                resetAll();
                $('#login-custom-bar').show('blind',{},300);
            });  

            
        });

        function resetAll(){
            $('#login-custom-pl').hide('clip',{},100);
            $('#login-custom-qr').hide('clip',{},100);
            $('#login-custom-fb').hide('clip',{},100);
            $('#login-custom-gg').hide('clip',{},100);
        }
    </script>
</body>
</html> 