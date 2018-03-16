<?php 
	$list_card_title = 'Our Best Selling Products';
	//Our Best Selling Products
?>
<div class="product-showcase-wrap">
	<section class="product-showcase">
		<h3 class="title"><?= $list_card_title ?></h3>
		<ul class="slide-controls">
			<li>
				<a href="#" class="button prev">
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>

				</a>
			</li>
			<li>
				<a href="#" class="button next">

					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>

				</a>
			</li>
		</ul>

		<div id="compare-modal" class="compare-modal mfp-with-anim mfp-hide">
			<?= $this->Html->image('/homepage/images/icons/compare-modal-logo.png') ?>
			<h5>The item <span>product name</span></h5>
			<h6>Has been sucessfully added to compare</h6>
			<div class="options">
				<a class="button medium mfp-close">Return to store</a>
				<a href="compare.html" class="button medium compare">Go to compare</a>
			</div>
		</div>

		<ul id="owl-bs-products" class="product-list grid owl-carousel">
			<?= $this->Element('Homepage/product_card',[
				'product_name' => 'Sản phẩm 1',
				'product_shop' => 'Tinh anh',
				'product_category' => 'Mobile case',
				'product_rating' => 4,
				'product_price' => '15 VND'
			]) ?>
		</ul>
	</section>
</div>

