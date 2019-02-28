<?php 
$social_links = array(
	array('fb_link', 'fa-facebook-f'),
	array('tw_link', 'fa-twitter'),
	array('ins_link', 'fa-instagram'),
	array('gpl_link', 'fa-google-plus-g'),
);

$social_links_html ='<div class="social">';
	foreach ($social_links as $link) {
		if (get_theme_mod($link[0])) {
			$social_links_html .= '<a href="'.get_theme_mod($link[0]).'" target = "_blank" rel = "nofollow"><i class="fab '.$link[1].'"></i></a>';
		}
	}
$social_links_html .= '</div>';
?>



<!-- <h5>
	Follow Us
</h5> -->
<?php //echo $social_links_html; ?>