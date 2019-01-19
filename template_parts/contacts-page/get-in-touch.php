<?php  $phone_number = get_theme_mod('phone_number'); ?>
<?php  $admin_email = get_theme_mod('admin_email'); ?>


<h5>
	Get In Touch
</h5>
<ul>
	<?php if ($phone_number) { ?>
		<li>
			<a href="tel:<?php clear_phone_num($phone_number); ?>">
				<?php echo $phone_number; ?>
			</a>
		</li>
	<?php } ?>
	
	<?php if ($admin_email) { ?>
		<li>
			<a href="mailto:<?php echo $admin_email; ?>">
				<?php echo $admin_email; ?>
			</a>
		</li>
	<?php } ?>
</ul>













