<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <h1><?php wp_title(false) ?></h1>
      <hr>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php if( get_the_post_thumbnail() ) : ?>
              <?php endif; ?>
            <p><?php the_content(); ?></p>
            <hr>

      <?php endwhile; else : ?>
    	   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
    <div class="col-lg-4">
      <br>
      <?php if ( is_active_sidebar( 'page' ) ) : ?>
        <div id="page-sidebar" class="page-sidebar widget-area" role="complementary">
		         <?php dynamic_sidebar( 'page' ); ?>
        </div><!-- #page-sidebar -->
      <?php endif; ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
