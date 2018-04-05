<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?= $this->Html->css('/lib/bootstrap4/bootstrap.min.css')?>
    <?= $this->Html->css('/cpanelpage/pretty-checkbox.min.css') ?>
</head>
<body>
    <div class="container">
        <div class"row">
            <div class="form-group">
                <label>Địa chỉ (Số nhà + Tên đường)</label>
                <input name="street" class="form-control" type="text" value='<?= $userAddress['street'] ?>'/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Vùng miền</label>
                    <?= $this->Form->select(
                        'khu_vuc',
                        $khu_vuc,
                        [
                            'multiple' => false,
                            'class' => 'form-control',
                            'value' => isset($userAddress['zone'])?$userAddress['zone']:0
                        ]
                    )?>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Tỉnh/Thành phố</label>
                    <?= $this->Form->select(
                        'tinh_thanhpho',
                        $tinh_thanhpho,
                        [
                            'multiple' => false,
                            'class' => 'form-control',
                            'value' => $userAddress['city']
                        ]
                    )?>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Quận/Huyện</label>
                    <?= $this->Form->select(
                        'quan_huyen',
                        $quan_huyen,
                        [
                            'multiple' => false,
                            'class' => 'form-control',
                            'value' => $userAddress['district']
                        ]
                    )?>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Phường/Xã</label>
                    <?= $this->Form->select(
                        'phuong_xa',
                        $phuong_xa,
                        [
                            'multiple' => false,
                            'class' => 'form-control',
                            'value' => $userAddress['ward']
                        ]
                    )?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="pretty p-default p-curve">
                    <input type="radio" name="color" />
                    <div class="state p-info-o">
                        <label>Nhà riêng</label>
                    </div>
                </div>

                <div class="pretty p-default p-curve">
                    <input type="radio" name="color" />
                    <div class="state p-info-o">
                        <label>Cơ quan</label>
                    </div>
                </div>

                <div class="pretty p-default p-curve">
                    <input type="radio" name="color" />
                    <div class="state p-info-o">
                        <label>Khác</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Html->script('/lib/jquery/jquery-3.3.1.min.js')?>
    <?= $this->Html->script('/lib/bootstrap4/bootstrap.min.js')?>
    <script>
        var default_address_flag = 0;
        $(function() {
            $(document).on('change','select[name="khu_vuc"]', function(obj){
                var selected_value = $(this).val();
                if(selected_value != 0){
                    $.ajax({
                        url: '/api/'+'<?= $apiVersion ?>'+'/cities/json?key=20&zone=' + selected_value,
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
                        url: '/api/'+'<?= $apiVersion ?>'+'/districts/json?key=20&city_id=' + selected_value,
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
                        url: '/api/'+'<?= $apiVersion ?>'+'/wards/json?key=20&district_id=' + selected_value,
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
        });

    </script>
</body>
</html>