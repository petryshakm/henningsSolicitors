<?php  
	$more_services_link = get_post_meta( $post->ID, 'more_services_link', true );

	$args = array(
		'post_type' 		=> 'post',
		'post_status' 		=> 'publish',
		'posts_per_page' 	=> -1,
		'orderby'			=> 'menu_order',
		'order'				=> 'ASC',
		'category_name'		=> 'services',
		'tag'				=> 'home'
	);

	$services_query = new WP_Query( $args );
	if ( $services_query->have_posts() ) {
?>
		<section class="section-our-services">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h2>
							Our Services
						</h2>
						<div class="services-items">
							<?php  
								while ( $services_query->have_posts() ) { $services_query->the_post();
									get_template_part('template_parts/global/service-item');
								}
							?>
						</div>
						<?php if ($more_services_link) { ?>
							<div class="link-page">
								<a href="<?php echo $more_services_link; ?>">
									MORE SERVICES
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
<?php 
	}
	wp_reset_postdata();
?>