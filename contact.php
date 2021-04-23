<?php
/*
Template name: Contact
*/
?>
<?php get_header(); ?>

<div class="contactus min-height" >
	<section class="page-header" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('https://images.unsplash.com/photo-1483137140003-ae073b395549?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80');">
                <div class="title">
                    <h2><?php the_title(); ?></h2>
                </div>

            </section>
	<div class="container" style="min-height:calc(100vh - 500px);">
		

			
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
			?>
				
					<?php
					global $post;
					$businessInfo_post = get_posts(array(
						'post_type' => 'businessInfo',
						'posts_per_page' => 1,
					));

					if ($businessInfo_post) {
						foreach ($businessInfo_post as $post) :
							
							$current_lang = pll_current_language();
							if ($current_lang === 'zh') {
								include('inc/contact-zh.php');
							} else {
								include('inc/contact-en.php');
							}
						endforeach;
						wp_reset_postdata();
					}

					?>



		
<?php
				endwhile;
			endif;
?>
	</div>
</div>

<?php get_footer(); ?>