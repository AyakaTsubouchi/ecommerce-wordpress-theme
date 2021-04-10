<?php get_header(); ?>

<section class="page-wrap indiv-treatment">
    <div class="container">
    <div class="section_starter col-lg-12">
				<p>How we help</p>
			</div>

			 <div class="section_title col-lg-12">
				 <h4><?php the_title(); ?></h4>
			</div>

        <div class="treatment-info">
            
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
        </div>
        
        

<div class="feedback-content">
<?php the_content(); ?>
</div>


    </div>
</section>


<?php get_footer(); ?>
