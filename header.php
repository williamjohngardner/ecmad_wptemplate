<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right'); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <header>

      <div class="container-fluid">
        <div class="row">
            <!--Site Image/Logo Area-->
            <div class="col-md-4">
              <div class="header-left">
                <div class="site-logo">
                </div>
              </div>
            </div>
            <div class="col-sm">

            </div>
            <!--Center Header Content Area-->
            <div class="col-md-4">
              <div class="header-center">
                <a href="tel:<?php the_field('primary_phone_number'); ?>"><h2 id="primaryphone"><?php the_field('primary_phone_header_black'); ?><span id="phonematters"><?php the_field('primary_phone_header_red'); ?></span></h2></a>
              </div>
            </div>
            <!--Right Header Content Area-->
            <div class="col-md-4">
              <div class="header-right">
                <h6><i><?php the_field('right_head_top_text'); ?></i></h6>
                <h4><?php the_field('right_head_phone'); ?></h4>
                <h5><?php the_field('right_head_bottom_text'); ?></h5>
              </div>
            </div>
        </div>
      </div>
    </header>
    <nav class="primary_nav">
      <?php

       $defaults = array(
         'container'      => false,
         'theme_location' => 'primary_nav',
         'menu_class'     => 'no-bullet'
       );

       wp_nav_menu( $defaults );

       ?>
    </nav>
