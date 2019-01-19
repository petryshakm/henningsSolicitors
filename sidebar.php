<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
	<aside>
		<div class="aside-block">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>
	</aside>
<?php } ?>