<?php  
$more_services = get_post_meta( $post->ID, 'more_services', true );

if (!empty($more_services)) {

	$args = array(
	    'post_type'         => 'post',
	    'post_status'       => 'publish',
	    'orderby'           => 'date',
	    'order'             => 'ASC',
	    'post__in'			=> $more_services,
        'post__not_in'      => array($post->ID)
	    
	);

	$services_query = new WP_Query( $args );
	if ( $services_query->have_posts() ) {
		echo '
			<hr>
			<h3>More services</h3>
			<div class="more-services-items">';
			    while ( $services_query->have_posts() ) { $services_query->the_post();
					get_template_part('template_parts/content-post-service/service-item-simple');
			    }
		echo '</div>';
	}
	wp_reset_postdata();
}
?>
