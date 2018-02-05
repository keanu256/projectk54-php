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
