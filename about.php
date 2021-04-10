<?php
/*
Template name: About
*/
?>
<?php get_header(); ?>

<?php
if (have_posts()) :

	while (have_posts()) : the_post();
?>
		<section class="about">
			<section class="hero">
			</section>
		</section>
<?php
	endwhile;

else :
	_e('Sorry, no posts matched your criteria.', 'textdomain');

endif;

?>


<?php get_footer(); ?>