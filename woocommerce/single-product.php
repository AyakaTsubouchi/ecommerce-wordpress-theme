<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

// if (!defined('ABSPATH')) {
//     exit; // Exit if accessed directly

// }
defined('ABSPATH') || exit;

get_header();
// get_header( 'shop' );
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');
?>
<?php $product_id = get_the_ID();
$product = wc_get_product($product_id);
$rating  = $product->get_average_rating();
$num_of_review = $product->get_review_count();
$availability = $product->get_availability();
if ($availability['class'] === 'in-stock') {
    $availIconClass = "fas fa-check";
} else {
    $availIconClass = "fas fa-times";
}
$permalink = $product->get_permalink();
$attachment_ids = $product->get_gallery_image_ids();
$product_details = $product->get_data();
$description = $product_details['description'];
$short_description = $product_details['short_description'];
$image_link = array();
foreach ($attachment_ids as $attachment_id) {
    array_push($image_link, wp_get_attachment_url($attachment_id));
}
$count_img = count($attachment_ids);
$prdAttr = $product->get_attributes();
$prdSterile = $product->get_attribute('pa_sterile');
$prdLength = $product->get_attribute('pa_overall_length');
$packaging = $product->get_attribute('pa_packaging');
$brand = $product->get_attribute('brand');
$desc = $product->get_attribute('description');

$commentCount = $product->get_review_count();
$sku = $product->get_sku();
$product_tags = get_the_term_list($product_id, 'product_tag', '', '');
$product_category = get_the_term_list($product_id, 'product_cat', '', ',');
$regular_price = $product->get_regular_price();
// $product->get_sale_price();
// $product->get_price();


/* Get the product tag */
$terms = get_the_terms($product_id, 'product_tag');
$tags = array();
if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $tags[] = $term->slug;
    }
}
?>
<section class="page-header" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('https://images.unsplash.com/photo-1483137140003-ae073b395549?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80');">
    <div class="title">
        <h2>2021 Mother's Day</h2>
        <p>2021 summer sale or something</p>
    </div>

</section>
<div class="product-main min-height">
    <div class="row">
        <!-- <div class="col-xl-3 col-lg-3 sidebar">

            <?php
            //  if (is_active_sidebar('shop-sidebar')) {
            //     dynamic_sidebar('shop-sidebar');
            // } 
            ?>

        </div> -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 left-col">
            <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 left-col"> -->

            <div class="large-image">
                <div class="image-gallery">
                    <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */


                    do_action('woocommerce_before_single_product_summary');
                    ?>
                </div>

            </div>





        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 right-col">
            <!-- <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 right-col"> -->
            <div class="product-title">
                <h3><?php the_title(); ?></h3>

            </div>
            <div class="description">
                <?php echo $short_description; ?>

            </div>
            <div class="shop">

                <p class="price"><?php echo "$" . $regular_price; ?></p>
                <div class="custom-btn">
                    <a href="https://shop.goopter.com/product/63702" target="_blank">SHOP NOW</a>
                </div>
            </div>

            <div class="base-info">
                <p class="sku">SKU: <?php echo $sku; ?></p>
                <p class="categories">Categories: <?php echo $product_category; ?></p>
                <p class="tags">Tags: <?php echo $product_tags; ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="product-footer">

                <?php

                do_action('woocommerce_after_single_product_summary');
                // do_action( 'woocommerce_after_main_content' );
                ?>

            </div>
        </div>
    </div>
    <div class="mobile-sidebar">

        <?php if (is_active_sidebar('shop-sidebar')) {
            dynamic_sidebar('shop-sidebar');
        } ?>

    </div>


</div>
</div>

<section class="sns-banner">
    <h5>FOLLOW US TO GET A DISCOUNT</h5>
    <ul class="sns flex">
        <li>
            <?php if (get_field("instagram_link", 533))
                echo '<a href="' . get_field("finstagram_link", 533) . '" target="_blank" ><i class="fab fa-instagram"></i></a>' ?></li>
        <li>

            <?php if (get_field("facebook_link", 533))
                echo '<a href="' . get_field("facebook_link", 533) . '" target="_blank" ><i class="fab fa-facebook-f"></i></a>' ?>
        </li>
        <li>

            <?php if (get_field("twitter_link", 533))
                echo '<a href="' . get_field("twitter_link", 533) . '" target="_blank" ><i class="fab fa-twitter"></i></a>' ?>
        </li>
        <li>

            <?php if (get_field("linkedin", 533))
                echo '<a href="' . get_field("linkedin", 533) . '" target="_blank" ><i class="fab fa-linkedin-in"></i></a>' ?>
        </li>
        <li>

            <?php if (get_field("youtube_link", 533))
                echo '<a href="' . get_field("youtube_link", 533) . '" target="_blank" ><i class="fab fa-youtube"></i></a>' ?></li>

    </ul>
</section>





<?php
get_footer();
// get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
