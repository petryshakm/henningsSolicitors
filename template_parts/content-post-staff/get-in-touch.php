<?php $phone_number = get_theme_mod('phone_number'); ?>
<?php $person_email = get_post_meta( $post->ID, 'person_email', true ); ?>



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
	
	<?php if ($person_email) { ?>
		<li>
			<a href="mailto:<?php echo $person_email; ?>">
				<?php echo $person_email; ?>
			</a>
		</li>
	<?php } ?>
</ul>













