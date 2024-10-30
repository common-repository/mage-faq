<?php
function mkb_cpt_tax(){
$labels = array(
		'name'                 => _x( 'Category', 'mkb' ),
	);
	$args = array(
		'hierarchical'          => true,
		"public" 				=> true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'faq-category' ),
	);
register_taxonomy('mkb_faq_cat', 'mkb-faq', $args);
}
add_action("init","mkb_cpt_tax");
