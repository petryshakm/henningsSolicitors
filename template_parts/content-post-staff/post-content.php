<?php $person_position = get_post_meta( $post->ID, 'person_position', true ); ?>

<section class="section-personal">
	<div class="container-fluid">
		<div class="row row-top">
			<div class="col-lg-7">
				<div class="personal-items">
					<div class="item">
						<div class="flex-block">
							<div class="img">
								<?php the_post_thumbnail( $size = 'staff-inner-thumb' ); ?>
							</div>
							<div class="text">
								<p class="h2">
									<?php echo $person_position; ?>
								</p>
								<?php if(have_posts()) : ?>
								<?php while(have_posts()) : the_post(); ?>	
								<?php the_content(); ?>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="contact-info">
					<?php get_template_part( 'template_parts/content-post-staff/get-in-touch' ); ?>
					<?php get_template_part( 'template_parts/contacts-page/address' ); ?>
					<?php get_template_part( 'template_parts/contacts-page/social-links' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>