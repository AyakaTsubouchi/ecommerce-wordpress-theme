<?php
/*
Template name: Contact
*/
?>
<?php get_header(); ?>
<?php
if (have_posts()) :

	while (have_posts()) : the_post();
?>
		<section class="contact">
			<section class="hero">
			</section>
			<section class="contact-info">
				<div class="row">
					<div class="col-lg-3">address</div>
					<div class="col-lg-3">phone</div>
					<div class="col-lg-3">working hours</div>
					<div class="col-lg-3">email</div>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2606.3339765546675!2d-122.99088918417978!3d49.21319298361258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548676408a97bff9%3A0xdb6b11078349ddab!2sGoopter%20eCommerce%20Solutions!5e0!3m2!1sja!2sca!4v1617842707399!5m2!1sja!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

				</div>
			</section>
			<section class="form">
				<h5>SEND US AN EMAIL</h5>
			</section>
			<section class="sns">
			</section>
		</section>
<?php
	endwhile;

else :
	_e('Sorry, no posts matched your criteria.', 'textdomain');

endif;

?>
<?php get_footer(); ?>