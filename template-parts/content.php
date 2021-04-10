<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php

		if ( 'services' == get_post_type() ){

			include('custom-single-post/single-services.php');
               
		}
		elseif ('projects' == get_post_type()) {
			include('custom-single-post/single-projects.php');
		}
		
		elseif ('blogs' == get_post_type()) {
			include('custom-single-post/single-blog.php');
		}


		elseif ('reconstructions' == get_post_type()) {
			include('custom-single-post/single-reconstruction.php');
		}

		elseif ('page' == get_post_type()) {
			include('content-page.php');
		}

		elseif ('posts' == get_post_type()) {
			include('custom-single-post/single-blog.php');
		}
		elseif ('feedback' == get_post_type()) {
			include('custom-single-post/single-feedback.php');
		}
		elseif ('treatments' == get_post_type()) {
			include('custom-single-post/single-treatments.php');
		}

		else{

			include('content-none.php');

		}


		?>

	
</article><!-- #post-<?php the_ID(); ?> -->
