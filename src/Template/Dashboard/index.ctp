<style>
    .function-box{
        min-height: 240px;
    }

    .func-img img{
        margin: 0 auto;
        width: 8vw;
        height: 8vw;
        display: block;
    }

    .func-title{
        margin-top: 15px;
        text-align:center;     
        font-size: 1.3em;
        text-transform: uppercase;
        background: #02c0ce;
    }
    .func-title a{
        color: white;
        
    }
    #func-main-panel .card-box{
        border: 2px #02c0ce dashed;
    }
    #func-main-panel .card-box:hover{
        cursor:pointer;
    }
    #func-main-panel .card-box:hover img{
        transform: scale(0.8);
    }
    @media (max-width: 480px) {
        .func-img img{
            margin: 0 auto;
            width: 120px;
            height: 120px;
            display: block;
        }
    }
    
</style>
<?= $this->Element('Dashboard/license_warning') ?>
<div class="row mt-5" id="func-main-panel"> 
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-box">
                    <div class="func-img">
                        <?= $this->Html->image('flaticon/svg-1/170-package.svg') ?>
                    </div>
                    <div class="func-title">
                        <?= $this->Html->link('sản phẩm',['controller'=>'Dashboard','action'=>'index']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="func-img">
                        <?= $this->Html->image('flaticon/svg-1/087-package-2.svg') ?>
                    </div>
                    <div class="func-title">
                        <?= $this->Html->link('Kho hàng',['controller'=>'Dashboard','action'=>'index']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="func-img">
                        <?= $this->Html->image('flaticon/svg-1/139-salesman.svg') ?>
                    </div>
                    <div class="func-title">
                        <?= $this->Html->link('nhân viên',['controller'=>'Dashboard','action'=>'index']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="func-img">
                        <?= $this->Html->image('flaticon/svg-1/120-bill-1.svg') ?>
                    </div>
                    <div class="func-title">
                        <?= $this->Html->link('đơn hàng',['controller'=>'Dashboard','action'=>'index']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="func-img">
                        <?= $this->Html->image('flaticon/svg-1/131-delivery-truck-2.svg') ?>
                    </div>
                    <div class="func-title">
                        <?= $this->Html->link('nhà cung cấp',['controller'=>'Dashboard','action'=>'index']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="func-img">
                        <?= $this->Html->image('flaticon/svg-1/017-tickets.svg') ?>
                    </div>
                    <div class="func-title">
                        <?= $this->Html->link('hội viên',['controller'=>'Dashboard','action'=>'index']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $(document).on('click touchstart','#func-main-panel .card-box', function(){
            var func_box = $(this);
            var link = func_box.find('.func-title>a')[0].baseURI;
            location.href = link;
        });
    })   
</script>
