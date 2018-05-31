<!DOCTYPE html>
<html lang="vn">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Polygon Việt Nam | Giải pháp kỷ nguyên 4.0</title>	

		<meta name="keywords" content="Thiết kế web, thiết kế ứng dụng, IT, IOT, Kỷ nguyên 4.0, Công nghệ số, Giải pháp dịch vụ, Polygon" />
		<meta name="description" content="Polygon Việt Nam | Giải pháp kỷ nguyên 4.0">
		<meta name="author" content="polygonvietnam.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<?= $this->Html->css('/homepage/vendor/bootstrap/css/bootstrap.min.css') ?>
		<?= $this->Html->css('/homepage/vendor/font-awesome/css/fontawesome-all.min.css') ?>
		<?= $this->Html->css('/homepage/vendor/animate/animate.min.css') ?>
		<?= $this->Html->css('/homepage/vendor/linear-icons/css/linear-icons.min.css') ?>
		<?= $this->Html->css('/homepage/vendor/owl.carousel/assets/owl.carousel.min.css') ?>
		<?= $this->Html->css('/homepage/vendor/owl.carousel/assets/owl.theme.default.min.css') ?>
		<?= $this->Html->css('/homepage/vendor/magnific-popup/magnific-popup.min.css') ?>

		<!-- Theme CSS -->
		<?= $this->Html->css('/homepage/css/theme.css') ?>
		<?= $this->Html->css('/homepage/css/theme-elements.css') ?>

		<!-- Current Page CSS -->
		<?= $this->Html->css('/homepage/vendor/rs-plugin/css/settings.css') ?>
		<?= $this->Html->css('/homepage/vendor/rs-plugin/css/layers.css') ?>
		<?= $this->Html->css('/homepage/vendor/rs-plugin/css/navigation.css') ?>

		<!-- Skin CSS -->
		<?= $this->Html->css('/homepage/css/skins/default.css') ?> 

		<!-- Theme Custom CSS -->
		<?= $this->Html->css('/homepage/css/custom.css') ?>

		<!-- Head Libs -->
		<?= $this->Html->script('/homepage/vendor/modernizr/modernizr.min.js') ?>

	</head>
	<body class="one-page loading-overlay-showing" data-spy="scroll" data-target=".header-nav-main nav" data-offset="150" data-loading-overlay>
		
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="pl-overlay" id="loading_waiting" style="display:none">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div
	
		<div class="body">
			<div role="main" class="main">
				<?= $this->fetch('content') ?>
				<?= $this->Element('Homepage/Footer/footer')?>
			</div>
		</div>

		

		<!-- Vendor -->
		<?= $this->Html->script('/homepage/vendor/jquery/jquery.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/jquery.appear/jquery.appear.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/jquery.easing/jquery.easing.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/jquery-cookie/jquery-cookie.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/common/common.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/jquery.validation/jquery.validation.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/jquery.gmap/jquery.gmap.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/jquery.lazyload/jquery.lazyload.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/isotope/jquery.isotope.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/owl.carousel/owl.carousel.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/magnific-popup/jquery.magnific-popup.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/vide/vide.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/vivus/vivus.min.js') ?>
		<?= $this->Html->script('/lib/sweetalert2/sweetalert2.all.js') ?>
		
		<!-- Theme Base, Components and Settings -->
		<?= $this->Html->script('/homepage/js/theme.js') ?>
		
		<!-- Current Page Vendor and Views -->
		<?= $this->Html->script('/homepage/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') ?>
		<?= $this->Html->script('/homepage/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>

		<!-- Current Page Vendor and Views -->
		<?= $this->Html->script('/homepage/js/views/view.contact.js') ?>

		
		<!-- Theme Custom -->
		<?= $this->Html->script('/homepage/js/custom.js') ?>
		
		<!-- Theme Initialization Files -->
		<?= $this->Html->script('/homepage/js/theme.init.js') ?>

		<!-- Examples -->
		<?= $this->Html->script('/homepage/js/examples/examples.portfolio.js') ?>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-115093251-1', 'auto');
			ga('send', 'pageview');

			$(function(){
				var urlParams = new URLSearchParams(window.location.search);
				if(urlParams.get('scrollTo') != null) console.log(urlParams.get('scrollTo'));
				initCaptcha();
				$('#btn_dangnhap').on('click touchend',function(){
					var formData = $(this).closest('form');
					$('#loading_waiting').show();
					$.ajax({
						url: "<?php echo $this->Url->build(['controller'=>'Users','action'=>'polygonLogin']) ?>",
						data: formData.serialize(),
						type: 'post',
						success: function(res){
							$('#loading_waiting').hide();
							if (res.code == 200) {
								swal({
									title: 'Đăng nhập thành công!',
									text: 'Tự động chuyển hướng sau 3 giây.',
									timer: 3000,
									onOpen: () => {
										swal.showLoading()
									}
									}).then((result) => {
									if (result.dismiss === swal.DismissReason.timer) {
										window.location.href = res.referer
									}
								})
							}else{
								swal({
									type: 'error',
									title: 'ERROR CODE: ' + res.code.toString(),
									text: res.msg,
									confirmButtonText: 'Xác nhận',
									footer: '<a href="/faq/error/'+res.code.toString()+'">Tại sao tôi lại bị vấn đề này?</a>',
								})
							}
						}
					});				
				})

				$('#btn_dangky').on('click touchend',function(){
					var formData = $(this).closest('form');
					$('#loading_waiting').show();
					$.ajax({
						url: "<?php echo $this->Url->build(['controller'=>'Users','action'=>'polygonRegister']) ?>",
						data: formData.serialize(),
						type: 'post',
						success: function(res){
							$('#loading_waiting').hide();
							$('#captcha_img').trigger('click');
							if (res.code == 200) {
								swal({
									type: 'success',
									title: 'SUCCESS CODE: ' + res.code.toString(),
									text: res.msg,
									confirmButtonText: 'Xác nhận'
								})
							}else{
								swal({
									type: 'error',
									title: 'ERROR CODE: ' + res.code.toString(),
									text: res.msg,
									confirmButtonText: 'Xác nhận',
									footer: '<a href="/faq/error/'+res.code.toString()+'">Tại sao tôi lại bị vấn đề này?</a>',
								})
							}
						},
						error: function(){
							$('#captcha_img').trigger('click');
						}
					});
				})

			})

			function goToPage(number){
				switch(number){
					case 0 : 
						$(location).attr('href', '<?= $this->Url->build(['controller'=>'Pages','action'=>'index']) ?>');
						break;
					case 1 : 
						$(location).attr('href', '<?= $this->Url->build(['controller'=>'Pages','action'=>'register']) ?>');
						break;
					case 2 : 
						$(location).attr('href', '<?= $this->Url->build(['controller'=>'Users','action'=>'login']) ?>');
						break;
				}		
			}

			function initCaptcha(){

				var input_height = $('#captcha_input_text').parent().height();
				var input_width = $('#captcha_input_text').parent().width();
				var base_link = '<?= $this->Url->build(['controller'=>'Pages','action'=>'captcha']) ?>';
				var full_link = base_link + '?height=' + input_height + '&width=' + input_width;
				var captcha_html = '<img src="' + full_link + '&time=' + Math.random() +'" id="captcha_img"\
				 data-toggle="tooltip" data-placement="top" title="" \
				 data-original-title="Nhấn vào để thay đổi">';
				 
				$('#captcha_div').append(captcha_html);
				$('#captcha_img').tooltip();

				$('#captcha_img').on('click',function(){ 
					$(this).attr('src',full_link + '&time=' + Math.random());
				})
			}

			function activeAccount(){
				$('#sendMailActiveAccount').find('.btn.btn-primary').prop('disabled', true);			
				$.ajax({
					url: '<?= $this->Url->build(['controller' => 'Users', 'action' => 'activeAccount']) ?>',
					type: 'post',
					data: { email: $('#sendMailActiveAccount').find('input').val()},
					success: function(res){
						$('#sendMailActiveAccount').find('.btn.btn-primary').prop('disabled', false);	
						if (res.code == 200) {
							swal({
								type: 'success',
								title: 'SUCCESS CODE: ' + res.code.toString(),
								text: res.msg,
								confirmButtonText: 'Xác nhận'
							})
						}else{
							swal({
								type: 'error',
								title: 'ERROR CODE: ' + res.code.toString(),
								text: res.msg,
								confirmButtonText: 'Xác nhận',
								footer: '<a href="/faq/error/'+res.code.toString()+'">Tại sao tôi lại bị vấn đề này?</a>',
							})
						}
					}
				})
			}

		</script>
	</body>
</html>