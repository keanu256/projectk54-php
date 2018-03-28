<?php 
    $session = $this->request->session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<?= $this->Html->css('/homepage/css/vendor/owl.carousel.css') ?>
    <?= $this->Html->css('/homepage/css/vendor/magnific-popup.css') ?>
    <?= $this->Html->css('/lib/font-awesome/css/font-awesome.css') ?> 
	<?= $this->Html->css('/homepage/css/style.css') ?>

	<title>Polygon Viet Nam | Trang Chủ</title>
</head>
<body>   
    <?php if($session->read('Auth.User.username') != null): ?> 
        <?= $this->Element('Homepage/Header/header_logged_in') ?>	
    <?php else: ?>
        <?= $this->Element('Homepage/Header/header_non_login') ?>	
    <?php endif; ?>

<?= $this->Element('Homepage/main_menu') ?>	
    
<?= $this->fetch('content'); ?> 

<?= $this->Element('Homepage/footer') ?>	
<?= $this->Element('Homepage/svg_icon') ?>
<!-- jQuery -->
<?= $this->Html->script('/homepage/js/vendor/jquery-1.11.1.min.js') ?>
<!-- XM Accordion -->
<?= $this->Html->script('/homepage/js/vendor/jquery.xmaccordion.min.js') ?>
<!-- Owl Carrousel -->
<?= $this->Html->script('/homepage/js/vendor/owl.carousel.min.js') ?>
<!-- Magnific Popup -->
<?= $this->Html->script('/homepage/js/vendor/jquery.magnific-popup.min.js') ?>
<!-- imgLiquid -->
<?= $this->Html->script('/homepage/js/vendor/imgLiquid-min.js') ?>
<!-- Socket.IO -->
<?= $this->Html->script('socket.io.js') ?>
<!-- Header -->
<?= $this->Html->script('/homepage/js/header.js') ?>
<!-- Menu -->
<?= $this->Html->script('/homepage/js/menu.js') ?>
<!-- Home -->
<?= $this->Html->script('/homepage/js/home.js') ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115093251-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-115093251-1');
</script>
</body>
</html>