<?= $this->Element('Homepage\Header\header') ?>
<section class="page-header mb-0 parallax appear-animation" id="page-header" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="/homepage/img/background-page-header.png" data-appear-animation="fadeIn" data-appear-animation-duration="1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-left">
                <span class="tob-sub-title text-color-primary d-block">TIN TỨC</span>
                <h1 class="font-weight-bold">Kho ứng dụng Polygon</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div> 
</section>
<div class="container mt-5 mb-5">

    <div id="combinationFilters" class="filters">

        <div class="row">
            <div class="col-lg-6">
                <ul class="nav portfolio-filter-group mb-3" data-filter-group="group1">
                    <li class="nav-item" data-option-value="*"><a class="nav-link active pl-0" href="#">SHOW ALL</a></li>

                    <li class="nav-item" data-option-value=".brands"><a class="nav-link text-uppercase" href="#">brands</a></li>

                    <li class="nav-item" data-option-value=".design"><a class="nav-link text-uppercase" href="#">design</a></li>

                    <li class="nav-item" data-option-value=".web"><a class="nav-link text-uppercase" href="#">web</a></li>

                    <li class="nav-item" data-option-value=".ads"><a class="nav-link text-uppercase" href="#">ads</a></li>
                </ul>

            </div>
            <div class="col-lg-6">
                <ul class="nav portfolio-filter-group mb-3" data-filter-group="group2">
                    <li data-option-value="" class="nav-item"><a class="nav-link active pl-0" href="#">SHOW ALL</a></li>

                    <li class="nav-item" data-option-value=".small"><a class="nav-link text-uppercase" href="#">small</a></li>

                    <li class="nav-item" data-option-value=".medium"><a class="nav-link text-uppercase" href="#">medium</a></li>

                    <li class="nav-item" data-option-value=".big"><a class="nav-link text-uppercase" href="#">big</a></li>
                </ul>

            </div>
        </div>

    </div>

    <div class="sort-destination-loader sort-destination-loader-showing">
        <div class="portfolio-list portfolio-list-style-2">

            <div class="col-4 col-md-4 col-lg-2 p-0 isotope-item brands small sm mb-3">
                <div class="portfolio-item hover-effect-3d text-center">
                    <a href="portfolio-detail-1.html">
                        <span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
                            <span class="image-frame-wrapper">
                                <img src="/homepage/img/projects/generic/project-8-masonry.jpg" class="img-fluid" alt="">
                                <span class="image-frame-inner-border"></span>
                                <span class="image-frame-action">
                                    <span class="image-frame-action-icon">
                                        <i class="lnr lnr-link text-color-light"></i>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <h2 class="font-weight-bold text-4 mb-0">EZ Card</h2>
                    <span class="text-uppercase">brands</span>
                </div>
            </div>
        </div>
    </div>
</div>