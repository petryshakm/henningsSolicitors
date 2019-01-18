<?php 
/*
The sidebar with widgets area
*/
?>


<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
	<div id="widget-area" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div><!-- .widget-area -->
<?php } ?>