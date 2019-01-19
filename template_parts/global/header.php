<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if (is_front_page()){bloginfo('name'); } else{wp_title(''); } ?></title>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<?php logotype(); ?>
						<div class="header-right">
							<?php wp_nav_menu( array('theme_location' => 'header_menu', 'container' => false, 'items_wrap ' => '')); ?>
							<?php get_template_part( 'template_parts/global/phone-link' ); ?>
						</div>
						<div class="mobile-menu">
							<div></div>
							<div></div>
							<div></div>
						</div>
					</div>
				</div>
			</div>
		</header>