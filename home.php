<?php

/*
Theme Name: Madalon

Author: Bill Gardner
Author URI: http://williamjgardner.com/
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/


get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <h1><?php wp_title(false) ?></h1>
      <hr>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2><a style="color:#333333;" href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
              <?php if( get_the_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
            <h5><?php the_excerpt(); ?></h5>
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
