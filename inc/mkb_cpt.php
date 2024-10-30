<?php
// Create MKB CPT
function mkb_cpt() {
    $args = array(
        'public'   => true,
        'label'    => 'FAQ',
        'menu_icon'           => 'dashicons-book',
        'supports' => array('title','editor')
    );
    register_post_type( 'mkb-faq', $args );
}
add_action( 'init', 'mkb_cpt' );
