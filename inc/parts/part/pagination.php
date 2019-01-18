<?php  
/*
Pagination template
*/



	$args_pagin = array(
		'show_all'     => True, 
		'end_size'     => 1, 
		'mid_size'     => 3,
		'prev_next'    => false,
		'prev_text'    => __('«'),
		'next_text'    => __('»'),
		'add_args'     => False,
		'add_fragment' => '',
		'type'			=> 'list',
		'screen_reader_text' => __( ' ' ),
	);
	the_posts_pagination($args_pagin);

?>