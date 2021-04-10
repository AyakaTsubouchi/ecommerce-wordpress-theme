<?php get_header(); ?>

<section class="page-wrap indiv-feedback">
    <div class="container">


<div class="patient-info">
    
    <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
    <h3><?php the_title(); ?></h3>
</div>
        
        

<div class="feedback-content">
<?php the_content(); ?>
</div>


    </div>
</section>


<?php get_footer(); ?>
