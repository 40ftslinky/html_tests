<?php
/* DON'T copy the first line (above) if your functions.php already has it.
 * ---------------------------------------------------------------------- */

/* -------------------------------------------------------------------------------
CREATE custom Posttype
------------------------------------------------------------------------------- */

/*
* Creating a function to create our CPT
*/



if ( ! function_exists('case_studies') ) {

// Register Custom Post Type
function case_studies() {

  // Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'yourthemename' ),
		'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'yourthemename' ),
		'menu_name'           => __( 'Case Studies', 'yourthemename' ),
		'name_admin_bar'      => __( 'Case Studies', 'yourthemename' ),
		'parent_item_colon'   => __( 'Parent Item:', 'yourthemename' ),
		'all_items'           => __( 'All Case Studies', 'yourthemename' ),
		'add_new_item'        => __( 'Add New Case Study', 'yourthemename' ),
		'add_new'             => __( 'Add New', 'yourthemename' ),
		'new_item'            => __( 'New Case Study', 'yourthemename' ),
		'edit_item'           => __( 'Edit Case Study', 'yourthemename' ),
		'update_item'         => __( 'Update Case Study', 'yourthemename' ),
		'view_item'           => __( 'View Case Study', 'yourthemename' ),
		'search_items'        => __( 'Search Case Studies', 'yourthemename' ),
		'not_found'           => __( 'Not found', 'yourthemename' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'yourthemename' ),
	);
	$rewrite = array(
		'slug'                => 'case-studies',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
  // Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'case-studies', 'yourthemename' ),
		'description'         => __( 'This section is dedicated to creating case studies within your website.', 'yourthemename' ),
		'labels'              => $labels,
    // Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields' ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'category', 'post_tag' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-megaphone',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'case-studies', $args );

}

// Hook into the 'init' action
add_action( 'init', 'case_studies', 0 );

}
