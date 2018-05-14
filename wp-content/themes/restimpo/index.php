<?php
/**
 * The main template file.
 * @package RestImpo
 * @since RestImpo 1.0.0
*/
get_header(); ?>

<div id="wrapper-content">
  <div class="container">
  <div id="main-content">
<?php if (get_theme_mod('restimpo_display_latest_posts', restimpo_default_options('restimpo_display_latest_posts')) != 'Hide'){ ?>
    <section class="home-latest-posts">

<!--///////////////////////////////// -->

<?php $query = new WP_Query('cat=21'); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 <div class="post">
  <div class="entry">
  	<?php the_content(); ?>
  </div>
 </div> <!-- closes the first div box -->

 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>

<!--///////////////////////////////// -->

  </section>
<?php } ?>
<?php if ( dynamic_sidebar( 'sidebar-6' ) ) : else : ?>
<?php endif; ?>    
  </div>
<?php get_sidebar(); ?>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>