<!-- PRODUCT -->
<li class="list-item">
    <!-- ACTIONS -->
    <div class="actions">
        <figure class="liquid">
            <?= $this->Html->image('/homepage/images/items/34.png') ?>
        </figure>
        <div>
            <a href="#qv-p12" class="button quick-view" data-effect="mfp-3d-unfold">
                <!-- SVG QUICKVIEW -->
                <svg class="svg-quickview">
                    <use xlink:href="#svg-quickview"></use>
                </svg>
                <!-- /SVG QUICKVIEW -->
            </a>
            <!-- QUICK VIEW POPUP -->
            <div id="qv-p12" class="product-quick-view mfp-with-anim mfp-hide">
                <!-- PRODUCT PICTURES -->
                <div class="product-pictures">
                    <div class="product-photo">
                        <figure class="liquid">
                            <?= $this->Html->image('/homepage/images/items/34.png') ?>
                        </figure>
                    </div>
                    <ul class="picture-views">
                        <!-- VIEW -->
                        <li class="selected">
                            <figure class="liquid">
                                <?= $this->Html->image('/homepage/images/items/34.png') ?>
                            </figure>
                        </li>
                        <!-- /VIEW -->
                    </ul>
                </div>
                <!-- /PRODUCT PICTURES -->

                <!-- PRODUCT DESCRIPTION -->
                <div class="product-description">
                    <a href="#"><p class="highlighted category">Phone Cases</p></a>
                    <a href="#"><h6>Dial Z For Zombie</h6></a>
                    <!-- RATING -->
                    <ul class="rating big">
                        <li class="filled">
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                        <li class="filled">
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                        <li class="filled">
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                        <li class="filled">
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                        <li>
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                    </ul>
                    <!-- /RATING -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in.</p>
                    <p class="highlighted current">$26.00</p>
                    <h5 class="stock">Availability: <span class="available">In Stock</span></h5>
                    <h5>Select Size:</h5>
                    <form class="westeros-form">
                        <input id="small12" type="radio" name="size" value="small">
                        <label for="small12"><span class="radio"><span></span></span>Small</label>

                        <input id="medium12" type="radio" name="size" value="medium">
                        <label for="medium12"><span class="radio"><span></span></span>Medium</label>

                        <input id="large12" type="radio" name="size" value="large" checked>
                        <label for="large12"><span class="radio"><span></span></span>Large</label>

                        <input id="extralarge12" type="radio" name="size" value="extralarge">
                        <label for="extralarge12"><span class="radio"><span></span></span>Extra Large</label>
                    </form>
                    <div class="color-selection">
                        <h5>Select Base Color:</h5>
                        <!-- COLORPICKER -->
                        <ul class="colorpicker">
                            <li><span data-color="#008fbe"></span></li>
                            <li class="selected"><span data-color="#17ccac"></span></li>
                            <li><span data-color="#4c4cab"></span></li>
                            <li><span data-color="#252525"></span></li>
                        </ul>
                        <!-- /COLORPICKER -->
                    </div>
                    <div>
                        <h5>Quantity:</h5>
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="control left"></div>
                            <div class="value">
                                <h5>2</h5>
                            </div>
                            <div class="control right"></div>
                        </div>
                        <!-- /COUNTER -->
                    </div>
                    <div class="options">
                        <a href="#" class="button medium fb"></a>
                        <a href="#" class="button medium twt"></a>
                        <a href="#compare-modal" class="button medium compare cmp-popup" data-effect="mfp-3d-unfold">
                            <!-- SVG COMPARE -->
                            <svg class="svg-compare">
                                <use xlink:href="#svg-compare"></use>	
                            </svg>
                            <!-- /SVG COMPARE -->
                        </a>
                        <a href="#" class="button medium wishlist">
                            <!-- SVG WISHLIST -->
                            <svg class="svg-wishlist">
                                <use xlink:href="#svg-wishlist"></use>	
                            </svg>
                            <!-- /SVG WISHLIST -->
                        </a>
                        <a href="#" class="button cart-add">
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            Add to Cart
                        </a>
                    </div>
                </div>
                <!-- /PRODUCT DESCRIPTION -->
            </div>
            <!-- /QUICK VIEW POPUP -->
            <a href="full-view.html" class="button full-view">
                <!-- SVG FULLVIEW -->
                <svg class="svg-fullview">
                    <use xlink:href="#svg-fullview"></use>	
                </svg>
                <!-- /SVG FULLVIEW -->
            </a>
            <a href="#compare-modal" class="button compare cmp-popup" data-effect="mfp-3d-unfold">
                <!-- SVG COMPARE -->
                <svg class="svg-compare">
                    <use xlink:href="#svg-compare"></use>	
                </svg>
                <!-- /SVG COMPARE -->
            </a>
        </div>
    </div>
    <!-- /ACTIONS -->

    <!-- DESCRIPTION -->
    <div class="description">
        <div class="clearfix">
            <a href="#"><p class="highlighted category"><?= $product_category ?></p></a>
            <?= $this->Element('Homepage/Product/card_rating',['star' => $product_rating]) ?>
        </div>
        <div class="clearfix">
            <a href="#"><h6><?= $product_name ?></h6></a>
        </div>
        <div class="clearfix">
            <p><?= $product_shop ?></p>
            <p class="highlighted current"><?= $product_price ?></p>
        </div>

        <!-- CART OPTIONS -->
        <div class="cart-options">
            <a href="#" class="button cart-add" style="width:100%">
                <!-- SVG PLUS -->
                <svg class="svg-plus">
                    <use xlink:href="#svg-plus"></use>
                </svg>
                <!-- /SVG PLUS -->
                Add to Cart
            </a>
        </div>
        <!-- /CART OPTIONS -->
    </div>
    <!-- /DESCRIPTION -->
</li>
<!-- /PRODUCT -->