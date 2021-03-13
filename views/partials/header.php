<!-- Header
		============================================= -->
<header id="header" class="sticky-style-2">

	<div class="container clearfix">

		<!-- Logo
		============================================= -->
		<div id="logo">
			<a href="index.html" class="standard-logo" data-dark-logo="<?php echo Asset::image('logo-dark.png');?>"><img src="<?php echo Asset::image('logo.png');?>" alt="Canvas Logo"></a>
			<a href="index.html" class="retina-logo" data-dark-logo="<?php echo Asset::image('logo-dark@2x.png');?>"><img src="<?php echo Asset::image('logo@2x.png');?>" alt="Canvas Logo"></a>
		</div><!-- #logo end -->

		<ul class="header-extras">
			<li>
				<i class="i-medium i-circled i-bordered icon-thumbs-up2 nomargin"></i>
				<div class="he-text">
					Original Brands
					<span>100% Guaranteed</span>
				</div>
			</li>
			<li>
				<i class="i-medium i-circled i-bordered icon-truck2 nomargin"></i>
				<div class="he-text">
					Free Shipping
					<span>for $20 or more</span>
				</div>
			</li>
			<li>
				<i class="i-medium i-circled i-bordered icon-undo nomargin"></i>
				<div class="he-text">
					30-Day Returns
					<span>Completely Free</span>
				</div>
			</li>
		</ul>

	</div>

	<div id="header-wrap">

    <?php view::render ('partials/main-nav'); ?>

	</div>

</header><!-- #header end -->