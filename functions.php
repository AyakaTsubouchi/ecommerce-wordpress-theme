<?php


function wpb_add_google_fonts()
{
  wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap', false);
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');
function load_stylesheets()
{

  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('custom', get_template_directory_uri() . '/css/app.css', '', 1, 'all');
  wp_enqueue_style('custom');

  wp_register_style('fontawsome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), false, 'all');
  wp_enqueue_style('fontawsome');
 
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.js', '', 1, true);
  wp_enqueue_script('jquery');
  wp_deregister_script('jquery-migrate');
  wp_register_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js', '', 1, true);
  wp_enqueue_script('jquery-migrate');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_js()
{

  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
  wp_enqueue_script('bootstrap');


  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');


  wp_register_script('fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', '', 1, true);
  wp_enqueue_script('fontawesome');



  wp_register_script('kit.fontawesome', get_template_directory_uri() . '/js/kit.fontawesome.js', '', 1, true);
  wp_enqueue_script('kit.fontawesome');

  wp_register_script('jquery-mobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', '', 1, true);
  wp_enqueue_script('jquery-mobile');

  wp_register_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', '', 1, true);
  wp_enqueue_script('jquery-ui');

}
add_action('wp_enqueue_scripts', 'load_js');




/**************
 * Supporting Elements
 ****************************/
add_action('wp_head', 'wpb_add_googleanalytics');
function wpb_add_googleanalytics() { 
 
// Paste your Google Analytics tracking code from Step 4 here
 echo '<script>(function(i, s, o, g, r, a, m) {i"GoogleAnalyticsObject"] = r;
       i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
       }, i[r].l = 1 * new Date();
       a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
       a.async = 1;
       a.src = g;
       m.parentNode.insertBefore(a, m)
    })(window, document, "script", "https://www.google-analytics.com/analytics.js", "ga");

    ga("create", "UA-XXXXX-Y", "auto");
    ga("send", "pageview");
 </script>
 <!-- End Google Analytics -->';
 };



/*-----Nav Walker-----------*/
require_once('class-wp-bootstrap-navwalker.php');
/*-----Nav Walker-----------*/


/*Added Support Custom Logo*/
add_theme_support('custom-logo', array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array('site-title', 'site-description'),
));
/*Added Support Custom Logo*/


/*Added Support Slider Images*/
add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('post'));          // Posts only
add_theme_support('post-thumbnails', array('page'));          // Pages only
add_theme_support('post-thumbnails', array('post', 'slider')); // Posts and Movies

/*Added Support Slider Images*/

/*Added Nav Menu*/

function consilting_register_nav_menu()
{
  register_nav_menus(array(

    'primary_menu' => __('Primary Menu', 'skg'),
    'footer_menu' => __('Footer Menu', 'skg'),
    'footer_menu2' => __('Footer Menu2', 'skg'),
  ));
}
add_action('after_setup_theme', 'consilting_register_nav_menu');

/*Added Nav Menu*/

// Register widget area.
function clinic_widgets_init()

{
  register_sidebar(array(
    'name'          => 'Custom Header Widget Area',
    'id'            => 'custom-header-widget',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="chw-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'clinic_widgets_init');
// Register widget area.

// Register widget area.
function header_widgets_init()

{
  register_sidebar(array(
    'name'          => 'Header Widget Area2',
    'id'            => 'custom-header-widget2',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="chw-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'header_widgets_init');


// Register widget area.
function header_catnav_widgets_init()

{
  register_sidebar(array(
    'name'          => 'Header Widget Category Nav',
    'id'            => 'custom-header-catnav',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="chw-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'header_catnav_widgets_init');

// Register widget area.
function shop_sidebar_init()

{
  register_sidebar(array(
    'name'          => 'Shop sidebar',
    'id'            => 'shop-sidebar',
    'before_widget' => '<div class="shop-sidebar>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="title">',
    'after_title'   => '</h5>',
  ));
}
add_action('widgets_init', 'shop_sidebar_init');
// Register widget area.

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init()
{
  register_sidebar(array(
    'name'          => __('Shop sidebar', 'textdomain'),
    'id'            => 'shop-sidebar',
    'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
    'before_widget' => '<div id="%1$s" class="widget %2$s shop-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widgettitle">',
    'after_title'   => '</h5>',
  ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');
/*Added Slider Post in Wordpress*/
function slider_section()
{

  $slider_labels = array(
    'name' => __('Slider', 'skg_site'),
    'singular_name' => __('Slider', 'skg_site'),
    'add_new' => __('Add new Slider', 'skg_site'),
    'add_new_item' => __('Add new Slider', 'skg_site'),
    'featured_image' => __('Slider Image', 'skg_site'),
    'set_featured_image' => __('Set Slider Image', 'skg_site'),

  );

  $slider = array(
    'labels' =>  $slider_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'slider'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('slider', $slider);
}

add_action('init', 'slider_section');

/*Added Slider Post in Wordpress*/


/*Added Blog Post in Wordpress*/
function blog_post_type()
{

  $blog_labels = array(
    'name' => __('Blogs', 'skg_site'),
    'singular_name' => __('Blog', 'skg_site'),
    'add_new' => __('Add new blog', 'skg_site'),
    'add_new_item' => __('Add new blog', 'skg_site'),
    'featured_image' => __('blog post image', 'skg_site'),
    'set_featured_image' => __('Set blog image', 'skg_site'),

  );

  $blog_args = array(

    'labels' =>  $blog_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'Blogs'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('blogs', $blog_args);
}

add_action('init', 'blog_post_type');
/*register blogts sidebar in Wordpress*/
function blogs_widget_init()

{
  register_sidebar(array(
    'name'          => 'Blog Post Sidebar',
    'id'            => 'blog-post-sidebar',
    'before_widget' => '<div class="blog-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="blog-sidebar-title">',
    'after_title'   => '</h5>',


  ));
}
add_action('widgets_init', 'blogs_widget_init');


/*Added Blog Post in Wordpress*/

// get post image url
add_action('rest_api_init', 'register_rest_images');
function register_rest_images()
{
  register_rest_field(
    array('gallery'),
    'fimg_url',
    array(
      'get_callback'    => 'get_rest_featured_image',
      'update_callback' => null,
      'schema'          => null,
    )
  );
}
function get_rest_featured_image($object, $field_name, $request)
{
  if ($object['featured_media']) {
    $img = wp_get_attachment_image_src($object['featured_media'], 'href');
    return $img[0];
  }
  return false;
}
// end of get post image url



/*Added businessInfo Post in Wordpress*/
function businessInfo_post_type()
{

  $businessInfo_labels = array(
    'name' => __('businessInfo', 'skg_site'),
    'singular_name' => __('Business Info', 'skg_site'),
    'add_new' => __('Add new business Info', 'skg_site'),
    'add_new_item' => __('Add new business info', 'skg_site'),
    'featured_image' => __('Business info post image', 'skg_site'),
    'set_featured_image' => __('Set business info image', 'skg_site'),

  );

  $businessInfo_args = array(

    'labels' =>  $businessInfo_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'businessInfo'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('businessInfo', $businessInfo_args);
}

add_action('init', 'businessInfo_post_type');

/*Added businessInfo Post in Wordpress*/








// Changing excerpt more
function new_excerpt_more($more)
{
  global $post;
  return '??? <a href="' . get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Changing excerpt more


//for easy appointment translate(loco translate)
load_theme_textdomain('themify', TEMPLATEPATH . '/languages');



//for woocommerce
function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


// single product
/**
 * Change number of related products output
 */
function woo_related_products_limit()
{
  global $product;

  $args['posts_per_page'] = 3;
  return $args;
}
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args', 20);
function jk_related_products_args($args)
{
  $args['posts_per_page'] = 3; // 3 related products
  $args['columns'] = 3; // arranged in 2 columns
  return $args;
}

function yourtheme_setup()
{
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'yourtheme_setup');


//allow to upload svg file
function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action('bulk_actions-{screen_id}', 'my_bulk_action');

//add image icon to the nav menu
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args)
{

  // loop
  foreach ($items as &$item) {

    $icon = get_field('icon', $item);
    $iconBg = get_field('icon_background', $item);

    if ($icon) {
      $item->title .= ' <img src="' . $icon . '" style="background:' . $iconBg . '"}>';
    }
  }

  return $items;
}

//======================
//woocommerce 
//======================/
//new badge
add_action('woocommerce_before_shop_loop_item_title', 'new_badge_shop_page', 3);

function new_badge_shop_page()
{
  global $product;
  $newness_days = 30;
  $created = strtotime($product->get_date_created());
  if ((time() - (60 * 60 * 24 * $newness_days)) < $created) {
    echo '<span class="itsnew onsale">' . esc_html__('New!', 'woocommerce') . '</span>';
  }
}

//get reviews

function get_woo_reviews()
{
  $count = 0;
  $html_r = "";
  $title = "";
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => 4
  );

  $comments_query = new WP_Comment_Query;
  $comments = $comments_query->query($args);

  foreach ($comments as $comment) :
    $title = get_the_title($comment->comment_post_ID);
    $avatar = get_avatar($comment->comment_ID);
    
    $html_r = $html_r . "<div class='card flex'>";
    $html_r = $html_r . "<div>".$avatar."</div>";
    $html_r = $html_r .  "<div class='text'>";    
    $html_r = $html_r .  "<h5>" . $title . "</h5>";    
    $html_r = $html_r . "<p>" . $comment->comment_content . "</p>";
    $html_r = $html_r . "<p>Posted By" . $comment->comment_author . " On " . $comment->comment_date . "</p>";
    $html_r = $html_r .  "</div>";  
    $html_r = $html_r ."</div>";


  endforeach;
  return $html_r;
}
add_shortcode('woo_reviews', 'get_woo_reviews');




function wp_get_menu_array($current_menu) {

  $array_menu = wp_get_nav_menu_items($current_menu);
// foreach($array_menu as $m){
//   echo $m .  "\n";
// }
  // print_r($array_menu); 
  $menu = array();
  foreach ($array_menu as $m) {
      if (empty($m->menu_item_parent)) {
          $menu[$m->ID] = array();
          $menu[$m->ID]['ID'] = $m->ID;
          $menu[$m->ID]['title'] = $m->title;
          $menu[$m->ID]['url'] = $m->url;
          $menu[$m->ID]['children'] = array();
      }
  }
  $submenu = array();
  foreach ($array_menu as $m) {
      if ($m->menu_item_parent) {
          $submenu[$m->ID] = array();
          $submenu[$m->ID]['ID'] = $m->ID;
          $submenu[$m->ID]['title'] = $m->title;
          $submenu[$m->ID]['url'] = $m->url;
          $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
      }
  }
  return $menu;
}
