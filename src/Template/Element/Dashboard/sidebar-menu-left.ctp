<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>Polygon Portal<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9" style="font-size: 1.5vh;">BẢNG ĐIỀU KHIỂN </label>
    <div class="br-sideleft-menu">
        <?php foreach ($layouts['sidebar_menu_left'] as $key => $value): ?>
        <a menu-t="<?= empty($value->sidebar_left_child)? 0:1; ?>" href="#" class="br-menu-link pa-link <?= ($key == 0)? 'active':''; ?>" function-id="<?= $value->functionid ?>">
            <div class="br-menu-item" <?= ($value->position == 9999)? 'style="color:yellow;"':''; ?> >  
                <i class="<?= $value->icon ?>"></i>
                <span class="menu-item-label"><?= $value->name ?></span> 
            <?php if(empty($value->sidebar_left_child)): ?>
                </div>
                <!-- menu-item -->
            <?php else: ?>
                <i class="menu-item-arrow fa fa-angle-down"></i></div>
                <!-- menu-item -->
                <ul class="br-menu-sub nav flex-column">
                <?php foreach ($value->sidebar_left_child as $key => $child): ?>
                    <li class="nav-item">
                        <a menu-t="1" href="#" class="nav-link ch-link" function-id="<?= $child->functionid ?>"><?= $child->name ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>         
        </a>        
        <!-- br-menu-link -->
        <?php endforeach; ?>
    </div>
    <!-- br-sideleft-menu -->
    <br>
</div>
    <!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>    
    $(function() {
        $(document).on('click','.br-sideleft-menu a',function(){
            var funcID = $(this).attr('function-id');
            resetMenuActive();
            $(this).addClass('active');
            if($(this).attr('menu-t') == 1){
                $(this).closest('ul').prev('.pa-link').addClass('active');
            }
            //$('.br-mainpanel').empty();
            //$('.br-mainpanel').append('<?= $this->Element('Dashboard/footer') ?>');
        });    
    });

    function resetMenuActive(){
        $('.br-sideleft-menu').find('.pa-link , .ch-link').removeClass('active').focusout();
    }
</script>