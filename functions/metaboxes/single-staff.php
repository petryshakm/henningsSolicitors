<?php  

//------------------------------------------------------------------------------------------position
function add_person_position() {
    global $post;

    if ( has_category('staff', $post) ) {
        add_meta_box(
            'person_position',           
            'Position',  
            'person_position', 
            'post'
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



//------------------------------------------------------------------------------------------email
function add_person_email() {
    global $post;

    if ( has_category('staff', $post) ) {
        add_meta_box(
            'person_email',           
            'Email',  
            'person_email', 
            'post'
        );
    }
}
add_action('add_meta_boxes', 'add_person_email');


function person_email($post){
    $value = get_post_meta($post->ID, 'person_email', true);
    ?>
    <label for="person_email">Email</label>
    <input style = "width: 100%;" type = "text" name = "person_email" class = "main-title" id = "person_email" value = "<?php echo $value; ?>">
    <?php
}


function save_person_email($post_id)
{
    if (array_key_exists('person_email', $_POST)) {
        update_post_meta(
            $post_id,
            'person_email',
            $_POST['person_email']
        );
    }
}
add_action('save_post', 'save_person_email');


?>


