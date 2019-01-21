<?php  
//------------------------------------------------------------------------------------------main title
function add_show_sidebar() {
    global $post;
    if ( 'default' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'show_sidebar',           
            'Sidebar',  
            'show_sidebar', 
            'page',
            'side'
        );
    }
}
add_action('add_meta_boxes', 'add_show_sidebar');


function show_sidebar($post){
    $value = get_post_meta($post->ID, 'show_sidebar', true);
    $is_checked = ( ( $value == 'show') ? 'checked="checked"' : '' );

    ?>

    <input type="checkbox" <?php echo $is_checked; ?> id="show_sidebar" value = "show" name="show_sidebar">
    <label for="show_sidebar">Show sidebar?</label>

    <?php
}


function save_show_sidebar($post_id)
{
    update_post_meta(
        $post_id,
        'show_sidebar',
        $_POST['show_sidebar']
    );
}
add_action('save_post', 'save_show_sidebar');


?>