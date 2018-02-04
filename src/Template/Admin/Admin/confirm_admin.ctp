<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <?= $this->Html->css('/lib/font-awesome/css/font-awesome.css'); ?>
    <?= $this->Html->css('/lib/Ionicons/css/ionicons.css'); ?>
    
    <!-- Bracket CSS -->
    <?= $this->Html->css('/css/bracket.css'); ?>
  </head>

  <body>
    <style>
        .passcode{
            position: relative;
            text-align: center;
            font-size: 18px;
        }
    </style>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="form-group">
            <input id="pcode" type="password" class="form-control passcode" maxlength='6'>             
        </div><!-- form-group -->
        <button type="button" class="btn btn-info btn-block">Xác nhận</button>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <?= $this->Html->script('/lib/jquery/jquery.js'); ?>
    <?= $this->Html->script('/lib/popper.js/popper.js'); ?>
    <?= $this->Html->script('/lib/bootstrap/bootstrap.js'); ?>
    <script>
        $(document).on('click','.btn.btn-info.btn-block', function(){
            $.ajax({
                url: '/cpanel/confirm',
                method: 'post',
                data: {passcode: $('#pcode').val()},
                success: function(res){
                    let data = JSON.parse(res);
                    if(data.code == 200){
                        window.location.href="";
                    }else{
                        console.log('error');
                    }
                },
                error: function(){

                }
            })
        });
    </script>
  </body>
</html>
