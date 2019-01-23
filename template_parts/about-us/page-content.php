<section class="section-our-services">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="hide-element">Our people</h2>
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>	
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				
				<div class="about-us-items">
					<?php  
						$args = array(
							'post_type' 		=> 'post',
							'post_status' 		=> 'publish',
							'posts_per_page' 	=> -1,
							'orderby'			=> 'title',
							'order'				=> 'ASC',
							'category_name'		=> 'staff'
						);

						$aboutUs_query = new WP_Query( $args );
						if ( $aboutUs_query->have_posts() ) {
							while ( $aboutUs_query->have_posts() ) { $aboutUs_query->the_post();
								get_template_part('template_parts/about-us/person-item');
							}
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</section>
