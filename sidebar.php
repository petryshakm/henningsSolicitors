<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
	<aside>
		<h2 class = "hide-element">Get in touch</h2>
		<div class="aside-block">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>
	</aside>
<?php } ?>