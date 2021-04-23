<?php
/*
Template name: Home
*/
?>
<?php get_header(); ?>

<?php
if (have_posts()) :

	while (have_posts()) : the_post();

?>
		<div class="home">


			<section class="home-slider">
				<div class="gallery container">
					<div class="fluid_container">
						<div class="camera_wrap camera_emboss" id="gallery-camera_wrap_3">

							<?php
							global $post;

							$gallery_post = get_posts(array(
								'post_type' => 'slider',
								'posts_per_page' => 100,
							));
							$count = wp_count_posts('gallery')->publish;


							if ($gallery_post) {
								foreach ($gallery_post as $post) :
									setup_postdata($post);
							?>
									<div data-thumb="<?php echo get_the_post_thumbnail_url(); ?>" data-src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
							<?php
								endforeach;
								wp_reset_postdata();
							}
							?>
						</div>
					</div>
				</div>
			</section>

			<section class="home-prodcat">
			<h2>Categories</h2>
			<div class="flex">
				<?php include('inc/home-categorylist.php'); ?>
			</div>

			</section>
			<section class="home-featured-prod">
				<h2>WHAT'S NEW</h2>
				<div class="card-deck flex">
					<?php
					$args = array(
						'post_type' => 'product',
						'stock' => 1,
						'posts_per_page' => 3,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$loop = new WP_Query($args);
					while ($loop->have_posts()) : $loop->the_post();
						global $product; ?>
						<div class="card">
							<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
								else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="My Image Placeholder"  />'; ?>
								<h3><?php the_title(); ?></h3>
								<span class="price"><?php echo $product->get_price_html(); ?></span>
							</a>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>
			<section class="home-blog">
				<h2>NEWS & POSTS</h2>
				<div class="card-deck flex">
					<?php


					$blogs_posts = get_posts(array(
						'post_type' => 'blogs',
						'posts_per_page' => 3

					));
					?> <?php if ($blogs_posts) {
							foreach ($blogs_posts as $post) {
								setup_postdata($post);
								$id =  $post->ID;
								$review_num = get_comment_count($id);
						?>
							<div class="card">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php
												if (get_the_post_thumbnail_url()) {
													echo get_the_post_thumbnail_url();
												} else {
													echo "http://medproducts.goopter.com/wp-content/uploads/2021/03/images-square-outlined-interface-button-symbol.png";
												};
												?>" class="card-img-top" alt="...">
								</a>

								<div class="card-body">
									<div class="meta">
										<p><?php the_author(); ?></p>
										<div class="icons flex">
											<!-- <p class="like">
											12
											<i class="fas fa-heart"></i>
										</p> -->
											<p class="comment">
												<?php

												echo $review_num['approved']; ?>
												<i class="far fa-comment"></i>
											</p>
										</div>

									</div>
									<h5 class="card-title"><?php echo the_title(); ?></h5>
									<p class="card-text"><?php echo get_the_excerpt(); ?></p>
									<div class="custom-btn">
										<a href="<?php the_permalink(); ?>" class="btn">Read More</a>
									</div>

								</div>
							</div>




					<?php  }
							wp_reset_postdata();
						} ?>
				</div>


			</section>

			<section class="home-review">
				<h2>REVIEW</h2>
				<div class="card-deck flex">
					<?php echo do_shortcode('[woo_reviews]'); ?>
				</div>
			</section>
			<section class="home-gallery">
				<!-- GALLERY -->
			</section>
			<section class="home-discount">
				<!-- SPECIAL OFFERS -->
			</section>
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


		</div>



<?php
	endwhile;

else :
	_e('Sorry, no posts matched your criteria.', 'textdomain');

endif;

?>


<?php get_footer(); ?>