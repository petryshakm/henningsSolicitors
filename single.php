<?php  

// echo 
$custom_attach = get_post_meta( $post->ID, 'wp_custom_attachment', true );


echo '<pre>'; 
print_r($custom_attach); 
echo '</pre>';





?>