<?php
/**
 * Template Name: about us
 * Template Post Type: page
 */
get_header();
?>
<section id="hero" class="shop-masthead" style="background-image: url('<?php $image_url = get_field('banner_img'); if (is_array($image_url)) { $image_url = $image_url['url']; } echo esc_url($image_url); ?>')">
    <div class="aboutusheading">
        <h2>About Us</h2>
    </div>

</section>

<section id="product1" class="section-p1">
    <div class="aboutus">
        <h2>Welcome to Cara</h2>
        <div class="pro-container">
        <p><?php echo wp_kses_post(get_field('welcome_para')); ?></p>
    </div>
</section>

<section id="product1" class="section-p1">
    <div class="aboutus">
        <h2><?php echo wp_kses_post(get_field('second_title')); ?></h2>
        <div class="pro-container">
        <p><?php echo wp_kses_post(get_field('second_section')); ?></p>
    </div>
</section>

<section id="product1" class="section-p1">
    <div class="aboutuspageimage">
        <img src="<?php $image_url = get_field('fourth_section_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('fourt_section_image_alt_text')); ?>">
    </div>
</section>


<section id="product1" class="section-p1">
    <div class="aboutus">
        <h2><?php echo wp_kses_post(get_field('third_title')); ?></h2>
        <div class="pro-container">
        <p><?php echo wp_kses_post(get_field('third_section')); ?></p>
    </div>
</section>



<?php
get_footer();
