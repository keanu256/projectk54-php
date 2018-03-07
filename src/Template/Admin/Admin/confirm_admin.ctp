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

<?= $this->Html->css('/cpanelpage/gg-fonts.css') ?>
  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Cpanel Confirm</title>

</head>

<body>
<div class="all-wrapper no-menu-wrapper">
    <div class="login-logo-w">
        <a href="index.html" class="logo">
            <i class="icon-lemon"></i>
            <span>Polygon Cpanel</span>
        </a>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="content-wrapper bold-shadow">
                <div class="content-inner">
                    <div class="main-content main-content-grey-gradient no-page-header">
                        <div id='div-a' >
                            <div class="main-content-inner">
                                <form action="" role="form">
                                    <center>
                                        <h3 class="form-title form-title-first">Xác minh người dùng</h3>
                                    </center>               
                                    <div class="form-group">
                                        <div id="error-div"></div>
                                        <input type="password" class="form-control" placeholder="Mật khẩu cấp 2" id="pcode" style="text-align:center;" autocomplete="off">
                                    </div>
                                    <button type="button" id='pcodeBtn' class='btn btn-primary btn-lg col-sm-12'>Xác Minh</button>
                                </form>
                            </div>
                        </div>
                        <div id='div-b' style="text-align:center;display:none;">
                            <div class="main-content-inner">
                                <?= $this->Html->image('monkey-loading.gif',[
                                    'style' => 'width:150px;height:150px;'
                                ])?>
                                </br>
                                <div style="color:green; font-size:20px;">
                                    Đang chuyển hướng vui lòng đợi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
    
</body>

</html>