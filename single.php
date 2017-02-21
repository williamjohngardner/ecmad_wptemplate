<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
      <div class="row">
        <h1><a style="color:#333333;" href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
          <?php if( get_the_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
        <p><?php the_content(); ?></p>
        <?php comments_template(); ?>
      </div>
    </div>

  <?php endwhile; else : ?>
	   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>
