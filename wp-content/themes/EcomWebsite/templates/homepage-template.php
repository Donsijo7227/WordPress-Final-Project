<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header();
?>
<section id="hero" class="shop-masthead" style="background-image: url('<?php $image_url = get_field('hero_img'); if (is_array($image_url)) { $image_url = $image_url['url']; } echo esc_url($image_url); ?>')">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off!</p>
</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/features/f1.png' ) ); ?>" alt="image">
        <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
        <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/features/f2.png' ) ); ?>" alt="image">
        <h6>Online Order</h6>
    </div>
    <div class="fe-box">
        <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/features/f3.png' ) ); ?>" alt="image">
        <h6>Save Money</h6>
    </div>
    <div class="fe-box">
        <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/features/f4.png' ) ); ?>" alt="image">
        <h6>Promotions</h6>
    </div>
    <div class="fe-box">
        <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/features/f5.png' ) ); ?>" alt="image">
        <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
        <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/features/f6.png' ) ); ?>" alt="image">
        <h6>F24/7 Support</h6>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p><?php echo wp_kses_post(get_field('featured-products-sub-heading')); ?></p>

    <div class="pro-container">

        <div class="pro">

            <a href="http://localhost/ecomwebsite/product/adidas/">
                <img src="<?php $image_url = get_field('featured_product_one_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('featured_product_one_image_alt_text')); ?>">
            </a>

            <div class="des">
                <span><?php echo wp_kses_post(get_field('featured_product_one_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('featured_product_one_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
            <a href="http://localhost/ecomwebsite/product/adidas-2/">
            <img src="<?php $image_url = get_field('featured_product_two_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('featured_product_two_image_alt_text')); ?>">
            </a>
            <div class="des">
                <span><?php echo wp_kses_post(get_field('featured_product_two_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('featured_product_two_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
            <a href="http://localhost/ecomwebsite/product/vh/">
            <img src="<?php $image_url = get_field('featured_product_three_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('featured_product_three_image_alt_text')); ?>">
            </a>
           <div class="des">
                <span><?php echo wp_kses_post(get_field('featured_product_three_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('featured_product_three_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/lp/">
            <img src="<?php $image_url = get_field('featured_product_four_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('featured_product_four_image_alt_text')); ?>">
</a>
            <div class="des">
                <span><?php echo wp_kses_post(get_field('featured_product_four_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('featured_product_four_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/vh-2/">
            <img src="<?php $image_url = get_field('featured_product_five_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('featured_product_five_image_alt_text')); ?>">
</a>
            <div class="des">
                <span><?php echo wp_kses_post(get_field('featured_product_five_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('featured_product_five_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/hm/">
            <img src="<?php $image_url = get_field('featured_product_six_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('featured_product_six_image_alt_text')); ?>">
</a>
            <div class="des">
                <span><?php echo wp_kses_post(get_field('featured_product_six_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('featured_product_six_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/hm-2/">
            <img src="<?php $image_url = get_field('featured_product_seven_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('featured_product_seven_image_alt_text')); ?>">
</a>
            <div class="des">
                <span><?php echo wp_kses_post(get_field('featured_product_seven_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('featured_product_seven_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/vh-3/">
            <img src="<?php $image_url = get_field('featured_product_eight_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('featured_product_eight_image_alt_text')); ?>">
        </a>
            <div class="des">
                <span><?php echo wp_kses_post(get_field('featured_product_eight_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('featured_product_eight_name')); ?></h5>
            </div>
        </div>
    </div>
</section>

<section id="banner" class="section-m1" style="background-image: url('<?php echo esc_url( home_url( '/wp-content/uploads/2024/banner/b2.jpg' ) ); ?>')">
    <h2><?php echo wp_kses_post(get_field('banner_one_text')); ?></h2>
    <a href="<?php echo esc_url(get_field('link_to_shop_page_for_button')); ?>">
    <button class="normal">Explore More</button>
    </a>
</section>

<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p><?php echo wp_kses_post(get_field('new_arrivals_sub_heading')); ?></p>
    <div class="pro-container">

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/canada-goose/">
           <img src="<?php $image_url = get_field('new_arrivals_one_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('new_arrivals_one_image_alt_text')); ?>">
           </a> 
           <div class="des">
                <span><?php echo wp_kses_post(get_field('new_arrivals_one_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('new_arrivals_one_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/encircled/">
           <img src="<?php $image_url = get_field('new_arrivals_two_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('new_arrivals_two_image_alt_text')); ?>">
</a>
           <div class="des">
                <span><?php echo wp_kses_post(get_field('new_arrivals_two_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('new_arrivals_two_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/tentree/">
           <img src="<?php $image_url = get_field('new_arrivals_three_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('new_arrivals_three_image_alt_text')); ?>">
</a> 
           <div class="des">
                <span><?php echo wp_kses_post(get_field('new_arrivals_three_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('new_arrivals_three_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/club-monaco/">
           <img src="<?php $image_url = get_field('new_arrivals_four_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('new_arrivals_four_image_alt_text')); ?>">
</a> 
           <div class="des">
                <span><?php echo wp_kses_post(get_field('new_arrivals_four_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('new_arrivals_four_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/club-monaco-2/">
           <img src="<?php $image_url = get_field('new_arrivals_five_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('new_arrivals_five_image_alt_text')); ?>">
</a> 
           <div class="des">
                <span><?php echo wp_kses_post(get_field('new_arrivals_five_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('new_arrivals_five_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/club-monaco-3/">
           <img src="<?php $image_url = get_field('new_arrivals_six_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('new_arrivals_six_image_alt_text')); ?>">
</a> 
           <div class="des">
                <span><?php echo wp_kses_post(get_field('new_arrivals_six_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('new_arrivals_six_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/club-monaco-4/">
           <img src="<?php $image_url = get_field('new_arrivals_seven_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('new_arrivals_seven_image_alt_text')); ?>">
</a>
            <div class="des">
                <span><?php echo wp_kses_post(get_field('new_arrivals_seven_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('new_arrivals_seven_name')); ?></h5>
            </div>
        </div>

        <div class="pro">
        <a href="http://localhost/ecomwebsite/product/club-monaco-5/">
           <img src="<?php $image_url = get_field('new_arrivals_eight_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('new_arrivals_eight_image_alt_text')); ?>">
</a> 
           <div class="des">
                <span><?php echo wp_kses_post(get_field('new_arrivals_eight_brand')); ?></span>
                <h5><?php echo wp_kses_post(get_field('new_arrivals_eight_name')); ?></h5>
            </div>
        </div>
    </div>
</section>


<section id="banner3">
    <div class="banner-box " style="background-image: url('<?php $image_url = get_field('ad_box_one_image'); if (is_array($image_url)) { $image_url = $image_url['url']; } echo esc_url($image_url); ?>')">
        <h2><?php echo wp_kses_post(get_field('ad_box_one_title')); ?></h2>
        <h3><?php echo wp_kses_post(get_field('ad_box_one_sub_title')); ?></h3>
    </div>
    <div class="banner-box " style="background-image: url('<?php $image_url = get_field('ad_box_two_image'); if (is_array($image_url)) { $image_url = $image_url['url']; } echo esc_url($image_url); ?>')">
        <h2><?php echo wp_kses_post(get_field('ad_box_two_title')); ?></h2>
        <h3><?php echo wp_kses_post(get_field('ad_box_two_sub_title')); ?></h3>
    </div>
    <div class="banner-box " style="background-image: url('<?php $image_url = get_field('ad_box_three_image'); if (is_array($image_url)) { $image_url = $image_url['url']; } echo esc_url($image_url); ?>')">
        <h2><?php echo wp_kses_post(get_field('ad_box_three_title')); ?></h2>
        <h3><?php echo wp_kses_post(get_field('ad_box_three_sub_title')); ?></h3>
    </div>
</section>

<?php
get_footer();
