<?php 
    $secret_question = [
        '0' => 'Con vật mà bạn yêu thích?',
        '1' => 'Con vật mà bạn ghét nhất?',
        '2' => 'Bộ phim mà bạn yêu thích?',
        '3' => 'Đội bóng bạn thích nhất?',
        '4' => 'Biển số xe của bạn là gì?',
        '5' => 'Ban nhạc mà bạn thích?',
        '6' => 'Bài hát bạn yêu thích?',
        '7' => 'Tên người bạn yêu quý nhất tên gì?',
        '8' => 'Tên biệt danh hồi nhỏ của bạn là gì?',
    ];

    $user = $this->request->session()->read('Auth.User');
?>
<?= $this->Html->css('/cpanelpage/pretty-checkbox.min.css') ?>
<?= $this->Element('Homepage/Header/header') ?>
<section class="page-header mb-0 parallax appear-animation" id="page-header" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="/homepage/img/background-page-header.png" data-appear-animation="fadeIn" data-appear-animation-duration="1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-left">
                <span class="tob-sub-title text-color-primary d-block">XIN CHÀO</span>
                <h1 class="font-weight-bold">Chào mừng bạn đến với Polygon Việt Nam.</h1>
                <p class="lead">Bạn vui lòng hoàn tất các nội dung sau để bắt đầu khám phá tất cả dịch vụ của chúng tôi.</p>
            </div>
        </div>
    </div> 
</section>
<aside class="nav-secondary nav-secondary-style-1 bg-primary mb-4" id="navSecondary" data-plugin-sticky data-plugin-options="{'offset_top': 104}">
    <div class="container">
        <div class="row py-2">
            <div class="col">
                <ul class="nav nav-light justify-content-center">
                    <li class="nav-item"><a class="nav-link font-weight-semibold no-skin" data-hash data-hash-offset="120" href="#first">THÔNG TIN CÁ NHÂN</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-semibold no-skin" data-hash data-hash-offset="200" href="#second">CẤU HÌNH TÀI KHOẢN</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-semibold no-skin" data-hash data-hash-offset="200" href="#third">ĐIỀU KHOẢN & CHÍNH SÁCH</a></li>
                </ul>
            </div>
        </div>
    </div>
</aside>
<?= $this->Form->create(false,['url'=> ['controller'=>'Users','action' => 'welcome'],['id' => 'formWelcome']]) ?>
<section class="section container welcome-tab" id="first">
    <h3 class="ml-3">HÌNH ĐẠI DIỆN</h3>
    <div class="row ml-1 mr-1 mb-5">
        <div class="col-3 col-md-2">
            <div class="image-frame image-frame-style-7 border-color-dark">
                <img src="/homepage/img/generic/generic-square-4.jpg" class="img-fluid rounded-circle" alt="">
            </div>
        </div>
        <div class="col-9 col-md-10">
            <div class="form-row">
                <div class="form-group col-12 mb-2">
                    <label>ĐƯỜNG DẪN/URL</label>
                    <div class="form-inline">
                    <input type="text" maxlength="100" class="col-md-10 form-control border rounded text-1" name="avatar">
                    <button type="button" class="col-md-* btn btn-primary btn-rounded btn-4 btn-fs-4 font-weight-bold text-1 text-center ">CHỌN</button>
                    </div>
                    <p>Lưu ý: Kích thước không quá <strong>600 x 600</strong> px, dung lượng tối đa <strong>2MB</strong>. Định dạng (<strong>PNG</strong>, <strong>JPEG</strong>, <strong>JPG</strong>, <strong>GIF</strong>)</p>
                </div>
            </div>
        </div>
    </div>

    <h3 class="ml-3">ĐỊA CHỈ</h3>
    <div class="row ml-1 mr-1">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-12 mb-2">
                    <label>ĐỊA CHỈ (SỐ NHÀ + TÊN ĐƯỜNG)</label>
                    <input type="text" maxlength="100" class="col-md-12 form-control border rounded text-1" name="avatar">
                </div>        
            </div>
        </div>
    </div>
    <div class="row ml-1 mr-1 mb-5">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>VÙNG MIỀN</label>
                    <?= $this->Form->select(
                        'khu_vuc',
                        $khu_vuc,
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                            'value' => isset($userAddress['zone'])?$userAddress['zone']:0
                        ]
                    )?>
                </div> 
                <div class="form-group col-md-3">
                    <label>TỈNH/THÀNH PHỐ</label>
                    <?= $this->Form->select(
                        'tinh_thanhpho',
                        $tinh_thanhpho,
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                            'value' => $userAddress['city']
                        ]
                    )?>
                </div> 
                <div class="form-group col-md-3">
                    <label>QUẬN/HUYỆN</label>
                    <?= $this->Form->select(
                        'quan_huyen',
                        $quan_huyen,
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                            'value' => $userAddress['district']
                        ]
                    )?>
                </div>    
                <div class="form-group col-md-3">
                    <label>PHƯỜNG/XÃ</label>
                    <?= $this->Form->select(
                        'phuong_xa',
                        $phuong_xa,
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                            'value' => $userAddress['ward']
                        ]
                    )?>
                </div>
            </div>
        </div>
    </div>

    <h3 class="ml-3">BẢO MẬT TÀI KHOẢN</h3>
    <div class="row ml-1 mr-1 mb-5">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>HỌ VÀ TÊN</label>
                    <input type="text" maxlength="100" class="col-md-12 form-control border rounded text-1" name="fullname" value="<?= $user['fullname'] ?>">
                </div> 
                <div class="form-group col-md-4">
                    <label>SỐ ĐIỆN THOẠI</label>
                    <input type="text" maxlength="100" class="col-md-12 form-control border rounded text-1" name="phone" value="<?= $user['phone'] ?>" required>
                </div> 
                <div class="form-group col-md-4">
                    <label>NGÀY SINH</label>
                    <input type="text" maxlength="100" class="col-md-12 form-control border rounded text-1" name="dob" value="<?= $user['dob'] ?>">
                </div> 
                <div class="form-group col-md-4">
                    <label>GIỚI TÍNH</label>
                    <?= $this->Form->select(
                        'gioi_tinh',
                        ['3' => 'Chưa xác định','1' => 'Nam', '2' => 'Nữ'],
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                            'value' => $user['sex']
                        ]
                    )?>
                </div>    
                <div class="form-group col-md-4">
                    <label>CÂU HỎI BÍ MẬT</label>
                    <?= $this->Form->select(
                        'secret_question',
                        $secret_question,
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                            'disabled' => $user->isReady
                        ]
                    )?>
                </div> 
                <div class="form-group col-md-4">
                    <label>TRẢ LỜI (TỐI THIỂU 4 KÝ TỰ)</label>
                    <?= $this->Form->input(
                        'secret_question_ans',
                        [
                            'class' => 'col-md-12 form-control border rounded text-1',
                            'type' => 'text',
                            'maxlength' => 100,
                            'label' => false,
                            'disabled' => $user->isReady
                        ]
                    )?>
                </div>  
                <div class="form-group col-md-4">
                    <label>CMND/BẰNG LÁI XE/PASSPORT</label>
                    <input type="text" maxlength="100" class="col-md-12 form-control border rounded text-1" name="cmnd">
                </div> 
                <div class="form-group col-md-4">
                    <label>NGÀY CẤP</label>
                    <input type="text" maxlength="100" class="col-md-12 form-control border rounded text-1" name="cmnd_publish">
                </div> 
                <div class="form-group col-md-4">
                    <label>NƠI CẤP</label>
                    <input type="text" maxlength="100" class="col-md-12 form-control border rounded text-1" name="cmnd_place">
                </div> 
            </div>
        </div>
    </div>
    
    <h3 class="ml-3">LIÊN KẾ TÀI KHOẢN MẠNG XÃ HỘI</h3>
    <div class="row ml-1 mr-1 mb-5">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>EMAIL HIỆN TẠI: <span class="font-weight-bold text-uppercase d-inline"><?= $this->request->session()->read('Auth.User.email')?></span><span class="font-italic text-danger"> (Lưu ý: Tài khoản khác email không thể liên kết.)</span></label>
                </div> 
                <div class="form-group col-md-3">
                    <button type="button" class="btn btn-outline btn-block btn-3 btn-secondary mb-2">FACEBOOK</button>
                </div>  
                <div class="form-group col-md-3">
                <button type="button" class="btn btn-outline btn-block btn-3 btn-secondary mb-2">GOOGLE+</button>
                </div>  
                <div class="form-group col-md-3">
                    <button type="button" class="btn btn-outline btn-block btn-3 btn-secondary mb-2">TWEETER</button>
                </div> 
                <div class="form-group col-md-3">
                    <button type="button" class="btn btn-outline btn-block btn-3 btn-secondary mb-2">LINKEDIN</button>
                </div>     
            </div>
        </div>
    </div>

    <h3 class="ml-3" id="second">LOẠI TÀI KHOẢN & DỊCH VỤ</h3>
    <div class="row ml-1 mr-1 mb-5">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>HÌNH THỨC TÀI KHOẢN</label>
                    <?= $this->Form->select(
                        'account_type',
                        ['3' => 'Cá nhân','1' => 'Chủ kinh doanh', '2' => 'Doanh nghiệp'],
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                        ]
                    )?>
                </div>  
                <div class="form-group col-md-4">
                    <label>LOẠI HÌNH DỊCH VỤ</label>
                    <?= $this->Form->select(
                        'service_type',
                        [
                            '0' => 'Cơ bản - 0 VNĐ',
                            '149000' => 'Cao cấp - 149,000 VNĐ / tháng', 
                            '249000' => 'Premium - 249,000 VNĐ / tháng',
                            '399000' => 'Master - 399,000 VNĐ / tháng'
                        ],
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                        ]
                    )?>
                </div>  
                <div class="form-group col-md-4">
                    <label>CHU KỲ THANH TOÁN</label>
                    <?= $this->Form->select(
                        'payment_pack',
                        [
                            '1' => 'Hằng tháng',
                            '0.95' => '3 tháng - Giảm 5%', 
                            '0.9' => '6 tháng - Giảm 10%',
                            '0.85' => '1 năm - Giảm 15%',
                            '0.8' => '2 năm - Giảm 20%'
                        ],
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                        ]
                    )?>
                </div>    
            </div>
        </div>
    </div>  

    <h3 class="ml-3" id="second">HÌNH THỨC THANH TOÁN</h3>
    <div class="row ml-1 mr-1 mb-5">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>NGÂN HÀNG</label>
                    <?= $this->Form->select(
                        'account_type',
                        [
                            '0' => '-- Chưa chọn --',
                            '1' => 'Ngân hàng ACB',
                            '2' => 'Ngân hàng Vietcombank', 
                            '3' => 'Ngân hàng TPBank',
                            '4' => 'Ngân hàng Techcombank'
                        ],
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                        ]
                    )?>
                </div>  
                <div class="form-group col-md-6">
                    <label>VÍ ĐIỆN TỬ</label>
                    <?= $this->Form->select(
                        'service_type',
                        [
                            '0' => '-- Chưa chọn --',
                            '1' => 'Ví Momo',
                            '2' => 'Air Pay',
                            '3' => 'Bảo Kim'
                        ],
                        [
                            'multiple' => false,
                            'class' => 'form-control border',
                        ]
                    )?>
                </div>     
            </div>
        </div>
    </div>  

    <h3 class="ml-3" id="third">ĐIỀU KHOẢN & CHÍNH SÁCH</h3>
    <div class="row ml-1 mr-1 mb-5">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>THÔNG TIN TÓM TẮT <span>- BẢNG ĐẦY ĐỦ, XEM <a href="#">TẠI ĐÂY</a></span></label>
                    <div class="textarea"><?= file_get_contents('docs/dieukhoan.html',false) ?></div>               
                </div>     
                <div class="form-group col-md-12">
                    <div class="pretty p-default"><input type="checkbox"><div class="state p-primary"><label>Đồng ý với điều khoản & chính sách sử dụng.</label></div></div>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary btn-block btn-4 btn-fs-4 mb-2">LƯU CÀI ĐẶT</button>
                </div>
            </div>
        </div>
    </div>                    
</section>
<?= $this->Form->end(); ?>
<script>
    var default_address_flag = 0;
    document.addEventListener('DOMContentLoaded', function() {
        $(document).on('change','select[name="khu_vuc"]', function(obj){
            var selected_value = $(this).val();
            console.log('OK');
            if(selected_value != 0){
                $.ajax({
                    url: '/api/'+'<?= $apiVersion ?>'+'/cities/json?key='+'<?= $user_api_key ?>'+'&zone=' + selected_value,
                    type: 'get',
                    success: function(res){
                        if(res.results.code == 200){
                            var data = res.results.data;
                            var selector = $('select[name="tinh_thanhpho"]');
                            selector.prop('disabled', true);
                            $('select[name="quan_huyen"]').prop('disabled', true);
                            $('select[name="phuong_xa"]').prop('disabled', true);
                            $('select[name="quan_huyen"]').val(0);
                            $('select[name="phuong_xa"]').val(0);
                            selector.empty();
                            selector.append($('<option>', {
                                value: 0,
                                text: '-- Chưa chọn --'
                            }));
                            $.each(data, function(index, element){
                                selector.append($('<option>', {
                                    value: index,
                                    text: element
                                }));
                            })  
                            selector.prop('disabled', false);        
                        }
                    }
                })
            }
        });

        $(document).on('change','select[name="tinh_thanhpho"]', function(obj){
            var selected_value = $(this).val();
            if(selected_value != 0){
                $.ajax({
                    url: '/api/'+'<?= $apiVersion ?>'+'/districts/json?key='+'<?= $user_api_key ?>'+'&city_id=' + selected_value,
                    type: 'get',
                    success: function(res){
                        if(res.results.code == 200){
                            var data = res.results.data;
                            var selector = $('select[name="quan_huyen"]');
                            selector.prop('disabled', true);
                            $('select[name="phuong_xa"]').prop('disabled', true);
                            $('select[name="phuong_xa"]').val(0);
                            selector.empty();
                            selector.append($('<option>', {
                                value: 0,
                                text: '-- Chưa chọn --'
                            }));
                            $.each(data, function(index, element){
                                selector.append($('<option>', {
                                    value: index,
                                    text: element
                                }));
                            })  
                            selector.prop('disabled', false);   
                        }
                    }
                })
            }
        });

        $(document).on('change','select[name="quan_huyen"]', function(obj){
            var selected_value = $(this).val();
            if(selected_value != 0){
                $.ajax({
                    url: '/api/'+'<?= $apiVersion ?>'+'/wards/json?key='+'<?= $user_api_key ?>'+'&district_id=' + selected_value,
                    type: 'get',
                    success: function(res){
                        if(res.results.code == 200){
                            var data = res.results.data;
                            var selector = $('select[name="phuong_xa"]');
                            selector.prop('disabled', true); 
                            selector.empty();
                            selector.append($('<option>', {
                                value: 0,
                                text: '-- Chưa chọn --'
                            }));
                            $.each(data, function(index, element){
                                selector.append($('<option>', {
                                    value: index,
                                    text: element
                                }));
                            })    
                            selector.prop('disabled', false); 
                        }
                    }
                })
            }
        });
        
        $.datetimepicker.setLocale('vi');
        $('input[name="dob"], input[name="cmnd_publish"]').datetimepicker({
            timepicker: false,
            format:'d-m-Y'
        });

        $('.textarea').slimScroll({
            height: '300px'
        });

        $('formWelcome').validate({
            rules: {
                phone:{
                    required: true
                },
                cmnd: {
                    required: true
                }   
            }
        });
        // $(document).on('change','select[name="payment_pack"]', function(obj){
        //     var rate = $(this).val();
        //     $('select[name="service_type"]')
        // });
    });

</script>