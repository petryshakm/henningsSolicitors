<title><?php if (is_front_page()){bloginfo('name'); } else{wp_title(''); } ?></title>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />



<body <?php body_class(); ?>>

<?php logotype(); ?>


<?php wp_nav_menu( array('theme_location' => 'header_menu', 'container' => false, 'items_wrap ' => '', 'menu_class' => 'mobile_menu')); ?>


<?php if (!is_front_page()) {
			get_template_part('inc/parts/part/breadcrumbs');
		} ?>