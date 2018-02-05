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
    
    <!-- Bracket CSS -->
    <?= $this->Html->css('/css/bracket.css'); ?>
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Polygon Portal <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">Cổng ứng dụng & dịch vụ trực truyến</div>
        <div class="form-group">
            
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->
        <button type="button" class="btn btn-info btn-block" onClick='javascipt:window.location.href="fblogin"'>Đăng nhập qua Facebook</button>        
        <button type="submit" class="btn btn-info btn-block">Mã truy cập nhanh</button>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <?= $this->Html->script('/lib/jquery/jquery.js'); ?>
    <?= $this->Html->script('/lib/popper.js/popper.js'); ?>
    <?= $this->Html->script('/lib/bootstrap/bootstrap.js'); ?>
  </body>
</html>
