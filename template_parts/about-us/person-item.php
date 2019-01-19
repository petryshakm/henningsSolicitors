<?php $person_position = get_post_meta( $post->ID, 'person_position', true ); ?>

<div class="item">
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
		<span>
			<?php the_title(); ?>
		</span>
		<span>
			<?php echo $person_position; ?>
		</span>
	</a>
</div>