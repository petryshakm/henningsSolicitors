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




//------------------------------------------------------------------------------------------More services link
function add_more_services_link() {
    global $post;
    if ( 'template-home.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'more_services_link',           
            'More services link',  
            'more_services_link', 
            'page'
        );
    }
}
add_action('add_meta_boxes', 'add_more_services_link');


function more_services_link($post){
    $value = get_post_meta($post->ID, 'more_services_link', true);
    ?>
    <label for="more_services_link">More services link</label>
    <input style = "width: 100%;" type = "text" name = "more_services_link" id = "more_services_link" value = "<?php echo $value; ?>">
    <?php
}


function save_more_services_link($post_id)
{
    if (array_key_exists('more_services_link', $_POST)) {
        update_post_meta(
            $post_id,
            'more_services_link',
            $_POST['more_services_link']
        );
    }
}
add_action('save_post', 'save_more_services_link');



//------------------------------------------------------------------------------------------Get in touch text
function add_get_in_touch_text() {
    global $post;
    if ( 'template-home.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'get_in_touch_text',           
            'Get in touch text',  
            'get_in_touch_text', 
            'page'
        );
    }
}
add_action('add_meta_boxes', 'add_get_in_touch_text');


function get_in_touch_text($post){
    $value = get_post_meta($post->ID, 'get_in_touch_text', true);
    ?>
    <?php 
    $content = $value;
    $editor_id = 'get_in_touch_text_editor';
    $settings =   array(
        'wpautop' => true, // use wpautop?
        'media_buttons' => false, 
        'textarea_name' => $editor_id, 
        'textarea_rows' => 5, 
        'tinymce' => true, 
    );
    wp_editor( $content, $editor_id, $settings );
}


function save_get_in_touch_text($post_id)
{
    update_post_meta(
        $post_id,
        'get_in_touch_text',
        $_POST['get_in_touch_text_editor']
    );
}
add_action('save_post', 'save_get_in_touch_text');







?>