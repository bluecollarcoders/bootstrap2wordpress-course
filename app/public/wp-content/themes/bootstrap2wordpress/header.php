<?php
/**
 * The Header file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap2wordpress
 * @since Bootstrap to WordPress 2.0
 */


?>

<!DOCTYPE html>
<html  <?php language_attributes(); ?>  >
  <head>
    <meta charset="UTF-8" />
    <title>Bootstrap to WordPress</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
   <?php wp_head(); ?>
    
  </head>
  <body <?php body_class(); ?> >
    <div id="top-navigation">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-6">
            
            <!-- <nav class="nav main-menu">
              <ul
                class="top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled"
              >
                <li class="menu-item"><a href="index.html">Home</a></li>

                
                <li class="menu-item menu-item-has-children">
                  <a href="index.html">Blog</a>

                

                  <ul class="sub-menu">
                    <li class="menu-item"><a href="index.html">Kitchen</a></li>
                    <li class="menu-item"><a href="index.html">Recipes</a></li>

                   
                    <li class="menu-item menu-item-has-children">
                      <a href="index.html">Dining -></a>
                      <ul class="sub-menu">
                        <li class="menu-item">
                          <a href="index.html">Sliverware</a>
                        </li>
                        <li class="menu-item">
                          <a href="index.html">Sliverware</a>
                        </li>
                        <li class="menu-item">
                          <a href="index.html">Sliverware</a>
                        </li>
                      </ul>
                    </li>

                    
                  </ul>

                
                </li>
                <li class="menu-item"><a href="widgets.html">Widgets</a></li>
                <li class="menu-item"><a href="contact.html">Contacts</a></li>
                <li class="menu-item special-menu">
                  <a href="join.html">Join</a>
                </li>
              </ul>
            </nav> -->

            <?php 
            
            wp_nav_menu(array(
              'theme_location' => 'primary', // as register in functions.php
              'depth'          => 3, //as we set up in our css
              'container'      => 'nav', // html wrapper of the menu ul
              'container_class' => 'main-menu', // wrapper class
              'menu_class'     => 'top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled',
              'fallback_cb'    =>  false
            ));
            
            
            ?>


            <button type="button" class="navbar-open">
              <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
            </button>
          </div>
        </div>


        <!-- mobile menu -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>
          <div class="close-btn">
            <i class="flaticon flaticon-close"></i>
          </div>
          <nav class="menu-box">
            <ul class="navigation clearfix"></ul>
          </nav>
        </div>
      </div>
    </div>