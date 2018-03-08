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
        <div class="widget">
            <div class="alert alert-warning alert-dismissable">
                <i class="icon-exclamation-sign"></i> <strong>Welcome!</strong> This is a dashboard of the powerful admin template.
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_pie_chart" data-toggle="tab"><i class="icon-bullseye"></i> API</a></li>
                    <li><a href="#tab_bar_chart" data-toggle="tab"><i class="icon-bar-chart"></i> Login</a></li>
                    <li class="hidden-md hidden-xs"><a href="#tab_table" data-toggle="tab"><i class="icon-table"></i> Realtime</a></li>
                </ul>
                <div class="tab-content bottom-margin">
                    <div class="tab-pane active" id="tab_pie_chart">
                        <div class="shadowed-bottom">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-3 bordered">
                                    <div class="value-block padded-left text-center">
                                        <div class="value-self">520</div>
                                        <div class="value-sub">Total Sales</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3 bordered hidden-md">
                                    <div class="value-block text-center">
                                        <div class="value-self">1,120</div>
                                        <div class="value-sub">Total Visitors</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-8 col-sm-6">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="padded">
                            <?= $this->Element('Admin/tab_page_one'); ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_bar_chart">
                        <div class="shadowed-bottom">
                            <div class="row">
                                <div class="col-md-3 bordered">
                                    <div class="value-block padded-left text-center">
                                        <div class="value-self">256</div>
                                        <div class="value-sub">Total Sales</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 bordered hidden-md">
                                    <div class="value-block text-center">
                                        <div class="value-self">3,420</div>
                                        <div class="value-sub">Total Visitors</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-9">
                                    <form class="form-inline form-period-selector">
                                        <label class="control-label">Time Period:</label>
                                        <br>
                                        <input type="text" placeholder="01/12/2011" class="form-control input-sm">
                                        <input type="text" placeholder="01/12/2011" class="form-control input-sm">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="padded">
                            {{ content_2 }}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_table">
                        <div class="shadowed-bottom">
                            <div class="row">
                                <div class="col-md-3 bordered">
                                    <div class="value-block padded-left text-center">
                                        <div class="value-self">112</div>
                                        <div class="value-sub">Total Sales</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 bordered hidden-md">
                                    <div class="value-block text-center">
                                        <div class="value-self">2,340</div>
                                        <div class="value-sub">Total Visitors</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-9">
                                    <form class="form-inline form-period-selector">
                                        <label class="control-label">Time Period:</label>
                                        <br>
                                        <input type="text" placeholder="01/12/2011" class="form-control input-sm">
                                        <input type="text" placeholder="01/12/2011" class="form-control input-sm">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="padded">
                            {{ content_3 }} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>