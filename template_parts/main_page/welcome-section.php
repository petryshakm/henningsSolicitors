<?php 
$welcome_section = get_post_meta( $post->ID, 'welcome_section', true );
$about_us_link = get_post_meta( $post->ID, 'about_us_link', true );
$welcome_image = get_post_meta( $post->ID, 'welcome_image', true );

?>
<section class="section-welcome">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="items">
					<div class="item">
						<?php echo $welcome_section; ?>
						<?php if ($about_us_link) { ?>
							<div class="link-page">
								<a href="<?php echo $about_us_link; ?>">
									About us
								</a>
							</div>
						<?php } ?>
					</div>
					<div class="item">
						<?php echo simple_image_output($welcome_image, 'Welcome to Hennings Solicitors', ''); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>