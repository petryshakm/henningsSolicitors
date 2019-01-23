<?php  

//------------------------------------------------------------------------------------------main title
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


function save_more_services($post_id)
{
    if (array_key_exists('more_services', $_POST)) {
        update_post_meta(
            $post_id,
            'more_services',
            $_POST['more_services']
        );
    }
}
add_action('save_post', 'save_more_services');







?>