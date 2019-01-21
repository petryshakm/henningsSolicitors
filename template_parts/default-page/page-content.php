<?php  
$show_sidebar = get_post_meta( $post->ID, 'show_sidebar', true );

?>
<section class="section-content inner-page">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<article>
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>	
					<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</article>
				<?php 
					if ($show_sidebar) get_sidebar();
				?>
			</div>
		</div>
	</div>
</section>