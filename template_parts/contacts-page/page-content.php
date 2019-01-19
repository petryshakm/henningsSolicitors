<section class="section-contacts">
	<div class="container-fluid">
		<div class="row row-top">
			<div class="col-lg-7">
				<?php echo do_shortcode('[contact-form-7 id="63" title="Contact form 1" html_class = "use-floating-validation-tip"]'); ?>
			</div>

			<div class="col-lg-5">
				<div class="contact-info">
					<?php get_template_part( 'template_parts/contacts-page/get-in-touch' ); ?>
					<?php get_template_part( 'template_parts/contacts-page/address' ); ?>
					<?php get_template_part( 'template_parts/contacts-page/social-links' ); ?>
				</div>
			</div>
		</div>
	</div>
	
	<div id="map"></div>
</section>