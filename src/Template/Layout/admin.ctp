<?php
use Cake\Core\Configure;
Configure::load('appsettings');
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
    <?= $this->Html->css('/cpanelpage/pretty-checkbox.min.css') ?>

    <?= $this->Html->css('/cpanelpage/gg-fonts.css') ?>
    
    <?= $this->Html->script('/cpanelpage/jquery.min.js') ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    @javascript html5shiv respond.min
    <![endif]-->

    <title>
        <?= $title ?>
    </title>

</head>

<body>
    <div class="all-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="text-center">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="side-bar-wrapper collapse navbar-collapse navbar-ex1-collapse">
                    <a href="#" class="logo hidden-sm hidden-xs" style="text-decoration: none;">
                        <i class="icon-lemon"></i>
                        <span>Polygon Panel</span>
                    </a>
                    <div class="search-box">
                        <input type="text" placeholder="SEARCH" class="form-control">
                    </div>
                    <ul class="side-menu side-menu-green-sea">
                        <li>
                            <a href="notifications.html">
                                <span class="badge badge-notifications pull-right alert-animated">5</span>
                                <i class="icon-flag"></i> Notifications
                            </a>
                        </li>
                    </ul>
                    <div class="relative-w">
                        <ul class="side-menu side-menu-green-sea">
                            <li class='current'>
                                <a class='current' href="index.html">
                                    <span class="badge pull-right">17</span>
                                    <i class="icon-dashboard"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="charts.html" class="is-dropdown-menu">
                                    <span class="badge pull-right"></span>
                                    <i class="icon-bar-chart"></i> Charts
                                </a>
                                <ul>
                                    <li>
                                        <a href="charts.html#area_chart_anchor">
                                            <i class="icon-random"></i> Area Chart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="charts.html#circle_chart_anchor">
                                            <i class="icon-bullseye"></i> Circular Chart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="charts.html#bar_chart_anchor">
                                            <i class="icon-signal"></i> Bar Chart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="charts.html#line_chart_anchor">
                                            <i class="icon-bar-chart"></i> Line Chart
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="forms.html">
                                    <span class="badge pull-right">12</span>
                                    <i class="icon-terminal"></i> Forms
                                </a>
                            </li>
                            <li>
                                <a href="elements.html" class="is-dropdown-menu">
                                    <span class="badge pull-right"></span>
                                    <i class="icon-code-fork"></i> UI Elements
                                </a>
                                <ul>
                                    <li>
                                        <a href="elements.html">
                                            <i class="icon-beaker"></i> Elements
                                        </a>
                                    </li>
                                    <li>
                                        <a href="icons.html">
                                            <i class="icon-picture"></i> Icons
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="datatable.html" class="is-dropdown-menu">
                                    <span class="badge pull-right">24</span>
                                    <i class="icon-th"></i> Tables
                                </a>
                                <ul>
                                    <li>
                                        <a href="datatable.html">
                                            <i class="icon-list-alt"></i> Data Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="table.html">
                                            <i class="icon-table"></i> Regular Tables
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <span class="badge pull-right">11</span>
                                    <i class="icon-calendar"></i> Calendar
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <span class="badge pull-right"></span>
                                    <i class="icon-signin"></i> Login Page
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content-wrapper">
                    <?= $this->fetch('content'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="color_settings_box hidden-xs">
        <h3>Bảo trì hệ thống</h3>
        <label class="checkbox-w col-md-12">
            <?php if(Configure::read('Maintain')): ?>
                <button type="button" class="btn btn-danger col-md-12" id="on-off-a" d-val='0'> TẮT BẢO TRÌ </button>
            <?php else: ?>
                <button type="button" class="btn btn-success col-md-12" id="on-off-a" d-val='1'> BẬT BẢO TRÌ </button>
            <?php endif;?>
        </label>
        <h3>Đăng ký mới</h3> 
        <label class="checkbox-w col-md-12">
            <?php if(Configure::read('Register')): ?>
                <button type="button" class="btn btn-danger col-md-12" id="on-off-b" d-val='0'> TẮT ĐĂNG KÝ </button>
            <?php else: ?>
                <button type="button" class="btn btn-success col-md-12" id="on-off-b" d-val='1'> MỞ ĐĂNG KÝ </button>
            <?php endif;?>
        </label>
        <h3>Chức năng thanh toán</h3>
        <label class="checkbox-w col-md-12">
            <?php if(Configure::read('Payment')): ?>
                <button type="button" class="btn btn-danger col-md-12" id="on-off-c" d-val='0'> TẮT THANH TOÁN </button>
            <?php else: ?>
                <button type="button" class="btn btn-success col-md-12" id="on-off-c" d-val='1'> MỞ THANH TOÁN </button>
            <?php endif;?>
        </label>
        <div class="toggle-color-settings">
            <i class="icon-cog"></i>
            <span>Hiện</span>
        </div>
        <style>
            .color_settings_box:hover .toggle-color-settings:hover{
                text-decoration: none !important;
            }
        </style>
    </div>

    
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

   
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115093251-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-115093251-1');
    </script>
</body>

</html>