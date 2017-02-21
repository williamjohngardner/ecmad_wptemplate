<?php get_header(); ?>

  <div class="leader">
    <h1><?php wp_title(''); ?>Blog Posts</h1>
  </div>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
      <div class="row">
        <h1><a style="color:#333333;" href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
          <?php if( get_the_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('medium'); ?>
          <?php endif; ?>
        <p><?php the_excerpt(); ?></p>
      </div>
    </div>

  <?php endwhile; else : ?>
	   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>
