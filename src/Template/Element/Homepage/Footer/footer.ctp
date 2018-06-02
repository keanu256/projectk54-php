
<footer id="footer" class="footer-hover-links-light pt-4 mt-0">
    <div class="container">
        <div class="footer-top-featured-boxes featured-boxes">
            <div class="row">
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" href="#">
                        <img src="/homepage/img/icons/icon-1.svg" class="img-responsive appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100" alt="Icon 1" /> 
                        <div class="d-inline-block appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="150">
                            <h2 class="text-2 pt-1 mb-0">THƯ VIỆN PHIM & HÌNH ẢNH</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </a>
                </div>
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" href="<?= $this->Url->build(['controller'=>'Pages','action'=>'policy']) ?>">
                        <img src="/homepage/img/icons/icon-2.svg" class="img-responsive appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" alt="Icon 2" /> 
                        <div class="d-inline-block appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="350">
                            <h2 class="text-2 pt-1 mb-0">CHÍNH SÁCH & ĐIỀU KHOẢN</h2>
                            <p>Các quy định cơ bản của Polygon.</p>
                        </div>
                    </a>
                </div>
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" href="#">
                        <img src="/homepage/img/icons/icon-3.svg" class="img-responsive appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" alt="Icon 3" /> 
                        <div class="d-inline-block appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="550">
                            <h2 class="text-2 pt-1 mb-0">HỖ TRỢ TRỰC TUYẾN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h2 class="font-weight-semibold text-1 mb-3">HOTLINE</h2>
                <ul class="list list-unstyled mb-4">
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <strong class="text-color-light">Kinh doanh:</strong> <a href="tel:+1203101994" class="float-right">012 03 10 1994</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <strong class="text-color-light">Kỹ thuật:</strong> <a href="tel:+1203101994" class="float-right">012 03 10 1994</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <strong class="text-color-light">Email:</strong> <a class="float-right" href="mailto:hotro@polygonvietnam.com" class="link-underline-light">hotro@polygonvietnam.com</a></li>
                </ul>
                <ul class="social-icons social-icons-transparent social-icons-iconlight social-icons-lg">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 offset-lg-1 mb-4 mb-lg-0">
                <h2 class="font-weight-semibold text-1 mb-3">THÔNG TIN HỮU ÍCH</h2>
                <ul class="list list-unstyled">
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="https://themeforest.net/item/ezy-responsive-multipurpose-html5-template/21814871">Buy EZY Now</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="contact-us-2.html">Contact Us</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="contact-us-3.html">Hire Us</a></li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="#">Get Support</a></li>
                </ul>
            </div>
            <div class="col-lg-5">
                <h2 class="font-weight-semibold text-1 mb-3">GỬI TIN NHẮN</h2>
                <form class="contact-form contact-form-dark form-errors-light" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none">
                        <strong>Thành công!</strong> Tin nhắn của bạn đã được gửi đến chúng tôi.
                    </div>
                    <div class="contact-form-error alert alert-danger d-none">
                        <strong>Lỗi!</strong> Tin nhắn vẫn chưa được gửi.
                        <span class="mail-error-message d-block"></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" value="" data-msg-required="Hãy cho chúng tôi biết tên của bạn." maxlength="100" class="form-control" name="name" id="name" placeholder="Họ tên" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" value="" data-msg-required="Hãy cho chúng tôi biết Email của bạn." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" value="" data-msg-required="Vui lòng nhập chủ đề." maxlength="100" class="form-control" name="subject" id="subject" placeholder="Chủ đề" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <textarea maxlength="5000" data-msg-required="Vui lòng để lại lời nhắn." rows="5" class="form-control" name="message" id="message" placeholder="Nội dung" required></textarea>
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="col">
                            <input type="submit" value="NHẮN TIN" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <a href="<?= $this->Url->build(['controller'=>'Pages','action'=>'index'])?>">
                        <?= $this->Html->image('/homepage/img/logo-small-grey-bar.png',[
                            "width"=>"142" ,
                            "height"=>"90" ,
                            "alt"=>"Polygon Việt Nam" ,
                            "class"=>"img-fluid"
                        ]) ?>
                    </a>
                    <p class="pt-3 pb-5">Copyrights © 2018. All Rights Reserved by Polygon Việt Nam</p>
                </div>
            </div>
        </div>
    </div>
</footer>