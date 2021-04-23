<?php get_header(); ?>
<div class="single-blog">
    <!-- <section class="page-header" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('https://images.unsplash.com/photo-1483137140003-ae073b395549?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80');">
        <div class="title">
            <h2><?php the_title(); ?></h2>
        </div>

    </section> -->
    <div class="container  min-height">
        <?php
        defined('ABSPATH') || exit;
        do_action('woocommerce_before_main_content');
        ?>



        <div class="contents">
            <div class="row">
                <div class="col-xl-7 col-md-12 left-col">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <h1 class="fancy-after"><span><?php the_title(); ?></span></h1>

                    <?php the_content(); ?>
                </div>
                <div class="col-xl-5 col-md-12 right-col">
                    <?php if (is_active_sidebar('blog-post-sidebar')) {
                        dynamic_sidebar('blog-post-sidebar');
                    }; ?>
                </div>
            </div>

            <div class="related-product">
                <h5>Reated Products</h5>
                <div class="card-deck flex">
                <?php
                          if(get_field('product_id')){
                        
                            $product_id = get_field('product_id');
                            $product = wc_get_product($product_id);
                            $name = $product->get_name();
                            $price = $product->get_price();
                            $imageURL = get_the_post_thumbnail_url($product_id);
                            $permalink = get_the_permalink($product_id);
    
                            echo ' <div class="card"><a id="id-' . $product_id . '" href="' . $permalink . '" title="' . $name . '">
                    <img src="' . $imageURL . '" alt="' . $name . '"  />
                      <h3>' . $name . '</h3>
                      <span class="price">' . $price . '</span>
                  </a></div>';
                        }
                       

                        ?>
                    <?php
                          if(get_field('product_id_2')){
                        
                            $product_id = get_field('product_id_2');
                            $product = wc_get_product($product_id);
                            $name = $product->get_name();
                            $price = $product->get_price();
                            $imageURL = get_the_post_thumbnail_url($product_id);
                            $permalink = get_the_permalink($product_id);
    
                            echo ' <div class="card"><a id="id-' . $product_id . '" href="' . $permalink . '" title="' . $name . '">
                    <img src="' . $imageURL . '" alt="' . $name . '"  />
                      <h3>' . $name . '</h3>
                      <span class="price">' . $price . '</span>
                  </a></div>';
                        }
                       

                        ?>
                   
                        <?php
                          if(get_field('product_id_3')){
                        
                            $product_id = get_field('product_id_3');
                            $product = wc_get_product($product_id);
                            $name = $product->get_name();
                            $price = $product->get_price();
                            $imageURL = get_the_post_thumbnail_url($product_id);
                            $permalink = get_the_permalink($product_id);
    
                            echo ' <div class="card"><a id="id-' . $product_id . '" href="' . $permalink . '" title="' . $name . '">
                    <img src="' . $imageURL . '" alt="' . $name . '"  />
                      <h3>' . $name . '</h3>
                      <span class="price">' . $price . '</span>
                  </a></div>';
                        }
                       

                        ?>
                    
                </div>
            </div>


        </div>



    </div>
</div>

<?php get_footer(); ?>