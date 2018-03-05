<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Website đang bảo trì</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <?= $this->Html->css('/errorpage/css/base.css')?>
   <?= $this->Html->css('/errorpage/css/main.css')?>
   <?= $this->Html->css('/errorpage/css/vendor.css')?>
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">    

   <!-- script
   ================================================== -->
   <?= $this->Html->script('/errorpage/js/modernizr.js')?>
</head>

<body>

	<!-- header 
   ================================================== -->
   <header class="main-header">
   	<div class="row">
   		<div class="logo">
	         <a href="index.html">bSquare</a>
	      </div>   		
   	</div>   

   	<a class="menu-toggle" href="#"><span>Menu</span></a>	
   </header> <!-- /header -->

   <!-- navigation 
   ================================================== -->
   <nav id="menu-nav-wrap">

   	<h5>Main Menu</h5>   	
		<ul class="nav-list">
			<li><a href="#" title="">Home</a></li>
			<li><a href="#" title="">About</a></li>
			<li><a href="#" title="">Portfolio</a></li>
			<li><a href="#" title="">Blog</a></li>
			<li><a href="#" title="">FAQ</a></li>					
			<li><a href="#" title="">Contact</a></li>					
		</ul>

		<h5>About Us</h5>  
		<p>Lorem ipsum Non non Duis adipisicing pariatur eu enim Ut in aliqua dolor esse sed est in sit exercitation eiusmod aliquip consequat.</p>

	</nav>

	<!-- main content
   ================================================== -->
   <main id="main-404-content" class="main-content-static">

   	<div class="content-wrap">

		   <div class="shadow-overlay"></div>

		   <div class="main-content">
		   	<div class="row">
		   		<div class="col-twelve">
					<h1 class="kern-this">ERROR.503</h1>
					<p>
					Hệ thống đang bảo trì, bạn vui lòng truy cập lại sau ^_^.
					</p>
			   	</div> <!-- /twelve --> 		   			
		   	</div> <!-- /row -->    		 		
		   </div> <!-- /main-content --> 

		   <footer>
		   	<div class="row">

		   		<div class="col-seven tab-full social-links pull-right">
			   		<ul>
				   		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					      <li><a href="#"><i class="fa fa-skype"></i></a></li>
					      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
					      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					      <li><a href="#"><i class="fa fa-instagram"></i></a></li>   			
				   	</ul>
			   	</div>
		   			
		  			<div class="col-five tab-full bottom-links">
			   		<ul class="links">
				   		<li><a href="#">Home</a></li>
				         <li><a href="#">About</a></li>
				         <li><a href="#">Contact</a></li>			                    
				   	</ul>

				   	<div class="credits">
				   		<p>Designed by <a href="http://www.skyeye-themes.com/" title="Skyeye Themes">Skyeye Themes</a></p>
				   	</div>
			   	</div>   		   		

		   	</div> <!-- /row -->    		  		
		   </footer>

		</div> <!-- /content-wrap -->
   
   </main> <!-- /main-404-content -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <?= $this->Html->script('/errorpage/js/jquery-2.1.3.min.js')?>
   <?= $this->Html->script('/errorpage/js/plugins.js')?>
   <?= $this->Html->script('/errorpage/js/main.js')?>
</body>

</html>