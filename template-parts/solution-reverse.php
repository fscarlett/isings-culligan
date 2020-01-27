<?php 
$args = array(  
        'post_type' => 'ic_product',
        'posts_per_page' => -1, 
        'category_name' => 'reverseosmosis',
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 

        ?>
        <div class="product-wrapper">

            <h3><?php the_title(); ?></h3>

            <?php the_content(); ?>

        </div>

        <?php
        
    endwhile;

    wp_reset_postdata(); 
 ?>