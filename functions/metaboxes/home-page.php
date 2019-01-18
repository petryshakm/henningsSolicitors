<?php  

//------------------------------------------------------------------------------------------main title
function add_main_title() {
    global $post;
    if ( 'template-home.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'main_title',           
            'Main title',  
            'main_title', 
            'page'
        );
    }
}
add_action('add_meta_boxes', 'add_main_title');


function main_title($post){
    $value = get_post_meta($post->ID, 'main_title', true);
    ?>
    <label for="main_title">Email</label>
    <input style = "width: 100%;" type = "text" name = "main_title" class = "main-title" id = "main_title" value = "<?php echo $value; ?>">
    <?php
}


function save_main_title($post_id)
{
    if (array_key_exists('main_title', $_POST)) {
        update_post_meta(
            $post_id,
            'main_title',
            $_POST['main_title']
        );
    }
}
add_action('save_post', 'save_main_title');



//------------------------------------------------------------------------------------------get in touch email
function add_get_in_touch_email() {
    global $post;
    if ( 'template-home.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'get_in_touch_email',           
            'Get in touch email',  
            'get_in_touch_email', 
            'page'
        );
    }
}
add_action('add_meta_boxes', 'add_get_in_touch_email');


function get_in_touch_email($post){
    $value = get_post_meta($post->ID, 'get_in_touch_email', true);
    ?>
    <label for="get_in_touch_email">Main title</label>
    <input style = "width: 100%;" type = "text" name = "get_in_touch_email" id = "get_in_touch_email" value = "<?php echo $value; ?>">
    <?php
}


function save_get_in_touch_email($post_id)
{
    if (array_key_exists('get_in_touch_email', $_POST)) {
        update_post_meta(
            $post_id,
            'get_in_touch_email',
            $_POST['get_in_touch_email']
        );
    }
}
add_action('save_post', 'save_get_in_touch_email');













?>