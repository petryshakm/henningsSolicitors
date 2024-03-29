<?php  

//------------------------------------------------------------------------------------------More services checkboxes
function add_more_services() {

    global $post;
    if (has_category( 'services', $post)) {
        add_meta_box(
            'more_services',
            'More services',
            'more_services',
            'post'
        );
    }
}
add_action('add_meta_boxes', 'add_more_services');


function more_services($post){
    $values = get_post_meta($post->ID, 'more_services', true);

    echo ' <h4>Select services to show:</h4>';

    $args = array(
        'post_type'         => 'post',
        'post_status'       => 'publish',
        'posts_per_page'    => -1,
        'orderby'           => 'date',
        'order'             => 'ASC',
        'category_name'     => 'services',
        'post__not_in'      => array($post->ID)
    );

    $services_query = new WP_Query( $args );
    if ( $services_query->have_posts() ) {
        echo '<div class = "services-wrapper">';
            while ( $services_query->have_posts() ) { $services_query->the_post();

                $is_checked = ( ( in_array(get_the_ID(), $values) ) ? 'checked="checked"' : '' );

                echo '
                    <p>
                        <input type="checkbox" '.$is_checked.' id="'.$post->post_name.'" name="more_services[]" value="'.get_the_ID().'">
                        <label for="'.$post->post_name.'">'.get_the_title().'</label>
                    </p>
                ';
            }
        echo '</div>';
    }
    wp_reset_postdata();


    ?>
    <style type="text/css">
        .services-wrapper p{
            display: inline-block;
            margin: 14px;
        }
    </style>
    <?php
}


function save_more_services($post_id){
    if (array_key_exists('more_services', $_POST)) {
        update_post_meta(
            $post_id,
            'more_services',
            $_POST['more_services']
        );
    }
}
add_action('save_post', 'save_more_services');


// ----------------------------------------------------------------------------------post order
function filter_function_name() {
    add_post_type_support( 'post', 'page-attributes' );
}
add_filter( 'admin_init', 'filter_function_name', 10, 2 );




//-----------------------------------------------------------------------------------output order value in the wp-admin post columns
add_filter('manage_posts_columns', 'posts_columns_order', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns_order', 5, 2);

function posts_columns_order($defaults){
    $defaults['menu_order'] = __('Order');
    return $defaults;
}
function posts_custom_columns_order($column_name, $id){
    global $post;

    if ( has_category('services', $post) ) {
        if($column_name === 'menu_order'){
            $order = $post->menu_order;
            echo $order;
        }
    }
}



?>