<?php  
$footer_title = (( get_theme_mod('footer_title') ) ? '<div class="title">'.get_theme_mod('footer_title').'</div>' : '');
$footer_address = (( get_theme_mod('footer_address') ) ? '<p>'.get_theme_mod('footer_address').'</p>' : '');
$footer_phones = (( get_theme_mod('footer_phones') ) ? '<p>'.get_theme_mod('footer_phones').'</p>' : '');
$quality_logo = (( get_theme_mod('quality_logo') ) ? '<img src="'.get_theme_mod('quality_logo').'" alt="Conveyancing Quality">' : '');
?>

<div class="top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php echo $footer_title; ?>
				<div class="items">
					<div class="item">
						<?php echo $footer_address; ?>
						<?php echo $footer_phones; ?>
					</div>
					<div class="item">
						<?php echo $quality_logo ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>