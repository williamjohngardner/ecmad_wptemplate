<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<!-- SECTION 1 - HERO SECTION -->

<section class="section_1">
  <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-6">
      <div id="hero_text">
        <i><?php the_field('hero_amount_modifier'); ?></i>
        <strong id="hero">$<?php the_field('hero_amount'); ?></strong>
        <i><?php the_field('hero_amount_type'); ?></i>
        <br>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div id="slider">

                <p>
                  <?php
                    if( have_rows('testimonial_slide_show') ):
                      while ( have_rows('testimonial_slide_show') ) : the_row();
                        the_sub_field('testimonial_text');

                      endwhile;
                    else :
                      // no rows found
                    endif;
                  ?>
                </p>

            </div>
            <div class="slider_option">
              <input type="checkbox" id="checkbox">
            </div>

          </div>
          <div class="col-md-1"></div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <a class="section_cta" href="<?php the_field('hero_button_left_url'); ?>"><?php the_field('hero_button_left_text'); ?></a>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <a class="section_cta" href="<?php the_field('hero_button_right_url'); ?>"><?php the_field('hero_button_right_text'); ?></a>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</section>

<!-- SECTION 2 - VERDICTS AND RESULTS SECTION -->

<section class="section_2">
  <div class="row">
    <div class="col-md-12">
      <h2 class="section_title">OUR RESULTS</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div id="verdict_left">
        <div>
          <p id="verdict_text">AUTO ACCIDENT<br>
          <strong><em>$410,000.00</em></strong></p>
        </div>
        <div>
          <p id="verdict_text">NEGLIGENT SECURITY<br>
          <strong><em>$275,000.00</em></strong></p>
        </div>
        <div>
          <p id="verdict_text">AUTO ACCIDENT<br>
          <strong><em>$507,500.00</em></strong></p>
        </div>
        <div>
          <p id="verdict_text">AUTO ACCIDENT<br>
          <strong><em>$580,000.00</em></strong></p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div id="verdict_right">
        <div>
          <p id="verdict_text">PEDESTRIAN/SUV ACCIDENT<br>
          <strong><em>$3,500,000.00</em></strong></p>
        </div>
        <div>
          <p id="verdict_text">MOTORCYCLE PASSENGER/AUTO<br>
          <strong><em>$1,500,000.00</em></strong></p>
        </div>
        <div>
          <p id="verdict_text">MOTORCYCLE PASSENGER/AUTO<br>
          <strong><em>$1,500,000.00</em></strong></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <a href="#"><h4 class="section_cta" id="section2_cta">SEE OUR RESULTS</h4></a>
    </div>
  </div>
</section>

<!-- SECTION 3 - MEET THE ATTORNEY SECTION -->

<section class="section_3">
  <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-6" id="section3_text">
      <h3><?php the_field('job_title'); ?><br><b><?php the_field('head_attorney_name'); ?></b></h3>
      <h5><?php the_field('head_attorney_tag_line'); ?></h5>
      <p><?php the_field('head_attorney_text_area'); ?></p>
      <a href="<?php the_field('head_attorney_button_url'); ?>"><h4 class="section_cta" id="section3_cta"><?php the_field('head_attorney_button_text'); ?></h4></a>
    </div>
    <div class="col-md-1"></div>
  </div>
</section>

<!-- SECTION 4 - ATTORNEY TEAM/MEET THE LAWYERS SECTION -->

<section class="section_4">
  <div class="row">
    <div class="col-md-12">
      <h2 class="section_title" id="section4_title">OUR LAW TEAM</h2>
    </div>
  </div>
  <div class="law_firm">
    <div class="row">
      <div class="container">
        <div class="col-lg-4">
          <div class="tab">
            <img class="cirimage" id="image1" src="<?php the_field('attorney_1_image'); ?>" alt="<?php the_field('attorney_1_name'); ?>">
            <h2 class="name"><?php the_field('attorney_1_name'); ?></h2>
            <div class="tabcontent1">
              <p>
                <?php the_field('attorney_1_bio'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tab">
            <img class="cirimage" id="image2" src="<?php the_field('attorney_2_image'); ?>" alt="<?php the_field('attorney_2_name'); ?>">
            <h2 class="name"><?php the_field('attorney_2_name'); ?></h2>
            <div class="tabcontent1">
              <p>
                <?php the_field('attorney_2_bio'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tab">
            <img class="cirimage" id="image3" src="<?php the_field('attorney_3_image'); ?>" alt="<?php the_field('attorney_3_name'); ?>">
            <h2 class="name"><?php the_field('attorney_3_name'); ?></h2>
            <div class="tabcontent1">
              <p>
                <?php the_field('attorney_3_bio'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 5 - SPRITES/AWARDS/NOTICES SECTION -->

<section class="section_5">
  <div class="container">
    <div class="row">
      <div id="sprite" class="col-md-3">
        <img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/YoungLawyers.jpg" alt="Top Young Lawyer 2015">
      </div>
      <div id="sprite" class="col-md-3">
        <img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/nbc6.png" alt="News 6">
      </div>
      <div id="sprite" class="col-md-3">
        <img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/MMDAdvocates.png" alt="Multi Milliion Dollar Advocates Forum">
      </div>
      <div id="sprite" class="col-md-3">
        <img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/Local_10_WPLG.png" alt="Local 10">
      </div>
    </div>
    <div class="row">
      <div id="sprite" class="col-md-4">
        <img style="height: 150px" width="" src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/american-justice.png" alt="American Association for Justice">
      </div>
      <div id="sprite" class="col-md-4">
        <img style="display: block; margin-right:auto; margin-left:auto;" src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/super-lawyers.png" alt="Super Lawyers">
      </div>
      <div id="sprite" class="col-md-4">
        <img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/7News.png" alt="News 7">
      </div>
    </div>
  </div>
</section>

<!-- SECTION 6 - RECENT BLOG POSTS SECTION -->

<section class="section_6">
  <div class="row">
    <div class="col-md-12">
      <h2 class="section_title">RECENT BLOG ARTICLES</h2>
    </div>
  <div class="row">
    <div class="container">
        <div class="blog_post">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 4 ) );  ?>
              <?php if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

                <div id="blog-spaces" class="col-lg-3">
                  <div class="blog_loop">
                    <?php the_post_thumbnail(); ?>
                    <a style="color:#333333;" href="<?php the_permalink(); ?>"><h4> <?php the_title(); ?> </h4></a>
                    <p>  <?php the_excerpt(); ?> </p>
                    <a id="read_more" href="<?php the_permalink(); ?>">Read More</a>
                  </div>
                </div>
                <?php wp_reset_postdata(); ?>
              <?php endwhile; endif; ?>
          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
          <span class="blog_stretch"></span>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <a href="#"><h4 class="section_cta" id="section6_cta">VIEW ALL ARTICLES</h4></a>
    </div>
  </div>
</section>

<!-- SECTION 7 - UNDERSTANDING THE LAW SECTION -->

<section class="section_7">
  <div class="row">
    <div class="col-md-12">
      <h2 id="section7_sectiontitle" class="section_title">UNDERSTANDING THE LAW</h2>
    </div>
  <div class="row">
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php $query = new WP_Query(
                  array(
                      'post_type'       =>  'page',
                      'post_parent'     =>  540,
                      'posts_per_page'  =>  12,
                      'orderby'         =>  'title',
                      'order'           =>  ASC,
                      'depth'           =>  0,
                  )
              );
          ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

          <?php wp_reset_postdata(); ?>
        <?php endwhile; endif; ?>
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- SECTION 8 - VIDEO LIBRARY SECTION -->

<section class="section_8">
  <div class="row">
    <div class="col-md-12">
      <h2 id='section8_sectiontitle' class="section_title">VIDEO LIBRARY</h2>
    </div>
  <div class="row">
    <div id="vid_frame" class="col-md-6">
      <iframe id="main_video" width="560" height="315" src="<?php the_field('featured_video_url'); ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="video_title_box" class="col-md-6">
      <h2>FEATURED VIDEO:</h2>
      <h3><i><?php the_field('featured_video_title'); ?></i></h3>
      <hr>
      <a href="<?php the_field('see_more_url');  ?>"><h6 id="section8_button">See More Videos</h6></a>
    </div>
    <div class="row">
      <div class="container">
        <div id="video_container" class="col-md-4">
          <ul>
            <li><a href="https://www.youtube.com/watch?v=VSqM_tR29BI" target"_blank">HOW MUCH DOES AN ACCIDENT<br>LAWYER COST?</a></li>
            <li><a href="https://www.youtube.com/watch?v=fTgfwJG8ojE" target"_blank">HIT AND RUN<br>ACCIDENTS</a></li>
            <li><a href="https://www.youtube.com/watch?v=w_TjDVdlj20" target"_blank">HOW TO DETERMINE FAULT IN A<br>CAR ACCIDENT CASE</a></li>
            <li><a href="https://www.youtube.com/watch?v=ZPgQ1kS1AHg" target"_blank">UBER OR TAXI<br>ACCIDENTS</a></li>
            <li><a href="https://www.youtube.com/watch?v=BaUwhH20iFQ" target"_blank">BICYCLE<br>ACCIDENTS</a></li>
          </ul>
        </div>
        <div id="video_container" class="col-md-4">
          <ul>
            <li><a href="https://www.youtube.com/watch?v=z83tU9tlhDI" target"_blank">CRUISE SHIP<br>INJURIES</a></li>
            <li><a href="https://www.youtube.com/watch?v=OEhcx6gyXSg" target"_blank">HOW LONG DO I HAVE<br>TO FILE MY CASE?</a></li>
            <li><a href="https://www.youtube.com/watch?v=o04MgbvcQ_0" target"_blank">HAS YOUR LOVED ONE SUFFERED<br>NURSING HOME ABUSE?</a></li>
            <li><a href="https://www.youtube.com/watch?v=85YZSsCw0fU" target"_blank">UNDERINSURED<br>MOTORIST COVERAGE</a></li>
          </ul>
        </div>
        <div id="video_container" class="col-md-4">
          <ul>
            <li><a href="https://www.youtube.com/watch?v=dEADDI0lQss" target"_blank">DRUNK DRIVING<br>ACCIDENTS</a></li>
            <li><a href="https://www.youtube.com/watch?v=KZ7Gj2QqK_o" target"_blank">HOW MUCH IS MY<br>CLAIM WORTH?</a></li>
            <li><a href="https://www.youtube.com/watch?v=phnwJDo_fhE" target"_blank">PEDESTRIAN<br>ACCIDENTS</a></li>
            <li><a href="https://www.youtube.com/watch?v=mZQkxQar5xk" target"_blank">WHAT IF I'M A PASSENGER IN<br>AN ACCIDENT?</a></li>
          </ul>
        </div>
      </div>
    </div>
</section>

<!-- SECTION 9 - PERSONAL INJURY BUTTON SECTION -->

<section class="section_9">
  <div class="row">
    <div class="col-md-12">
      <h2 id="section8_sectiontitle" class="section_title">PERSONAL INJURY</h2>
    </div>
  <div class="row">
    <div class="container">
      <div class="practice_area_wrapper">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php $query = new WP_Query(
                      array(
                          'post_type'       =>  'page',
                          'post_parent'     =>  3476,
                          'orderby'         =>  'title',
                          'order'           =>  ASC,
                          'posts_per_page'  =>  '33',
                          'depth'           =>  0,
                      )
                  );
          ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="col-md-4">
              <div id="button_list_1">
                <a href=" <?php the_permalink(); ?> "><li><button type="button" name="button"> <?php the_title(); ?></button></li></a>
              </div>
            </div>

            <?php wp_reset_postdata(); ?>
          <?php endwhile; endif; ?>
        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<!-- SECTION 10 - CONTACT US SUBMISSION FORM -->

<section class=section_10>
  <div class="row">
    <div class="col-md-12">
      <h2 class="section_title">CONTACT US</h2>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-md-12">
        <form class="contact_us_form" action="" method="post">
          <div class="contact_form_left">
            <p><input type="text" name="name" placeholder="Name"></p>
            <p><input type="email" name="email" placeholder="Email"></p>
            <p><input type="text" name="phone" placeholder="Phone Number"></p>
          </div>
          <div class="contact_form_right">
            <textarea name="message" rows="4" cols="80" placeholder="How Can We Help You?"></textarea>
            <input id="contact_submit" type="submit" name="contact_form_submit" value="Contact Us">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 11 - LOCATIONS/CONTACT US INFORMATION -->

<section class="section_11">
  <div class="location_title">
    <h2 id="section11_sectiontitle" class="section_title">OUR LOCATIONS</h2>
  </div>
  <div class="location_container">
    <div class="map1">
      <div class="map_title">
        <h2><?php the_field('city1_name'); ?></h2>
        <h4><?php the_field('city1_address'); ?>
            <?php the_field('city1_address_city'); ?>, <?php the_field('city1_address_state'); ?> <?php the_field('city1_address_zip'); ?></h4>
      </div>
      <div class="overlay" onClick="style.pointerEvents='none'"></div>
      <iframe src="<?php the_field('city1_googmap'); ?>" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="loc_contact">
          <h3>Phone:      <?php the_field('city1_phone'); ?><br>
              Toll Free:  <?php the_field('city1_tollfree'); ?><br>
              Fax:        <?php the_field('city1_fax'); ?></h3>
          <a id="googplus" href="<?php the_field('googleplus_url'); ?>"><img src="http://madalon2.wpengine.com/wp-content/uploads/2016/11/google-plus-64-1.png" alt="Google+"></a>
        </div>
    </div>

    <div class="map2">
      <div class="map_title">
        <h2><?php the_field('city2_name'); ?></h2>
        <h4><?php the_field('city2_address'); ?>
          <?php the_field('city2_address_city'); ?>, <?php the_field('city2_address_state'); ?> <?php the_field('city2_address_zip'); ?></h4>
      </div>
      <div class="overlay" onClick="style.pointerEvents='none'"></div>
      <iframe src="<?php the_field('city2_googmap'); ?>" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="loc_contact">
          <h3>Phone:      <?php the_field('city2_phone'); ?><br>
              Toll Free:  <?php the_field('city2_tollfree'); ?><br>
              Fax:        <?php the_field('city2_fax'); ?></h3>
          <a id="googplus" href="<?php the_field('googleplus_url'); ?>"><img src="http://madalon2.wpengine.com/wp-content/uploads/2016/11/google-plus-64-1.png" alt="Google+"></a>
        </div>
    </div>

    <div class="map3">
      <div class="map_title">
        <h2><?php the_field('city3_name'); ?></h2>
        <h4><?php the_field('city3_address'); ?>
          <?php the_field('city3_address_city'); ?>, <?php the_field('city3_address_state'); ?> <?php the_field('city3_address_zip'); ?></h4>
      </div>
      <div class="overlay" onClick="style.pointerEvents='none'"></div>
      <iframe src="<?php the_field('city3_googmap'); ?>" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="loc_contact">
          <h3>Phone:  <?php the_field('city3_phone'); ?></h3>
          <a id="googplus" href="<?php the_field('googleplus_url'); ?>"><img src="http://madalon2.wpengine.com/wp-content/uploads/2016/11/google-plus-64-1.png" alt="Google+"></a>
        </div>
    </div>
    <span class="stretch"></span>
  </div>

</section>

<!-- SECTION 12 - PRE-FOOTER NAVIGATION/BRANDING SECTION -->

<section class="section_12">
  <div class="container">
    <img src="<?php the_field('header_logo'); ?>" alt=" <?php bloginfo('name'); ?> ">
    <nav class="footer-nav">
      <?php
        $defaults = array(
          'container'      => true,
          'theme_location' => 'footer_nav',
          'menu_class'     => ''
        );
        wp_nav_menu( $defaults );
      ?>
    </nav>
  </div>
</section>

<!-- SECTION 13 - SOCIAL MEDIA/DISCLAIMER SECTION -->

<section class="section_13">
  <div class="container">
    <div class="footerlocalities">
      <div class="social" id="footer-social">
        <div class="description">
            <a href="<?php the_field('facebook_url'); ?>" target="_blank"><img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/facebook-64-1.png" alt="Facebook"></a>
            <a href="<?php the_field('twitter_url'); ?>" target="_blank"><img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/twitter-64-1.png" alt="Twitter"></a>
            <a href="<?php the_field('linkedin_url'); ?>" target="_blank"><img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/linkedin-64-1.png" alt="LinkedIn"></a>
            <a href="<?php the_field('googleplus_url'); ?>" target="_blank"><img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/google-plus-64-1.png" alt="Google Plus"></a>
            <a href="<?php the_field('youtube_url'); ?>" target="_blank"><img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/youtube-64-1.png" alt="Youtube"></a>
            <a href="<?php the_field('instagram_url'); ?>" target="_blank"><img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/instagram_64-3.png" alt="Instagram"></a>
            <a href="<?php the_field('pinterest_url'); ?>" target="_blank"><img src="http://localhost/ec-madalonlaw.com/wp-content/uploads/2017/02/pinterest-64-1.png" alt="Pinterest"></a>
            <?php the_field('disclaimer_text'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
