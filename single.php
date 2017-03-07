<?php get_header(); ?>
<img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/03/page_bkgrnd_opt.jpg" alt=" <?php bloginfo( 'name' ); ?> ">
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <h1><?php wp_title(false) ?></h1>
      <hr>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


              <?php if( get_the_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
            <p><?php the_content(); ?></p>
            <hr>

      <?php endwhile; else : ?>
    	   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
    <div class="col-lg-4">
      <br>
      <?php if ( is_active_sidebar( 'blog' ) ) : ?>
        <div id="blog-sidebar" class="blog-sidebar widget-area" role="complementary">
		         <?php dynamic_sidebar( 'blog' ); ?>
        </div><!-- #blog-sidebar -->
      <?php endif; ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
