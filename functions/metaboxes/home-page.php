<?php  


function wporg_add_custom_box()
{
    $post_types = ['post'];
    foreach ($post_types as $post) {
        add_meta_box(
            'wporg_box_id',           // Unique ID
            'Custom Meta Box Title',  // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
            $post                   // Post type
        );
    }
}
add_action('add_meta_boxes', 'wporg_add_custom_box');


function wporg_custom_box_html($post)
{
    $value = get_post_meta($post->ID, '_wporg_meta_key', true);
    ?>
    <label for="wporg_field">Description for this field</label>
    <select name="wporg_field" id="wporg_field" class="postbox">
        <option value="">Select something...</option>
        <option value="something" <?php selected($value, 'something'); ?>>Something</option>
        <option value="else" <?php selected($value, 'else'); ?>>Else</option>
    </select>
    <?php
}


function wporg_save_postdata($post_id)
{
    if (array_key_exists('wporg_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_wporg_meta_key',
            $_POST['wporg_field']
        );
    }
}
add_action('save_post', 'wporg_save_postdata');












































//----------------------------------------------------------------------------------------seahorse stamp image
function add_custom_meta_boxes() {
    global $post;
    if ( 'template-home.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box( 
            'seahorse_stamp_image_attachment',
            'Seahorse stamp image',
            'seahorse_stamp_image_attachment',
            'page'
        );
    }
}
add_action( 'add_meta_boxes', 'add_custom_meta_boxes' );



function seahorse_stamp_image_attachment() {
    wp_nonce_field( plugin_basename(__FILE__), 'seahorse_stamp_image_attachment_nonce' );
    $html = '<p class="description">Upload image </p>';
    $html .= '<input id="seahorse_stamp_image_attachment" name="seahorse_stamp_image_attachment" size="25" type="file" value="" />';

    $filearray = get_post_meta( get_the_ID(), 'seahorse_stamp_image_attachment', true );
    $this_file = $filearray['url'];
    
    if ( $this_file != '' ) { 
         $html .= '<div><p>Current file: ' . $this_file . '</p></div>'; 
    }
    echo $html; 
}



function save_custom_meta_data( $id ) {
    if ( ! empty( $_FILES['seahorse_stamp_image_attachment']['name'] ) ) {
        $supported_types = array( 'application/pdf', 'image/png', 'image/jpg' );
        $arr_file_type = wp_check_filetype( basename( $_FILES['seahorse_stamp_image_attachment']['name'] ) );
        $uploaded_type = $arr_file_type['type'];

        if ( in_array( $uploaded_type, $supported_types ) ) {
            $upload = wp_upload_bits($_FILES['seahorse_stamp_image_attachment']['name'], null, file_get_contents($_FILES['seahorse_stamp_image_attachment']['tmp_name']));
            if ( isset( $upload['error'] ) && $upload['error'] != 0 ) {
                wp_die( 'There was an error uploading your file. The error is: ' . $upload['error'] );
            } else {
                add_post_meta( $id, 'seahorse_stamp_image_attachment', $upload );
                update_post_meta( $id, 'seahorse_stamp_image_attachment', $upload );
            }
        }
        else {
            wp_die( "current filetype is not supported" );
        }
    }
}
add_action( 'save_post', 'save_custom_meta_data' );


function update_edit_form() {
    echo ' enctype="multipart/form-data"';
}
add_action( 'post_edit_form_tag', 'update_edit_form' );





?>