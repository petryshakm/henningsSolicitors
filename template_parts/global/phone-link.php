<?php  $phone_number = get_theme_mod('phone_number'); ?>

<?php if ($phone_number) { ?>
	<div class="phone">
		<a href="tel:<?php echo $phone_number; ?>">
			<i class="icone-phone"></i>
			<?php echo $phone_number; ?>
		</a>
	</div>
<?php } ?>