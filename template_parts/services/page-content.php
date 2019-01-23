<section class="section-our-services">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="hide-element">Our services list</h2>
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>	
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>

				<div class="services-items">
					<?php  
						$args = array(
							'post_type' 		=> 'post',
							'post_status' 		=> 'publish',
							'posts_per_page' 	=> -1,
							'orderby'			=> 'title',
							'order'				=> 'ASC',
							'category_name'		=> 'services'

						);

						$services_query = new WP_Query( $args );
						if ( $services_query->have_posts() ) {
							while ( $services_query->have_posts() ) { $services_query->the_post();
								get_template_part('template_parts/global/service-item');
							}
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</section>