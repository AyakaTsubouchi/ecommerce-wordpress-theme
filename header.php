<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="robots" content="noindex,nofollow">
   <meta name="description" content="">
   <meta name="keywords" content="HTML,CSS,JavaScript">
   <meta name="author" content="">

   <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
 
   <div class="overflow">
      <header>
         <div class="header-top flex">
            <ul class="sns flex">
               <li><i class="fas fa-headset"></i><?php
							echo get_field("phone", 533); ?> </li>
               <li>
                  <?php if (get_field("instagram_link", 533))
                     echo '<a href="' . get_field("instagram_link", 533) . '" target="_blank" ><i class="fab fa-instagram"></i></a>' ?>
                  <?php if (get_field("facebook_link", 533))
                     echo '<a href="' . get_field("facebook_link", 533) . '" target="_blank" ><i class="fab fa-facebook-f"></i></a>' ?>
                  <?php if (get_field("twitter_link", 533))
                     echo '<a href="' . get_field("twitter_link", 533) . '" target="_blank" ><i class="fab fa-twitter"></i></a>' ?>
                  <?php if (get_field("linkedin", 533))
                     echo '<a href="' . get_field("linkedin", 533) . '" target="_blank" ><i class="fab fa-linkedin-in"></i></a>' ?>
                  <?php if (get_field("youtube_link", 533))
                     echo '<a href="' . get_field("youtube_link", 533) . '" target="_blank" ><i class="fab fa-youtube"></i></a>' ?></li>
            </ul>
            <div class="header-top-nav flex">
               <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                  <div class="container">
                     <!-- Brand and toggle get grouped for better mobile display -->


                     <?php
                     wp_nav_menu(array(
                        'theme_location'    => 'primary_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                     ));
                     ?>
                  </div>
               </nav>
            </div>
            <?php
            if (is_active_sidebar('custom-header-widget')) {
               dynamic_sidebar('custom-header-widget');
            }
            ?>

         </div>
         <div class="header-main flex">
            <div class="logo">
               <a href="/">
                  <h1>KUMME</h1>
               </a>
            </div>
            <a class="open nav-toggler">
               <i class="fas fa-bars"></i>
            </a>
            <ul class="header-bottom-nav flex">
               <?php
               $taxonomy     = 'product_cat';
               $orderby      = 'name';
               $show_count   = 0;      // 1 for yes, 0 for no
               $pad_counts   = 0;      // 1 for yes, 0 for no
               $hierarchical = 0;      // 1 for yes, 0 for no  
               $title        = '';
               $empty        = 0;
               $args = array(
                  'taxonomy'     => $taxonomy,
                  'orderby'      => $orderby,
                  'show_count'   => $show_count,
                  'pad_counts'   => $pad_counts,
                  // 'hierarchical' => $hierarchical,
                  'title_li'     => $title,
                  'hide_empty'   => $empty,
               );
               $allcats = get_categories($args); // get ALL categories 
               // $allcats = get_the_category(); // get only categories assigned to post
               $parents = $all_ids = array();

               //  find parents
               foreach ($allcats as $cats) {
                  if ($cats->category_parent === 0) {
                     $cats->children = array();
                     $parents[] =  $cats;
                  }
               }

               foreach ($parents as $parent) {
                  if ($parent->slug === 'uncategorized') {
                     continue;
                  }
                  $p_category_id = $parent->term_id;
                  $p_cat_id = "product_cat_$p_category_id"
               ?>
                  <a href="<?php echo  get_term_link($parent->slug, 'product_cat');  ?>">
                     <p><?php echo $parent->name; ?></p>
                  </a>
               <?php
               }
               ?>
            </ul>
            <div class="search-box">

               <!-- <a href="#" class="search show-on-mobile"><i class="fas fa-search"></i></a> -->

               <div class="dropdown-box show-on-pc">
                  <?php
                  if (is_active_sidebar('custom-header-widget2')) {
                     dynamic_sidebar('custom-header-widget2');
                  }
                  ?>
               </div>



            </div>

      </header>

      <?php
      include('inc/sidebar.php');
      ?>
      <div class="addspace"></div>
      <!-- <div id="main"> -->