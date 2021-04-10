<?php
/*
Template name: Home
*/
?>
<?php get_header(); ?>

<?php
if (have_posts()) :

	while (have_posts()) : the_post();

		$sampleImg = "https://images.unsplash.com/photo-1617814077139-3075f20233a3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1266&q=80";
?>
		<div class="home">


			<section class="home-slider">
				<img src="https://images.unsplash.com/photo-1617823494459-88dadcb77f92?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1NHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="stylish-massager">
			</section>
			<section class="home-banner">
				<h5>FREE SHIPPING FOR ORDERS OVER $49</h5>
			</section>
			<section class="home-prodcat flex">
				<?php include('inc/home-categorylist.php'); ?>

			</section>
			<section class="home-featured-prod">
				<h5>WHAT'S NEW</h5>
				<div class="card-deck flex">


					<div class="card" style="background-image:url('<?php echo $sampleImg; ?>'); height: 200px;">
						<p>Category1</p>
					</div>
					<div class="card" style="background-image:url('<?php echo $sampleImg; ?>'); height: 200px;">
						<p>Category1</p>
					</div>
					<div class="card" style="background-image:url('<?php echo $sampleImg; ?>'); height: 200px;">
						<p>Category1</p>
					</div>
				</div>
			</section>
			<section class="home-blog">
				<h5>NEWS & POSTS</h5>
				<div class="card-deck flex">
					<div class="card">
						<img src="<?php echo $sampleImg; ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<div class="meta">

								<p>By admin</p>
								<p class="like">
									12
									<i class="fas fa-heart"></i>
								</p>
								<p class="comment">
									12
									<i class="far fa-comment"></i>
								</p>
							</div>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
					<div class="card">
						<img src="<?php echo $sampleImg; ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<div class="meta">

								<p>By admin</p>
								<p class="like">
									12
									<i class="fas fa-heart"></i>
								</p>
								<p class="comment">
									12
									<i class="far fa-comment"></i>
								</p>
							</div>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</section>
			<section class="home-gallery">
				GALLERY
			</section>
			<section class="home-discount">
				SPECIAL OFFERS
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