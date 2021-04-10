<?php
/*
Template name: Delivery
*/
?>
<?php get_header(); ?>

<?php
if (have_posts()) :

	while (have_posts()) : the_post();
?>
	

	

		

<?php
	endwhile;

else :
	_e('Sorry, no posts matched your criteria.', 'textdomain');

endif;

?>


<?php get_footer(); ?>