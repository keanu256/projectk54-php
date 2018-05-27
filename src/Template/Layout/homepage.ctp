<!DOCTYPE html>
<html lang="zxx">
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
	<body class="one-page" data-spy="scroll" data-target=".header-nav-main nav" data-offset="150">
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
				console.log(urlParams.get('scrollTo'));
				initCaptcha();
			})

			function backToHomePage(){
				$(location).attr('href', '<?= $this->Url->build(['controller'=>'Pages','action'=>'index']) ?>')
			}

			function initCaptcha(){

				var input_height = $('#captcha_input_text').parent().height();
				var input_width = $('#captcha_input_text').parent().width();
				var base_link = '<?= $this->Url->build(['controller'=>'Pages','action'=>'captcha']) ?>';
				var full_link = base_link + '?height=' + input_height + '&width=' + input_width;
				var captcha_html = '<img src="' + full_link +'" id="captcha_img"\
				 data-toggle="tooltip" data-placement="top" title="" \
				 data-original-title="Nhấn vào để thay đổi">';
				 
				$('#captcha_div').append(captcha_html);
				$('#captcha_img').tooltip();

				$('#captcha_img').on('click',function(){
					$(this).attr('src',full_link);
				})
			}
		</script>
	</body>
</html>