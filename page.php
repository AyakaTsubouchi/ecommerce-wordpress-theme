<?php get_header(); ?>
<?php
if (have_posts()) :

    while (have_posts()) : the_post();

?>
        <div class="page">


            <section class="page-header" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('https://images.unsplash.com/photo-1483137140003-ae073b395549?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80');">
                <div class="title">
                    <h2><?php the_title(); ?></h2>
                </div>

            </section>
            <?php

            defined('ABSPATH') || exit;

            do_action('woocommerce_before_main_content');

            ?>

            <section class="content">
                <div class="container">

                    <?php the_content(); ?>
                </div>
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