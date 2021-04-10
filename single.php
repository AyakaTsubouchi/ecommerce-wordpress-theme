<?php
get_header();
?>

  <main id="primary" class="site-main">

<?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', get_post_type() );

      // the_post_navigation(
      //   array(

      //     'next_text' => 

      //                 '<div class="section-nav-pagination">
      //                     <nav aria-label="Page navigation example">
      //                        <ul class="pagination">

      //                           <li class="nav-subtitle page-item ">
      //                               <span class="nav-subtitle">' 
      //                                 .esc_html__( 'Next', 'goopter' ). 
      //                               '</span> 
      //                           </li> 

      //                           <li class="nav-subtitle page-item ">
      //                               <span class="nav-subtitle">' 
      //                                 .esc_html__( 'Next', 'goopter' ). 
      //                               '</span> 
      //                           </li> 

      //                           <li class="nav-subtitle page-item ">
      //                               <span class="nav-subtitle">' 
      //                                 .esc_html__( 'Next', 'goopter' ). 
      //                               '</span> 
      //                           </li> 
                      
      //                        </ul>
      //                     </nav>
      //                 </div>',


      //     'next_text' => 

      //                 '<div class="section-nav-pagination">
      //                     <nav aria-label="Page navigation example">
      //                        <ul class="pagination">

      //                           <li class="nav-subtitle page-item ">
      //                               <span class="nav-subtitle">' 
      //                                 .esc_html__( 'Next', 'goopter' ). 
      //                               '</span> 
      //                           </li> 
                      
      //                        </ul>
      //                     </nav>
      //                 </div>',

          
      //     'next_text' => '<span class="nav-subtitle page-item">' . esc_html__( 'Next:', 'goopter' ) . '</span> <span class="nav-title">%title</span>',
      //   )
      // );

          // //If comments are open or we have at least one comment, load up the comment template.
          // if ( comments_open() || get_comments_number() ) :
          //   comments_template();
          // endif;

      endwhile; // End of the loop.
?>

  </main>      <!-- #main -->

                  
<?php
  get_footer();
?>