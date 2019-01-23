<section class="section-title">
	<h1>
		<?php  
			if (is_single() && has_category( 'services' )) {
				echo 'Our Services';
			} else{
				the_title();
			}
		?>
	</h1>
</section>