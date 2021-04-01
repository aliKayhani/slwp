<!-- Content
	============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="col_two_third bottommargin-lg">

                <div class="fslider" data-arrows="false">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide">
                                <a href="#">
                                    <img src="<?php echo Asset::image( 'shop/slider/1.jpg' ) ?>" alt="Shop Image">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="#">
                                    <img src="<?php echo Asset::image( 'shop/slider/2.jpg' ) ?>" alt="Shop Image">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="#">
                                    <img src="<?php echo Asset::image( 'shop/slider/3.jpg' ) ?>" alt="Shop Image">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="#">
                                    <img src="<?php echo Asset::image( 'shop/slider/4.jpg' ) ?>" alt="Shop Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col_one_third bottommargin-lg col_last">

                <div class="col_full bottommargin-sm">
                    <a href="#"><img src="<?php echo Asset::image( 'shop/banners/7.jpg' ) ?>" alt="Image"></a>
                </div>

                <div class="col_full nobottommargin">
                    <a href="#"><img src="<?php echo Asset::image( 'shop/banners/3.jpg' ) ?>" alt="Image"></a>
                </div>

            </div>

            <div class="clear"></div>

        </div>

        <div class="promo parallax promo-full bottommargin-lg"
             style="background-image: url(<?php echo Asset::image( 'parallax/3.jpg' ); ?>"
             data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix">
                <h3>Get <span>30%</span> off on orders of $29 or more. Use Coupon: <span>SHOP30</span></h3>
                <span>Sale available on selected Designer Brands that include Apparels, Footwear, Fashion Accessories &amp; Watches.</span>
                <a href="#" class="button button-xlarge button-rounded">Start Shopping</a>
            </div>
        </div>

        <div class="container clearfix">

            <div class="col_one_third bottommargin-lg">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                        <img src="<?php echo Asset::image( 'shop/banners/10.jpg' ) ?>" alt="Image">
                    </div>
                    <div class="fbox-desc">
                        <h3>Men's Footwear<span class="subtitle">Flat 50% Off*</span></h3>
                        <p><a href="#" class="btn btn-secondary">Shop Now</a></p>
                    </div>
                </div>
            </div>

            <div class="col_one_third bottommargin-lg">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                        <img src="<?php echo Asset::image( 'shop/banners/7.jpg' ) ?>" alt="Image">
                    </div>
                    <div class="fbox-desc">
                        <h3>Latest Product Arrivals<span class="subtitle">New Dress Designs Available</span></h3>
                        <p><a href="#" class="btn btn-secondary">Check New Arrivals</a></p>
                    </div>
                </div>
            </div>

            <div class="col_one_third bottommargin-lg col_last">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                        <img src="<?php echo Asset::image( 'shop/banners/12.jpg' ) ?>" alt="Image">
                    </div>
                    <div class="fbox-desc">
                        <h3>The Style Blog<span class="subtitle">Fashion Tips from Experts</span></h3>
                        <p><a href="#" class="btn btn-secondary">Browse Videos</a></p>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="col_one_third nobottommargin">

                <div class="fancy-title title-border">
                    <h4>Recently Arrived</h4>
                </div>

                <div>
					<?php $new_products = new WP_Query( array(
						'post_type' => 'product',
                        'order' => 'ASC',
                        'orderby'   => 'meta_value_num',
                        'meta_key'  => Product::PRICE_META_KEY
					) ); ?>
					<?php if ( $new_products->have_posts() ): ?>
						<?php while ( $new_products->have_posts() ) : $new_products->the_post(); ?>
                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="<?php echo get_the_permalink();?>"><img src="<?php echo Asset::image( 'shop/small/1.jpg' ) ?>" alt="Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="<?php echo get_the_permalink();?>"><?php echo get_the_title(); ?></a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li class="color"><?php echo Product::price(get_the_ID()); ?></li>
                                        <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                                    class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                    </ul>
                                </div>
                            </div>
						<?php endwhile; ?>
					<?php else: ?>

					<?php endif; ?>


<!--                    <div class="spost clearfix">-->
<!--                        <div class="entry-image">-->
<!--                            <a href="#"><img src="--><?php //echo Asset::image( 'shop/small/1.jpg' ) ?><!--" alt="Image"></a>-->
<!--                        </div>-->
<!--                        <div class="entry-c">-->
<!--                            <div class="entry-title">-->
<!--                                <h4><a href="#">Blue Round-Neck Tshirt</a></h4>-->
<!--                            </div>-->
<!--                            <ul class="entry-meta">-->
<!--                                <li class="color">$29.99</li>-->
<!--                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i-->
<!--                                            class="icon-star3"></i> <i class="icon-star-half-full"></i></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="spost clearfix">-->
<!--                        <div class="entry-image">-->
<!--                            <a href="#"><img src="--><?php //echo Asset::image( 'shop/small/6.jpg' ) ?><!--" alt="Image"></a>-->
<!--                        </div>-->
<!--                        <div class="entry-c">-->
<!--                            <div class="entry-title">-->
<!--                                <h4><a href="#">Checked Short Dress</a></h4>-->
<!--                            </div>-->
<!--                            <ul class="entry-meta">-->
<!--                                <li class="color">$23.99</li>-->
<!--                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i-->
<!--                                            class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="spost clearfix">-->
<!--                        <div class="entry-image">-->
<!--                            <a href="#"><img src="--><?php //echo Asset::image( 'shop/small/7.jpg' ) ?><!--" alt="Image"></a>-->
<!--                        </div>-->
<!--                        <div class="entry-c">-->
<!--                            <div class="entry-title">-->
<!--                                <h4><a href="#">Light Blue Denim Dress</a></h4>-->
<!--                            </div>-->
<!--                            <ul class="entry-meta">-->
<!--                                <li class="color">$19.99</li>-->
<!--                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i-->
<!--                                            class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="spost clearfix">-->
<!--                        <div class="entry-image">-->
<!--                            <a href="#"><img src="--><?php //echo Asset::image( 'shop/small/9.jpg' ) ?><!--" alt="Image"></a>-->
<!--                        </div>-->
<!--                        <div class="entry-c">-->
<!--                            <div class="entry-title">-->
<!--                                <h4><a href="#">Slim Fit Chinos</a></h4>-->
<!--                            </div>-->
<!--                            <ul class="entry-meta">-->
<!--                                <li class="color">$24.99</li>-->
<!--                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i-->
<!--                                            class="icon-star3"></i> <i class="icon-star-empty"></i></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>

            </div>

            <div class="col_one_third nobottommargin">

                <div class="fancy-title title-border">
                    <h4>Popular Products</h4>
                </div>

                <div>

                    <div class="spost clearfix">
                        <div class="entry-image">
                            <a href="#"><img src="<?php echo Asset::image( 'shop/small/3.jpg' ) ?>" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h4><a href="#">Round-Neck Tshirt</a></h4>
                            </div>
                            <ul class="entry-meta">
                                <li class="color">$15</li>
                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                            class="icon-star3"></i> <i class="icon-star3"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="spost clearfix">
                        <div class="entry-image">
                            <a href="#"><img src="<?php echo Asset::image( 'shop/small/10.jpg' ) ?>" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h4><a href="#">Green Trousers</a></h4>
                            </div>
                            <ul class="entry-meta">
                                <li class="color">$19</li>
                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                            class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i
                                            class="icon-star-empty"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="spost clearfix">
                        <div class="entry-image">
                            <a href="#"><img src="<?php echo Asset::image( 'shop/small/11.jpg' ) ?>" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h4><a href="#">Silver Chrome Watch</a></h4>
                            </div>
                            <ul class="entry-meta">
                                <li class="color">$34.99</li>
                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                            class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="spost clearfix">
                        <div class="entry-image">
                            <a href="#"><img src="<?php echo Asset::image( 'shop/small/4.jpg' ) ?>" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h4><a href="#">Black Polo Tshirt</a></h4>
                            </div>
                            <ul class="entry-meta">
                                <li class="color">$17.99</li>
                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                            class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col_one_third nobottommargin col_last">

                <div class="fancy-title title-border">
                    <h4>Recommended for You</h4>
                </div>

                <div>

                    <div class="spost clearfix">
                        <div class="entry-image">
                            <a href="#"><img src="<?php echo Asset::image( 'shop/small/8.jpg' ) ?>" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h4><a href="#">Pink Printed Dress</a></h4>
                            </div>
                            <ul class="entry-meta">
                                <li class="color">$21</li>
                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                            class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="spost clearfix">
                        <div class="entry-image">
                            <a href="#"><img src="<?php echo Asset::image( 'shop/small/5.jpg' ) ?>" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h4><a href="#">Blue Round-Neck Tshirt</a></h4>
                            </div>
                            <ul class="entry-meta">
                                <li class="color">$19.99</li>
                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                            class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="spost clearfix">
                        <div class="entry-image">
                            <a href="#"><img src="<?php echo Asset::image( 'shop/small/12.jpg' ) ?>" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h4><a href="#">Men Aviator Sunglasses</a></h4>
                            </div>
                            <ul class="entry-meta">
                                <li class="color">$14.99</li>
                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                            class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i
                                            class="icon-star-empty"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="spost clearfix">
                        <div class="entry-image">
                            <a href="#"><img src="<?php echo Asset::image( 'shop/small/2.jpg' ) ?>" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h4><a href="#">Unisex Sunglasses</a></h4>
                            </div>
                            <ul class="entry-meta">
                                <li class="color">$17.99</li>
                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                            class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            <div class="clear"></div>
            <div class="line"></div>

            <div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30"
                 data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3"
                 data-items-md="4" data-items-lg="5" data-items-xl="7">

                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/1.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/2.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/3.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/4.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/5.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/6.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/7.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/8.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/9.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/10.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/11.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/12.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/13.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/14.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/15.jpg' ) ?>"
                                                      alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="<?php echo Asset::image( 'clients/logo/16.jpg' ) ?>"
                                                      alt="Clients"></a></div>

            </div>


        </div>

        <div class="si-sticky si-sticky-right d-none d-lg-block">
            <a href="#" class="social-icon si-colored si-facebook" data-animate="bounceInRight">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
            </a>
            <a href="#" class="social-icon si-colored si-twitter" data-animate="bounceInRight" data-delay="100">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
            </a>
            <a href="#" class="social-icon si-colored si-pinterest" data-animate="bounceInRight" data-delay="200">
                <i class="icon-pinterest"></i>
                <i class="icon-pinterest"></i>
            </a>
            <a href="#" class="social-icon si-colored si-instagram" data-animate="bounceInRight" data-delay="300">
                <i class="icon-instagram"></i>
                <i class="icon-instagram"></i>
            </a>
            <a href="#" class="social-icon si-colored si-gplus" data-animate="bounceInRight" data-delay="600">
                <i class="icon-gplus"></i>
                <i class="icon-gplus"></i>
            </a>
            <a href="#" class="social-icon si-colored si-rss" data-animate="bounceInRight" data-delay="700">
                <i class="icon-rss"></i>
                <i class="icon-rss"></i>
            </a>
        </div>

    </div>

</section><!-- #content end -->
