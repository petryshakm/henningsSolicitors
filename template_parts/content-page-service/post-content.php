<section class="section-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<article>
					<?php get_template_part( 'template_parts/content-page-service/post-thumbnail' ); ?>
					
					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>	
							<?php the_title( '<h2>', '</h2>', $echo = true ) ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php get_template_part( 'template_parts/content-page-service/more-services' ); ?>
				</article>

				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>