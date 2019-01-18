<?php get_header(); ?>
		<div class="section-inner">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>	
						<?php the_title( '<h1 class = "title">', '</h1>', true ); ?>
						<?php the_content(); ?>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>