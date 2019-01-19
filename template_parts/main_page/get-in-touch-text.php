<?php  
$get_in_touch_text = get_post_meta( $post->ID, 'get_in_touch_text', true );

if ($get_in_touch_text) {
?>
	<section class="section-blockquote">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<img src="<?php bloginfo('template_url'); ?>/img/seahorse.svg" alt="">
					<p>
						<?php echo $get_in_touch_text; ?>
					</p>
				</div>
			</div>
		</div>
	</section>
<?php } ?>