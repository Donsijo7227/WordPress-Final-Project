<?php
/**
 * Template Name: Blog Page Template
 */
get_header();
?>
<section class="row">
  <div class="col-sm-12 col-md-8 col-lg-8">
    <?php
    // Start the loop
    if (have_posts()) :
      while (have_posts()) : the_post();
        // Display the post content
        the_content();
      endwhile;
    endif;
    ?>
  </div>
  <div>
    <div class="articles">
      <?php
    // Define our WP Query Parameters
    $the_query = new WP_Query('posts_per_page=5');
    // Start our WP Query
    while ($the_query->have_posts()) : $the_query->the_post();
    ?>
      <article>

        <div class="title">
         <h3><?php the_title(); ?></h3>
        </div>

        <div class="blogimage">
          
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail'); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/images/default-thumbnail.jpg'; ?>" alt="Default Thumbnail">
          <?php endif; ?>
          
        </div>
        <div class="shortdesc">
          <?php the_content(); ?>
        </div>
      </article>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    </div>
    
  </div>
</section>
<?php get_footer(); ?>
