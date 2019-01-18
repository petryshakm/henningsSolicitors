<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if (is_front_page()){bloginfo('name'); } else{wp_title(''); } ?></title>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
</head>

<?php 
$theme_mods = get_theme_mods();

$header_promo_text = $theme_mods['header_promo_text'];
$contact_us_link = get_page_link( $theme_mods['contact_us_link'] );
$header_slogan = get_field('header_slogan', $front_page_id );

$section_slider_inner = ((is_front_page() == 1) ? '' : ' section-slider-inner');
?>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="text">
							<?php echo $header_slogan; ?>
						</div>
						<div class="header-right">
							<ul class="header-ul">
								<li>
									<a href="/my-account">
										<?php if(is_user_logged_in()){ ?>
											<i class="fa fa-user"></i>
											<span class="mobile-span">
												My account
											</span>
										<?php } else{ ?>
											<i class="fa fa-unlock-alt"></i>
											<span class="mobile-span">
												Sign in
											</span>
										<?php } ?>
									</a>
								</li>
								<!-- <li>
									<span class="mobile-span">
										Currency:
									</span>
									<?php //echo do_shortcode('[woocs show_flags=0 txt_type="code"]'); ?>
									<select class="selectmenu">
										<option>
											Euro
										</option>
										<option>
											USD
										</option>
									</select>
								</li> -->
								<li>
									<a href="/contact-us">
										<i class="fa fa-map-marker"></i>
										<span class="mobile-span">
											Contact us
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="section-slider<?php echo $section_slider_inner; ?>">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="top-slider">
							<?php logotype('header'); ?>
							<?php get_search_form(); ?>
							<div class="mobile-search"></div>
							<?php header_woo_cart(); ?>
						</div>
						<div class="nav">
							<div class="click-mobile">
								PRODUCT CATALOG
							</div>
							<?php wp_nav_menu( array('theme_location' => 'header_menu_products', 'container' => false, 'items_wrap ' => '', 'menu_class' => 'nav-ul')); ?>
						</div>
						<?php if (!is_front_page()) { get_template_part( 'inc/parts/part/breadcrumbs' ); } ?>