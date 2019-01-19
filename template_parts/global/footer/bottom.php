<?php  
$footer_copyright = (( get_theme_mod('footer_copyright') ) ? '© '.get_theme_mod('footer_copyright').' '.get_the_date('Y') : '');
$footer_text = (( get_theme_mod('footer_text') ) ? get_theme_mod('footer_text') : '');
$privacy_policy_link = (( get_theme_mod('privacy_policy_link') ) ? '<a href="'.get_page_link( get_theme_mod('privacy_policy_link') ).'">Privacy policy</a>' : '');

?>

<div class="bottom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="items">
					<div class="item">
						<?php echo $footer_copyright; ?>
					</div>
					<div class="item">
						<?php echo $footer_text; ?>
						<?php echo $privacy_policy_link; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>