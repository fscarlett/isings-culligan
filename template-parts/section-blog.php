<section class="home-blog-section">

	<div class="blog-section-container container">

		<h2 class="offset-heading">Water News</h2>

		<div class="row"> 
			
			<?php 

			// $ic_tag = get_field('blog_tag');
			// $ic_tag_slug = $ic_tag->slug;

				$ic_blog_args = array(
					// 'tag' 						=> $ic_tag_slug,
	        'order'           => 'DESC',
	        'posts_per_page'  => '3',
	        );

	      $ic_blog = new WP_Query( $ic_blog_args );


	      if ( $ic_blog->have_posts() ) {

	        while ( $ic_blog->have_posts() ) {

	          $ic_blog->the_post();

	          ?>

		          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			          <a href="<?php the_permalink(); ?>" class="ic-blog-card">
									<div class="ic-home-blog-img-wrapper">
										<?php the_post_thumbnail('medium'); ?>
										<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
									</div>
									<div class="ic-home-blog-copy-card">
										<h3><?php the_title(); ?></h3> 
											<!-- <p class="ic-post-date"><?php  $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p> -->
											<!-- <p><?php the_tags(); ?></p> -->

											<?php the_excerpt(''); ?>

										<a href="<?php the_permalink(); ?>" class="btn ic-button">Learn More</a>
										<!-- <a href="<?php the_permalink(); ?>" class="custom-button-link"><button class="custom-button ic-button ic-blog-btn">Read Article</button></a> -->
									</div>
								</a>
							</div>

	        <?php
	        } // endwhile 

	      } else {
	        echo '<p>No posts have been found.</p>';
	      }; 

	      wp_reset_postdata();

	    ?> 

		</div>
	</div>
</section>