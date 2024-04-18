<?php
// Template Name: Blog 
get_header();

// Custom query to fetch blog posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5, // Number of posts to display
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div class="excerpt">
                <?php the_excerpt(); ?>
                
            </div>
        </article>
<?php
    endwhile;
    wp_reset_postdata();
else :
    echo 'No posts found';
endif;

get_footer();
?>
