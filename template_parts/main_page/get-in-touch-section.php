<?php  
$main_title = get_post_meta( $post->ID, 'main_title', true );
$get_in_touch_email = get_post_meta( $post->ID, 'get_in_touch_email', true );
?>

<section class="section-get-touch">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<img src="<?php bloginfo('template_url'); ?>/img/seahorse-2-stamp.svg" alt="seahorse">
				<?php if ($main_title) { ?>
					<h2 class = "h1"><?php echo $main_title; ?></h2>
				<?php } ?>

				<?php if ($get_in_touch_email) { ?>
					<div class="link-page">
						<a href="mailto:<?php echo $get_in_touch_email; ?>">
							Get in touch
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
