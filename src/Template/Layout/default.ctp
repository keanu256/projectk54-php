<?php 
    $session = $this->request->session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Polygon Portal">
    <meta name="author" content="ThemePixels">

    <title>Polygon Việt Nam</title>

    <!-- vendor css -->
    <?= $this->Html->css('/lib/font-awesome/css/font-awesome.css'); ?>
    <?= $this->Html->css('/lib/Ionicons/css/ionicons.css'); ?>
    <?= $this->Html->css('/lib/perfect-scrollbar/css/perfect-scrollbar.css'); ?>
    <?= $this->Html->css('/lib/jquery-switchbutton/jquery.switchButton.css'); ?>
    <?= $this->Html->css('/lib/rickshaw/rickshaw.min.css'); ?>
    <?= $this->Html->css('/lib/chartist/chartist.css'); ?>

    <!-- Bracket CSS -->
    <?= $this->Html->css('bracket.css'); ?>
</head>

<body>  
    <style>
        #pre-loading{
            background:#ECEFF1;
            z-index: 1050;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0px;
            text-align:center;
        }

        #pre-loading img{
            width: 30vh;
            height: 30vh;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            position: absolute;
        }

        .xlable-badge-danger{
            background: red;
            color: white;
            padding: 0px 5px;
            border-radius: 3px;
        }

        #searchbox{
            margin-top: 15px;
            height: 30px;
            border: 1px solid lightgray;
            margin-right: 2px;
            border-radius:50px;
            line-height: 10px;
        }
    </style>
    <div id="pre-loading" style="">
        <img src="https://loading.io/spinners/azure/lg.azure-round-loader.gif">   
    </div>
    <?= $this->Element('Dashboard/sidebar-menu-left'); ?>

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="input-group hidden-xs-down transition">

            </div>
            <!-- input-group -->
        </div>
        <!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                        <i class="icon ion-ios-email-outline tx-24"></i>
                        <!-- start: if statement -->
                        <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                        <!-- end: if statement -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                        <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                            <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                            <a href="" class="tx-11">+ Add New Message</a>
                        </div>
                        <!-- d-flex -->

                        <div class="media-list">
                            <!-- loop starts here -->
                            <a href="" class="media-list-link">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                                            <span class="tx-11 tx-gray-500">2 minutes ago</span>
                                        </div>
                                        <!-- d-flex -->
                                        <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                                    </div>
                                </div>
                                <!-- media -->
                            </a>
                            <!-- loop ends here -->
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                                            <span class="tx-11 tx-gray-500">3 hours ago</span>
                                        </div>
                                        <!-- d-flex -->
                                        <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                                    </div>
                                </div>
                                <!-- media -->
                            </a>
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                                            <span class="tx-11 tx-gray-500">5 hours ago</span>
                                        </div>
                                        <!-- d-flex -->
                                        <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                                    </div>
                                </div>
                                <!-- media -->
                            </a>
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                                            <span class="tx-11 tx-gray-500">Yesterday</span>
                                        </div>
                                        <!-- d-flex -->
                                        <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                                    </div>
                                </div>
                                <!-- media -->
                            </a>
                            <div class="pd-y-10 tx-center bd-t">
                                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                            </div>
                        </div>
                        <!-- media-list -->
                    </div>
                    <!-- dropdown-menu -->
                </div>
                <!-- dropdown -->
                <div class="dropdown">
                    <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                        <i class="icon ion-ios-bell-outline tx-24"></i>
                        <!-- start: if statement -->
                        <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
                        <!-- end: if statement -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                        <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                            <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                            <a href="" class="tx-11">Mark All as Read</a>
                        </div>
                        <!-- d-flex -->

                        <div class="media-list">
                            <!-- loop starts here -->
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                                        <span class="tx-12">October 03, 2017 8:45am</span>
                                    </div>
                                </div>
                                <!-- media -->
                            </a>
                            <!-- loop ends here -->
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                                        <span class="tx-12">October 02, 2017 12:44am</span>
                                    </div>
                                </div>
                                <!-- media -->
                            </a>
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                                        <span class="tx-12">October 01, 2017 10:20pm</span>
                                    </div>
                                </div>
                                <!-- media -->
                            </a>
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                        <span class="tx-12">October 01, 2017 6:08pm</span>
                                    </div>
                                </div>
                                <!-- media -->
                            </a>
                            <div class="pd-y-10 tx-center bd-t">
                                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                            </div>
                        </div>
                        <!-- media-list -->
                    </div>
                    <!-- dropdown-menu -->
                </div>
                <!-- dropdown -->
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown" style="color:green;">
                        <span class="logged-name hidden-md-down"> <?= $session->read('Auth.User.fullname') ?></span>
                        <?php if(!empty($session->read('Auth.User.avatar'))): ?>
                            <?= $this->Html->image($session->read('Auth.User.avatar'),[
                                'class'=>'wd-32 rounded-circle'
                            ]) ?>
                        <?php else: ?>
                            <?= $this->Html->image('img11.jpg',[
                                'class'=>'wd-32 rounded-circle'
                            ]) ?>    
                        <?php endif; ?>
                        <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href=""><i class="icon ion-ios-person"></i> Thông tin cá nhân</a></li>
                            <li><a href=""><i class="icon ion-cube"></i> Điểm Polycoin</a></li>
                            <li><a href=""><i class="icon ion-social-usd"></i> AAA</a></li>
                            <hr style="margin-top:3px; margin-bottom: 3px;">
                            <?php if($session->read('Auth.User.isadmin')): ?>
                            <li>
                                <?= $this->Html->link('<i class="icon ion-ios-analytics"></i> Polygon Panel',
                                    [   
                                        'prefix' => 'Admin',
                                        'controller'=>'Home',
                                        'action'=>'index'
                                    ],[
                                        'escape' => false
                                    ]
                                ) ?>
                            </li>
                            <?php endif; ?>
                            <li>
                                <?= $this->Html->link('<i class="icon ion-power"></i> Đăng Xuất',
                                    [
                                        'controller'=>'Users',
                                        'action'=>'logout'
                                    ],[
                                        'escape' => false
                                    ]
                                ) ?>
                            </li>
                        </ul>
                    </div>
                    <!-- dropdown-menu -->
                </div>
                <!-- dropdown -->
            </nav>
            <div class="navicon-right">
                <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-chatboxes-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
            </div>
            <!-- navicon-right -->
        </div>
        <!-- br-header-right -->
    </div>
    <!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="br-sideright">
        <ul class="nav nav-tabs sidebar-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
            </li>
        </ul>
        <!-- sidebar-tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="contacts" role="tabpanel">
                <label class="sidebar-label pd-x-25">Online Contacts</label>
                <div class="contact-list pd-x-10">
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Marilyn Tarter</p>
                                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0 ">Belinda Connor</p>
                                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Britanny Cevallos</p>
                                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Brandon Lawrence</p>
                                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Andrew Wiggins</p>
                                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Theodore Gristen</p>
                                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Deborah Miner</p>
                                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                </div>
                <!-- contact-list -->


                <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
                <div class="contact-list pd-x-10">
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Marilyn Tarter</p>
                                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="mg-l-10">
                                <p class="mg-b-0">Belinda Connor</p>
                                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Britanny Cevallos</p>
                                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Brandon Lawrence</p>
                                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Andrew Wiggins</p>
                                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Theodore Gristen</p>
                                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="https://projectk54.com/img/280x280.png" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Deborah Miner</p>
                                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a>
                    <!-- contact-list-link -->
                </div>
                <!-- contact-list -->

            </div>
            <!-- #contacts -->


            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="attachments" role="tabpanel">
                <label class="sidebar-label pd-x-25">Recent Attachments</label>
                <div class="media-file-list">
                    <div class="media">
                        <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43445</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">1.2mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6543</p>
                            <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                            <p class="mg-b-0 tx-12 op-5">24.8mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Tax_Form</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">5.5mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Getting_Started</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">12.7mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Introduction</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">7.7mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43420</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">2.2mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43447</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">3.2mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6545</p>
                            <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                            <p class="mg-b-0 tx-12 op-5">14.8mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Secret_Document</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">4.5mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                </div>
                <!-- media-list -->
            </div>
            <!-- #history -->
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="calendar" role="tabpanel">
                <label class="sidebar-label pd-x-25 ">Time &amp; Date</label>
                <div class="pd-x-25">
                    <h2 id="brTime" class="tx-white tx-lato mg-b-5"></h2>
                    <h6 id="brDate" class="tx-white tx-light op-3"></h6>
                </div>

                <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
                <div class="datepicker sidebar-datepicker"></div>


                <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
                <div class="pd-x-25">
                    <div class="list-group sidebar-event-list mg-b-20">
                        <div class="list-group-item">
                            <div>
                                <h6 class="tx-white tx-13 mg-b-5 tx-normal">Roven's 32th Birthday</h6>
                                <p class="mg-b-0 tx-white tx-12 op-2">2:30PM</p>
                            </div>
                            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div>
                        <!-- list-group-item -->
                        <div class="list-group-item">
                            <div>
                                <h6 class="tx-white tx-13 mg-b-5 tx-normal">Regular Workout Schedule</h6>
                                <p class="mg-b-0 tx-white tx-12 op-2">7:30PM</p>
                            </div>
                            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div>
                        <!-- list-group-item -->
                    </div>
                    <!-- list-group -->

                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">+ Add Event</a>
                    <br>
                </div>

            </div>
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="settings" role="tabpanel">
                <label class="sidebar-label pd-x-25">Quick Settings</label>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Sound Notification</h6>
                    <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox" class="switch-button" checked>
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
                    <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your phone.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox2" class="switch-button">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Location Services</h6>
                    <p class="op-5 tx-13">Allowing us to access your location</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox3" class="switch-button">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
                    <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox4" class="switch-button" checked>
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Your email</h6>
                    <div class="pos-relative">
                        <input type="email" name="email" class="form-control form-control-inverse transition pd-y-10" value="janedoe@domain.com">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25">
                    <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account Settings</a>
                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy Settings</a>
                </div>

            </div>
        </div>
        <!-- tab-content -->
    </div>
    <!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## -->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">                              
        <?= $this->fetch('content'); ?>
        <!-- br-pagebody -->                                    
    </div>
    
    <!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <?= $this->Html->script('/lib/jquery/jquery.js'); ?>
    <?= $this->Html->script('/lib/popper.js/popper.js'); ?>
    <?= $this->Html->script('/lib/bootstrap/bootstrap.js'); ?>
    <?= $this->Html->script('/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js'); ?>
    <?= $this->Html->script('/lib/moment/moment.js'); ?>
    <?= $this->Html->script('/lib/jquery-ui/jquery-ui.js'); ?>  
    <?= $this->Html->script('/lib/jquery-switchbutton/jquery.switchButton.js'); ?>
    <?= $this->Html->script('/lib/peity/jquery.peity.js'); ?>

    <?= $this->Html->script('bracket.js'); ?>
    

    <script>
        $(function() {
            'use strict'

            // FOR DEMO ONLY
            // menu collapsed by default during first page load or refresh with screen
            // having a size between 992px and 1299px. This is intended on this page only
            // for better viewing of widgets demo.
            // $(window).resize(function() {
            //     minimizeMenu();
            // });

            setTimeout(function(){
                $('#pre-loading').effect( "blind",{},1000);
            },2000);

            //minimizeMenu();

            function minimizeMenu() {
                if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                    // show only the icons and hide left menu label by default
                    $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                    $('body').addClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideUp();
                } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                    $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                    $('body').removeClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideDown();
                }
            }     
        });

        
    </script>
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