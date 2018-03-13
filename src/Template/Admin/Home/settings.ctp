<?php 
use App\Classes\PolygonHelper;
    $polyHelper = new PolygonHelper();
    $linkSetConfig = $this->Url->build(['prefix'=>'Admin','controller'=>'Home','action'=> 'setconfig'])
?>

<style>
    button:focus{
        outline:none !important;
    }
</style>
<div class="content-inner">
    <div class="page-header page-header-green-sea">
        <div class="header-links hidden-xs">
            <a href="notifications.html"><i class="icon-comments"></i> Tin nhắn</a>
            <?= $this->Html->link('<i class="icon-cog"></i> Cấu hình',[
                'prefix' => 'Admin',
                'controller' => 'Home',
                'action' => 'settings'
            ],['escape' => false]) ?>
            <?= $this->Html->link('<i class="icon-signout"></i> Đăng xuất',[
                'prefix' => 'Admin',
                'controller' => 'Admin',
                'action' => 'logout'
            ],['escape' => false]) ?>
        </div>
        <h1><i class="icon-bar-chart"></i> <?= $panelName ?></h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Bread</a></li>
        <li><a href="#">Crumbs</a></li>
        <li class="active">Example</li>
    </ol>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab"><i class="icon-table"></i> API</a></li>
                    <li><a href="#tab_2" data-toggle="tab"><i class="icon-check"></i> Cài đặt đăng nhập</a></li>
                    <li><a href="#tab_3" data-toggle="tab"><i class="icon-bullseye"></i> Socket.IO</a></li>
                    <li><a href="#tab_4" data-toggle="tab"><i class="icon-cogs"></i> Đăng nhập bằng MXH</a></li>
                </ul>
                <div class="tab-content bottom-margin">
                    <div class="tab-pane active" id="tab_1">
                        <?= $this->Element('Admin/tab_page_one'); ?>
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <?= $this->Element('Admin/tab_page_two'); ?>      
                    </div>
                    <div class="tab-pane" id="tab_3">
                        <?= $this->Element('Admin/tab_page_three'); ?>
                    </div>
                    <div class="tab-pane" id="tab_4">
                        <?= $this->Element('Admin/tab_page_four'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

