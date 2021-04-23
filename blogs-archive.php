<?php
/*
Template name: Blogs archive
*/
?>
<?php get_header(); ?>
<div class="archive-blogtype blogs min-height">

        <?php

        defined('ABSPATH') || exit;

        do_action('woocommerce_before_main_content');

        ?>


    <div class="contents min-height">
        <div class="container">
            <?php
            if (have_posts()) :

                while (have_posts()) : the_post();

            ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>

                    <div class="flex container">
                        <?php
                        global $post;
                        $blogs_posts = get_posts(array(
                            'post_type' => 'blogs',
                            'posts_per_page' => 100
                        ));
                        if ($blogs_posts) {
                            foreach ($blogs_posts as $post) :
                                setup_postdata($post);
                        ?>
                                <div class="my-card">
                                    <a href="<?php the_permalink(); ?>"> <img src="
                                    <?php
                                    if (get_the_post_thumbnail_url()) {
                                        echo get_the_post_thumbnail_url();
                                    } else {
                                        echo "http://medproducts.goopter.com/wp-content/uploads/2021/03/images-square-outlined-interface-button-symbol.png";
                                    };

                                    ?>" alt="<?php the_title(); ?>"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>

                                    </div>
                                </div>
                        <?php
                            endforeach;
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                    <!-- </div> -->
                    <?php

                    $bgImg = "url('" . get_field('banner_background_image') . "'); background-repeat:no-repeat; background-position:center;background-size: 150%;";
                    $bgColor = "linear-gradient(" . get_field('banner_background_color') . "," . get_field('banner_background_color') . ")";

                    $background =  "background-image: " . $bgColor . " ," . $bgImg . " ";

                    $title = get_field('banner_title');
                    $text = get_field('banner_text');
                    $button_text = get_field('banner_button_text');
                    $button_link = get_field('banner_button_link');
                    ?>
        </div>
    </div>
    <section class="banner" style="<?php echo $background ?>">
        <div class="container">
            <h2><span><?php echo $title; ?></span></h2>
            <p><?php echo $text; ?></p>
            <a href="<?php echo $button_link ?>" class="custom-btn"><?php echo $button_text ?></a>
        </div>
    </section>

<?php
                endwhile;

            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');

            endif;


?>



<?php get_footer(); ?>