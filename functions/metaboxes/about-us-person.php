<?php  

//------------------------------------------------------------------------------------------main title
function add_person_position() {
    global $post;
    if ( 7 == wp_get_post_parent_id($post->ID) ) {
        add_meta_box(
            'person_position',           
            'Position',  
            'person_position', 
            'page'
        );
    }
}
add_action('add_meta_boxes', 'add_person_position');


function person_position($post){
    $value = get_post_meta($post->ID, 'person_position', true);
    ?>
    <label for="person_position">Position</label>
    <input style = "width: 100%;" type = "text" name = "person_position" class = "main-title" id = "person_position" value = "<?php echo $value; ?>">
    <?php
}


function save_person_position($post_id)
{
    if (array_key_exists('person_position', $_POST)) {
        update_post_meta(
            $post_id,
            'person_position',
            $_POST['person_position']
        );
    }
}
add_action('save_post', 'save_person_position');


?>