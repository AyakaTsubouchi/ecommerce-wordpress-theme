<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn">&times;</a>
    <div class="lang-box">
       
        <?php
        $current_lang = pll_current_language();
					if ($current_lang === 'zh') {
                        echo ' <p>Translate into:</p>';
					} else {
						echo ' <p>翻译成:</p>';
					}
                    ?>
        <?php
        if (is_active_sidebar('custom-header-widget')) {
            dynamic_sidebar('custom-header-widget');
        }
        ?>
    </div>
    <div class="search-box">
        <?php
        if (is_active_sidebar('custom-header-widget2')) {
            dynamic_sidebar('custom-header-widget2');
        }
        ?>
    </div>
    <?php
    $taxonomy     = 'product_cat';
    $orderby      = 'name';
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 0;      // 1 for yes, 0 for no  
    $title        = '';
    $empty        = 0;
    $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        // 'hierarchical' => $hierarchical,
        'title_li'     => $title,
        'hide_empty'   => $empty,
    );
    $allcats = get_categories($args); // get ALL categories 
    // $allcats = get_the_category(); // get only categories assigned to post
    $parents = $all_ids = array();

    //  find parents
    foreach ($allcats as $cats) {
        if ($cats->category_parent === 0) {
            $cats->children = array();
            $parents[] =  $cats;
        }
    }

    //  find childredn and assign it to corresponding parrent  
    foreach ($allcats as $cats) {
        if ($cats->category_parent != 0) {
            foreach ($parents as $parent) {
                if ($cats->category_parent === $parent->term_id) {
                    $parent->children[] = $cats;
                }
            }
        }
    } ?>
    <?php
    foreach ($parents as $parent) {
        if ($parent->slug === 'uncategorized') {
            continue;
        }
        $p_category_id = $parent->term_id;
        $p_cat_id = "product_cat_$p_category_id"
    ?>
        <div class="cat-title child">
            <a href="<?php echo  get_term_link($parent->slug, 'product_cat');  ?>">
                <h5><?php echo $parent->name; ?></h5>
            </a>
        </div>
    <?php
    }
    ?>
    <hr>

    <?php
    $menu_name = "primary_menu";
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

    $menus =  wp_get_menu_array($menu->term_id);

    foreach ($menus as $menu) :
    ?>
        <!-- <div class="card"> -->
        <!-- <div class="title"> -->
        <a href="<?php echo  $menu['url'] ?>">
            <h5><?php echo  $menu['title'] ?></h5>
        </a>
        <?php
        $children = $menu['children'];

        if ($menu['children']) {
            foreach ($children as $child) { ?>
                <li class="child">
                    <a href="<?php echo  $child['url'] ?>">
                        <p><?php echo $child['title']; ?></p>
                    </a>
                </li>
            <?php } ?>
        <?php
        }
        ?>
        <!-- </div> -->
        <!-- </div> -->






    <?php endforeach; ?>


</div>