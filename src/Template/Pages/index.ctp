<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>SWAT - Business & Corporate HTML Template</title>
<!-- Bootstrap Css -->
<?= $this->Html->css('/homepage/assets/bootstrap/css/bootstrap.min.css') ?>
<!-- Normalize Css -->
<?= $this->Html->css('/homepage/assets/Normalize/normalize.css') ?>
<!--Font Awesome Css-->
<?= $this->Html->css('/homepage/assets/font-awesome/css/font-awesome.min.css') ?>
<!--Linear icon Css-->
<?= $this->Html->css('/homepage/assets/linearicons/css/icon-font.min.css') ?>
<!--Animate Css-->
<?= $this->Html->css('/homepage/assets/animate/animate.css') ?>
<!--Owl carousel css-->
<?= $this->Html->css('/homepage/assets/owlcarousel/css/owl.carousel.css') ?>
<?= $this->Html->css('/homepage/assets/owlcarousel/css/owl.theme.css') ?>
<!--Portfolio Css-->
<?= $this->Html->css('/homepage/assets/css/ionicons.min.css') ?>
<?= $this->Html->css('/homepage/assets/css/magnific-popup.css') ?>
<!--Slicknav Css-->
<?= $this->Html->css('/homepage/assets/slicknav/slicknav.css') ?>
<!--Custum Css-->
<?= $this->Html->css('/homepage/css/style.css') ?>
<!--Responsive Css-->
<?= $this->Html->css('/homepage/css/responsive.css') ?>
<!--Modernizr Js-->
<?= $this->Html->script('/homepage/js/vendor/modernizr-3.5.0.min.js') ?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <?= $this->Html->script('/homepage/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') ?>
      <?= $this->Html->script('/homepage/https://oss.maxcdn.com/respond/1.4.2/respond.min.js') ?>
    <![endif]-->
</head>
<body>
<!-- Pre Loader -->
<div id="loader"></div>
<!--Header-->
<header id="home">
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <!-- START LOGO -->
          <div class="logo"> <a href="index.html">POLYGON VN</a> </div>
          <!-- END LOGO -->
          <div class="mobile-nav"></div>
        </div>
        <div class="col-md-9">
          <!-- START MAIN MENU -->
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header"> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
              <div class="navigation">
                <ul class="nav navbar-nav">
                  <li><a href="#home">Trang chủ</a>
                    <ul class="drop-down">
                      <li><a href="index.html">Home-Version 1</a></li>
                      <li><a href="index-1.html">Home-Version 2</a></li>
                      <li><a href="index-2.html">Home-Version 3</a></li>
                      <li><a href="index-3.html">Home-Version 4</a></li>
                      <li><a href="index-4.html">Home-Version 5</a></li>
                      <li><a href="index-5.html">Home-Version 6</a></li>
                      <li><a href="index-6.html">Home-Version 7</a></li>
                      <li><a href="index-7.html">Home-Version 8</a></li>
                      <li><a href="index-8.html">Home-Version 9</a></li>
                      <li><a href="index-9.html">Home-Version 10</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Pages</a>
                    <ul class="drop-down">
                      <li><a href="about-1.html">About Us-1</a></li>
                      <li><a href="about-2.html">About Us-2</a></li>
                      <li><a href="about-3.html">About Us-3</a></li>
                      <li><a href="about-4.html">About Us-4</a></li>
                      <li><a href="about-5.html">About Us-5</a></li>
                      <li><a href="faq.html">Faq Page</a></li>
                      <li><a href="pricing-table.html">Pricing Table</a></li>
                      <li><a href="404.html">404 Page</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Services</a>
                    <ul class="drop-down">
                      <li><a href="service-1.html">Service-1</a></li>
                      <li><a href="service-2.html">Service-2</a></li>
                      <li><a href="service-3.html">Service-3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Shortcodes</a>
                    <ul class="drop-down">
                      <li><a href="accordion.html">Accordion</a></li>
                      <li><a href="tab.html">Tab</a></li>
                      <li><a href="button.html">Button</a></li>
                      <li><a href="counter.html">Counter</a></li>
                      <li><a href="team.html">Team</a></li>
                      <li><a href="features.html">Features</a></li>
                      <li><a href="client.html">Client</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Portfolio</a>
                    <ul class="drop-down">
                      <li><a href="portfolio-one.html">Portfolio-one</a></li>
                      <li><a href="portfolio-two.html">Portfolio-two</a></li>
                      <li><a href="portfolio-three.html">Portfolio-three</a></li>
                      <li><a href="portfolio-four.html">Portfolio-four</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blogs</a>
                    <ul class="drop-down">
                      <li><a href="blog-single.html">Blog-single</a></li>
                      <li><a href="blog-grid.html">Blog-grid</a></li>
                      <li><a href="blog-classic.html">Blog-classic</a></li>
                    </ul>
                  </li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <!-- /.navbar-collapse -->
          </nav>
          <!-- END MAIN MENU -->
        </div>
      </div>
    </div>
  </div>
  <!-- Start Particle area -->
  <section id="particle-area" class="particle-area">
    <div id="particles-js"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-8 col-md-offset-2">
            <div class="banner-text text-center">
              <h1 class="font-w-8 font-30 ltr-s-1 pb-10 color-w">HELLO FROM <span class="color">SWAT</span> THEMES</h1>
              <h3 class="font-w-8 font-55 ln-h-70 color-w">THE <span class="color">BEST</span> SOLUTION FOR <br>
                YOUR <span class="color">BUSINESS</span></h3>
              <p class="font-w-6 color-w ln-h-30 font-14 pb-20">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution </p>
              <a href="#contactus" class="btn smoth-scroll">Contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Particle area -->
</header>
<div class="clearfix"></div>
<section id="services_3" class="services_3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title ptb-10">
          <h2 class="font-w-8 ln-h-40"><span class="color">THE</span> BEST EXPERIENCE <BR>
            FROM THE EXPERTS</h2>
          <p class="font-w-6">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
        </div>
        <div class="section_3 center">
          <!-- Single Service Start -->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="item"> <i class="fa fa-desktop pt-20"></i>
              <h4>Web Design</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="item"> <i class="fa fa-wordpress pt-20"></i>
              <h4>Web Development</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="item"> <i class="fa fa-mobile-phone pt-20"></i>
              <h4>Mobile App Development</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="item"> <i class="fa fa-gamepad pt-20"></i>
              <h4>Online Marketing</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="item"> <i class="fa fa-camera-retro pt-20"></i>
              <h4>Photography</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="item"> <i class="fa fa-shield pt-20"></i>
              <h4>SEO</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.</p>
            </div>
          </div>
          <!-- Single Service End -->
          <!-- Single Service Start -->
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"> </div>
<!--Purchase-sec-->
<div class="color-bg-b p-30 mtb-30">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-8">
          <h3 class="color-w pb-10 font-26">Purchase New Business template now !</h3>
          <p class="color-w ln-h-23 font-w-6">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical <br>
            Latin literature from 45 BC, making it over 2000 years old</p>
        </div>
        <div class="col-md-4 pt-20 pull-right center"> <a class="btn-two" href="#">Purchase Now</a> </div>
      </div>
    </div>
  </div>
</div>
<!--What We Do-->
<section id="wt-wedo-section" class="wt-wedo-section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6 pt-20">
          <h2 class="font-w-8 ptb-20 txt-lft"><span class="color">WhAT </span>WE DO</h2>
          <p class="font-w-6 txt-lft ln-h-23 pb-20">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
          <div class="col-md-6 pb-25">
            <h3 class="font-20"><span class="color font-w-8 font-26 pr-10">01</span>Responsive Design</h3>
            <p class="font-14 font-w-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
          </div>
          <div class="col-md-6 pb-25">
            <h3 class="font-20"><span class="color font-w-8 font-26 pr-10">01</span>Advertisement</h3>
            <p class="font-14 font-w-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
          </div>
          <div class="col-md-6">
            <h3 class="font-20"><span class="color font-w-8 font-26 pr-10">01</span>Digital Services</h3>
            <p class="font-14 font-w-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
          </div>
          <div class="col-md-6">
            <h3 class="font-20"><span class="color font-w-8 font-26 pr-10">01</span>Marketing Solution</h3>
            <p class="font-14 font-w-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
          </div>
        </div>
        <div class="col-md-6"> <?= $this->Html->image("/homepage/images/men-2.png",['class' => 'img-responsive']) ?> </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--Faq start-->
<section id="faq-section" class="faq-section">
  <div class="container">
    <!--Sec Title-->
    <div class="section-title m-0">
      <h2 class="font-w-8 txt-lft"><span class="color">F</span>AQ & <span class="color">L</span>ATEST WORK</h2>
      <p class="font-w-6 txt-lft">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
    </div>
    <div class="row clearfix">
      <div class="column col-md-6 col-sm-12 col-xs-12 pt-20">
        <!--Accordion Box-->
        <ul class="accordion-box">
          <!--Block-->
          <li class="accordion block mb-20">
            <div class="acc-btn">
              <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
              Doing the right thing Grow Up Your Business?</div>
            <div class="acc-content">
              <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </li>
          <!--Block-->
          <li class="accordion block mb-20">
            <div class="acc-btn active">
              <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
              How to Create Contents That Get Traffic.</div>
            <div class="acc-content current">
              <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </li>
          <!--Block-->
          <li class="accordion block mb-20">
            <div class="acc-btn">
              <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
              Doing the right thing Grow Up Your Business?</div>
            <div class="acc-content">
              <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </li>
          <!--Block-->
          <li class="accordion block mb-20">
            <div class="acc-btn">
              <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
              Doing the right thing Grow Up Your Business?</div>
            <div class="acc-content">
              <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </li>
          <!--Block-->
          <li class="accordion block">
            <div class="acc-btn">
              <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
              Doing the right thing Grow Up Your Business?</div>
            <div class="acc-content">
              <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="column col-md-6 col-sm-12 col-xs-12">
        <!--News Block-->
        <?= $this->Html->image("/homepage/images/img-3.jpg",['class' => 'img-responsive']) ?>
        <!--End News Block-->
      </div>
    </div>
  </div>
</section>
<!--Faq end-->
<div class="clearfix"></div>
<!--Section start-->
<div class="section-part">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <h3 class="center font-w-8 ptb-10 color">PROFESSIONAL THEMES HOPE YOU ENJOY IT.</h3>
        <div class="col-md-4">
          <div class="sec mtb-40">
            <h5 class="txt-rgt font-w-8">Awesome Ideas <i class="fa fa-lightbulb-o ml-15"></i></h5>
            <p class="txt-rgt">Lorem ipsum dolor sit amet, consectu adipisicing elit, sed do eiusmod adipti rincididunt ut labore</p>
          </div>
          <div class="sec">
            <h5 class="txt-rgt font-w-8">Creative Design <i class="fa fa-delicious ml-15"></i></h5>
            <p class="txt-rgt">Lorem ipsum dolor sit amet, consectu adipisicing elit, sed do eiusmod adipti rincididunt ut labore</p>
          </div>
        </div>
        <div class="col-md-4"> <?= $this->Html->image("/homepage/images/sec-img.png",['class' => 'img-responsive']) ?> </div>
        <div class="col-md-4">
          <div class="sec mtb-40 txt-lft">
            <h5 class="txt-lft font-w-8"><i class="fa fa-tablet mr-15"></i> Fully Responsive</h5>
            <p class="txt-lft">Lorem ipsum dolor sit amet, consectu adipisicing elit, sed do eiusmod adipti rincididunt ut labore</p>
          </div>
          <div class="sec">
            <h5 class="txt-lft font-w-8"><i class="fa fa-life-ring mr-15"></i> Full Support</h5>
            <p class="txt-lft">Lorem ipsum dolor sit amet, consectu adipisicing elit, sed do eiusmod adipti rincididunt ut labore</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Section end-->
<div class="image-bg center">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="image-content ptb-50">
          <h2 class="text-center ln-h-50 color-w">WE ARE <span class="color">CREATIVE</span> DIGITAL AGENCY <span class="color">STUDIO</span></h2>
          <h6 class="text-center color-w mtb-30 font-18 font-w-1">Choose from different layouts and templates and creating a whole new layout.</h6>
          <a class="btn-two" href="#">Purchase Now</a> </div>
      </div>
    </div>
  </div>
</div>
<!--Blog start-->
<section id="blog" class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title ptb-20">
          <h2 class="font-w-8"><span class="color">O</span>UR BLOG</h2>
          <p class="font-w-6">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="item-blog bx-shadow">
            <!-- part img-->
            <div class="img-blog"> <?= $this->Html->image("/homepage/images/blog1.jpg",['class' => 'img-responsive']) ?> <a href="blog-single.html"><strong>20</strong><br>
              Dec<br>
              2017 </a> </div>
            <!-- part content -->
            <div class="content-blog text-center p-15"> <a href="blog-single.html">
              <h6 class="font-16 ptb-15 font-w-8 ltr-s-2">Amazing blog</h6>
              </a>
              <p class="font-w-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
              <a href="blog-single.html" class="btn-blg font-w-6">READ MORE <i class="fa fa-arrow-right font-15"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="item-blog bx-shadow">
            <!-- part img-->
            <div class="img-blog"> <?= $this->Html->image("/homepage/images/blog2.jpg",['class' => 'img-responsive']) ?> <a href="blog-single.html"><strong>20</strong><br>
              Dec<br>
              2017 </a> </div>
            <!-- part content -->
            <div class="content-blog text-center p-15"> <a href="blog-single.html">
              <h6 class="font-16 ptb-15 font-w-8 ltr-s-2">Amazing blog</h6>
              </a>
              <p class="font-w-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
              <a href="blog-single.html" class="btn-blg font-w-6">READ MORE <i class="fa fa-arrow-right font-15"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="item-blog bx-shadow">
            <!-- part img-->
            <div class="img-blog"> <?= $this->Html->image("/homepage/images/blog3.jpg",['class' => 'img-responsive']) ?> <a href="blog-single.html"><strong>20</strong><br>
              Dec<br>
              2017 </a> </div>
            <!-- part content -->
            <div class="content-blog text-center p-15"> <a href="blog-single.html">
              <h6 class="font-16 ptb-15 font-w-8 ltr-s-2">Amazing blog</h6>
              </a>
              <p class="font-w-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
              <a href="blog-single.html" class="btn-blg font-w-6">READ MORE <i class="fa fa-arrow-right font-15"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="item-blog bx-shadow">
            <!-- part img-->
            <div class="img-blog"> <?= $this->Html->image("/homepage/images/blog4.jpg",['class' => 'img-responsive']) ?> <a href="blog-single.html"><strong>20</strong><br>
              Dec<br>
              2017 </a> </div>
            <!-- part content -->
            <div class="content-blog text-center p-15"> <a href="blog-single.html">
              <h6 class="font-16 ptb-15 font-w-8 ltr-s-2">Amazing blog</h6>
              </a>
              <p class="font-w-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
              <a href="blog-single.html" class="btn-blg font-w-6">READ MORE <i class="fa fa-arrow-right font-15"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--Blog end-->
<!--Client start-->
<div class="client">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title  ptb-20">
          <h2 class="font-w-8 txt-lft"><span class="color">O</span>UR Sponser</h2>
          <p class="font-w-6 txt-lft">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
        </div>
      </div>
    </div>
    <div id="client-slider" class="owl-carousel">
      <div class="item client-logo"> <a href="#"><?= $this->Html->image("/homepage/images/1.png",['class' => 'img-responsive']) ?></a> </div>
      <div class="item client-logo"> <a href="#"><?= $this->Html->image("/homepage/images/2.png",['class' => 'img-responsive']) ?></a> </div>
      <div class="item client-logo"> <a href="#"><?= $this->Html->image("/homepage/images/3.png",['class' => 'img-responsive']) ?></a> </div>
      <div class="item client-logo"> <a href="#"><?= $this->Html->image("/homepage/images/4.png",['class' => 'img-responsive']) ?></a> </div>
      <div class="item client-logo"> <a href="#"><?= $this->Html->image("/homepage/images/5.png",['class' => 'img-responsive']) ?></a> </div>
      <div class="item client-logo"> <a href="#"><?= $this->Html->image("/homepage/images/6.png",['class' => 'img-responsive']) ?></a> </div>
    </div>
  </div>
</div>
<!--Client end-->
<!--Contact start-->
<section id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
       <div class="logo pt-0"> <a href="index.html">SWAT</a> </div>
        <p class="font-w-6 pt-20 font-15 ln-h-30"><span class="Color-b">SWAT</span> is a fully responsive Multipurpose Bootstrap 3 Template built for web-designers, web-developers, business and any other creative people to build Bootstrap based websites.</p>
      </div>
      <div class="col-md-3">
        <div class="section-title-2">
          <h3>UseFull Links</h3>
        </div>
        <div class="sidebar-post pt-15">
          <ul>
            <li> <a href="#">Home Page Variations</a> </li>
            <li> <a href="#">Features Typography</a> </li>
            <li> <a href="#">Recent Blogs or News</a> </li>
            <li> <a href="#">Single and Portfolios</a> </li>
            <li> <a href="#">Company History</a> </li>
            <li> <a href="#">Different & Unique Pages</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="section-title-2">
          <h3>Photo Gallery</h3>
        </div>
        <div class="sidebar-gallery">
          <ul>
            <li> <a href="#"> <?= $this->Html->image("/homepage/images/footer-post-1.jpg",['class' => 'img-responsive']) ?> </a> </li>
            <li> <a href="#"> <?= $this->Html->image("/homepage/images/footer-post-2.jpg",['class' => 'img-responsive']) ?> </a> </li>
            <li> <a href="#"> <?= $this->Html->image("/homepage/images/footer-post-3.jpg",['class' => 'img-responsive']) ?> </a> </li>
            <li> <a href="#"> <?= $this->Html->image("/homepage/images/footer-post-4.jpg",['class' => 'img-responsive']) ?> </a> </li>
            <li> <a href="#"> <?= $this->Html->image("/homepage/images/footer-post-5.jpg",['class' => 'img-responsive']) ?> </a> </li>
            <li> <a href="#"> <?= $this->Html->image("/homepage/images/footer-post-6.jpg",['class' => 'img-responsive']) ?> </a> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="section-title-2">
          <h3>Newsletter</h3>
        </div>
        <div class="footer-address">
          <p class="font-w-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <p class="font-w-6"><span class="Color-b">Street :</span> Orlando, Florida, USA</p>
          <p class="font-w-6"><span class="Color-b">Email :</span> email@example.com</p>
          <p class="font-w-6"><span class="Color-b">Phone :</span> +880123456789</p>
        </div>
        <div class="footer-social pt-15">
          <ul class="top-social">
            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </section>
<!--Contact end-->
<footer>
  <div class="clearfix"></div>
  <div class="container">
    <p class="text-center pt-10">&copy; Copyright
      <script>
var d=new Date();
document.write(d.getFullYear());
</script>
      SWAT | All Rights Reserved.</p>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?= $this->Html->script('/homepage/assets/jquery/jquery-3.2.1.min.js') ?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?= $this->Html->script('/homepage/assets/bootstrap/js/bootstrap.min.js') ?>
<?= $this->Html->script('/homepage/assets/easing/jquery.easing.min.js') ?>
<?= $this->Html->script('/homepage/assets/isotope/jquery.isotope.js') ?>
<?= $this->Html->script('/homepage/assets/jquery/imagesloaded.pkgd.min.js') ?>
<?= $this->Html->script('/homepage/assets/wow/wow.min.js') ?>
<?= $this->Html->script('/homepage/assets/slicknav/jquery.slicknav.js') ?>
<?= $this->Html->script('/homepage/assets/particle/particles.min.js') ?>
<?= $this->Html->script('/homepage/assets/particle/app.js') ?>
<?= $this->Html->script('/homepage/assets/owlcarousel/js/owl.carousel.min.js') ?>
<?= $this->Html->script('/homepage/assets/jquery/jquery.magnific-popup.min.js') ?>
<?= $this->Html->script('/homepage/assets/number-animation/jquery.animateNumber.min.js') ?>
<!-- Contact Form Script -->
<?= $this->Html->script('/homepage/assets/contact-form/js/validator.min.js') ?>
<?= $this->Html->script('/homepage/assets/contact-form/js/form-scripts.js') ?>
<?= $this->Html->script('/homepage/assets/jquery/plugins.js') ?>
<?= $this->Html->script('/homepage/js/custom.js') ?>
</body>
</html>
