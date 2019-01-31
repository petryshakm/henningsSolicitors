<?php 
$welcome_section = get_post_meta( $post->ID, 'welcome_section', true );
$about_us_link = get_post_meta( $post->ID, 'about_us_link', true );
// $welcome_image = get_post_meta( $post->ID, 'welcome_image', true );

?>
<section class="section-welcome">
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
			<?php the_post_thumbnail( $size = 'full' ); ?>
		</div>
	</div>
</section>