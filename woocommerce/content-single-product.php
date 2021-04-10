<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */

do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 * 
	 */

	do_action('woocommerce_before_single_product_summary');
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */

		remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
		remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
		add_action('woocommerce_single_product_summary', 'buttons', 20);
		function buttons()
		{
		?>
			<div class="custom-btn where-to-buy">
				<a href="/contact">Where to Buy</a>
			</div>
			<div class="custom-btn certificate">
				<a href="/request-quote">Request a Quote</a>
			</div>
			


			<div class="contact-us">
				<a href="/contact"><i class="fas fa-envelope"></i>Contact Us</a>
			</div>
			<div class="resources">
				<a href="#"><i class="far fa-file-pdf"></i>Datasheet</a><br>
				<a href="#"><i class="far fa-file-pdf"></i>Safety Data Sheet</a>
			</div>
			<hr>
			<div class="ssba-classic-2 ssba ssbp-wrap left ssbp--theme-1">
				<div style="text-align:left"><span class="ssba-share-text">Share this...</span><br><a data-site="" class="ssba_facebook_share" href="http://www.facebook.com/sharer.php?u=http://localhost:8888/product/<?php the_title(); ?>/" target="_blank"><img src="http://localhost:8888/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/facebook.png" style="width: 35px;" title="Facebook" class="ssba ssba-img" alt="Share on Facebook">
						<div title="Facebook" class="ssbp-text">Facebook</div>
					</a><a data-site="pinterest" class="ssba_pinterest_share" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><img src="http://localhost:8888/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/pinterest.png" style="width: 35px;" title="Pinterest" class="ssba ssba-img" alt="Pin on Pinterest">
						<div title="Pinterest" class="ssbp-text">Pinterest</div>
					</a><a data-site="linkedin" class="ssba_linkedin_share ssba_share_link" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://localhost:8888/product/<?php the_title(); ?>/" target="&quot;_blank&quot;"><img src="http://localhost:8888/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/linkedin.png" style="width: 35px;" title="LinkedIn" class="ssba ssba-img" alt="Share on LinkedIn">
						<div title="Linkedin" class="ssbp-text">Linkedin</div>
					</a><a data-site="" class="ssba_twitter_share" href="http://twitter.com/share?url=http://localhost:8888/product/<?php the_title(); ?>/&amp;text=Puritan%205.5%E2%80%B3%20Thick%20Wood%20Stir%20Stick%20" target="&quot;_blank&quot;"><img src="http://localhost:8888/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/twitter.png" style="width: 35px;" title="Twitter" class="ssba ssba-img" alt="Tweet about this on Twitter">
						<div title="Twitter" class="ssbp-text">Twitter</div>
					</a></div>
			</div>
		<?php }

		do_action('woocommerce_single_product_summary');
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>