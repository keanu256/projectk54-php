<ul class="dropdown-menu" id="dropdown-ul-tintuc">
    <li>
        <div class="dropdown-mega-content">
            <div class="row">
                <div class="col-lg-3 dropdown-mega-sub-content-block overlay overlay-show overlay-color-primary d-none d-lg-block" data-plugin-image-background="" data-plugin-options="{'imageUrl': '/homepage/img/menu-bg-khoungdung.jpg'}" style="background-image: url(&quot;/homepage/img/menu-bg-khoungdung.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                    <span class="top-sub-title text-color-light-2 d-block">THE MOST</span>
                    <span class="text-color-light font-weight-bold d-block text-4 mb-2">TIN TỨC</span>
                    <p class="text-color-light-2">Cung cấp các công cụ giúp tối ưu công việc.</p>
                    <a class="btn btn-dark btn-rounded btn-v-3 btn-h-2 content-block-button font-weight-semibold" href="#">TÌM HIỂU</a>
                </div>
                <div class="col-lg-3 ml-auto" style="border-right: none;">
                    <span class="dropdown-mega-sub-title">TIN TỨC MỚI NHẤT</span>
                    <div class="owl-carousel owl-theme dots-style-2 nav-style-2 mt-3" data-plugin-options="{'items': 1, 'dots': true, 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut'}">
                        <?php foreach ($blogs['new'] as $key => $value): ?>
                            <div>
                                <?= $this->Html->image('/filemanager/uploads/'.$value->preview,[
                                    'class' => 'img-fluid',
                                    'alt' => $value->title
                                ])?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <ul class="dropdown-mega-sub-nav mt-3">
                        <?php foreach ($blogs['new'] as $key => $value): ?>
                            <li>
                                <a class="dropdown-item scroll_on_hover ellipsis" href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'view',$value->id])?>"><i class="fas fa-genderless"></i>&nbsp; <?= $value->title ?></a>
                            </li>
                        <?php endforeach; ?>
                        <li><a class="dropdown-item" href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'index'])?>"><i class="fas fa-angle-double-right"></i>&nbsp; Xem thêm</a></li>  
                    </ul>
                </div>
                <div class="col-lg-3" style="border-right: none;">
                    <span class="dropdown-mega-sub-title">SỰ KIỆN & KHUYẾN MÃI</span>
                    <div class="owl-carousel owl-theme dots-style-2 nav-style-2 mt-3" data-plugin-options="{'items': 1, 'dots': true, 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut'}">
                        <?php foreach ($blogs['khuyenmai'] as $key => $value): ?>
                            <div>
                                <?= $this->Html->image('/filemanager/uploads/'.$value->preview,[
                                    'class' => 'img-fluid',
                                    'alt' => $value->title
                                ])?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <ul class="dropdown-mega-sub-nav mt-3">
                        <?php foreach ($blogs['khuyenmai'] as $key => $value): ?>
                            <li>
                                <a class="dropdown-item scroll_on_hover ellipsis" href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'view',$value->id])?>"><i class="fas fa-genderless"></i>&nbsp; <?= $value->title ?></a>
                            </li>
                        <?php endforeach; ?>   
                        <li><a class="dropdown-item" href="portfolio-2.html"><i class="fas fa-angle-double-right"></i>&nbsp; Xem thêm</a></li> 
                    </ul>
                </div>
                <div class="col-lg-3 mr-2" style="border-right: none;">
                    <span class="dropdown-mega-sub-title">BÀI VIẾT XEM NHIỀU</span>
                    <div class="owl-carousel owl-theme dots-style-2 nav-style-2 mt-3" data-plugin-options="{'items': 1, 'dots': true, 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut'}">
                        <?php foreach ($blogs['topviewers'] as $key => $value): ?>
                            <div>
                                <?= $this->Html->image('/filemanager/uploads/'.$value->preview,[
                                    'class' => 'img-fluid',
                                    'alt' => $value->title
                                ])?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <ul class="dropdown-mega-sub-nav mt-3">
                        <?php foreach ($blogs['topviewers'] as $key => $value): ?>
                            <li>
                                <a class="dropdown-item scroll_on_hover ellipsis" href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'view',$value->id])?>"><i class="fas fa-genderless"></i>&nbsp; <?= $value->title ?></a>
                            </li>
                        <?php endforeach; ?>    
                        <li><a class="dropdown-item" href="portfolio-2.html"><i class="fas fa-angle-double-right"></i>&nbsp; Xem thêm</a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </li>
</ul>