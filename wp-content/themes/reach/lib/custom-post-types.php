<?php

namespace Roots\Sage\CPT;

//post type
function register_post_types() {
	
	register_post_type( 'reach-nc-polls',
	
		array(
			'labels' => array(
				'name' => __( 'Reach NC Polls' ),
				'singular_name' => __( 'Reach NC Poll' ),
				'add_new_item' => 'Add New Reach NC Poll',
			),
			'taxonomies' => array('category'),
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			//'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png',
			'show_ui' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'rewrite' => true,
			'supports' => array( 'title', 'author', 'revisions', 'editor', 'thumbnail' ),
			'query_var' => true
		)
	);
	
}
add_action( 'init', __NAMESPACE__ . '\\register_post_types');

//taxonomy
register_taxonomy( 'column',
	array('reach-nc-polls'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => true,     /* if this is true it acts like categories */
		'labels' => array(
			'name' => __( 'Columns' ),
			'singular_name' => __( 'Column' ),
			'search_items' =>  __( 'Search Columns' ),
			'all_items' => __( 'All Columns' ),
			'parent_item' => __( 'Parent Column' ),
			'parent_item_colon' => __( 'Parent Column:' ),
			'edit_item' => __( 'Edit Column' ),
			'update_item' => __( 'Update Column' ),
			'add_new_item' => __( 'Add New Column' ),
			'new_item_name' => __( 'New Column Name' )
		),
		'show_ui' => true,
		'query_var' => true,
		
	)
);


/**
 * Modify queries on specific templates
 */
function pre_get_posts($query) {
	//this area is where to hide or do query before showing/posting it on a page
	
	// author archives should query posts and maps
	if ($query->is_author()) {
		$query->set('post_type', array('reach-nc-polls'));
	}
}
add_action('pre_get_posts', __NAMESPACE__ . '\\pre_get_posts');


/**
 * Add rewrite rules for map and edtalk permalinks
 * http://shibashake.com/wordpress-theme/custom-post-type-permalinks-part-2
 *
 */
function rewrite_rules() {
	global $wp_rewrite;

	/*
	$map_permalink_structure = '/custom-post-type-slug/%year%/%monthnum%/%map%';
	$wp_rewrite->add_rewrite_tag("%map%", '([^/]+)', "map=");
	$wp_rewrite->add_permastruct('map', $map_permalink_structure, false);

	$edtalk_permalink_structure = '/custom-post-type-slug/%year%/%monthnum%/%day%/%edtalk%';
	$wp_rewrite->add_rewrite_tag("%edtalk%", '([^/]+)', "edtalk=");
	$wp_rewrite->add_permastruct('edtalk', $edtalk_permalink_structure, false);
	*/
}
add_action('init', __NAMESPACE__ . '\\rewrite_rules');


// Translate custom post type permalink tokens (%year% and %monthnum%)
// Adapted from get_permalink function in wp-includes/link-template.php
function replace_permalink_tokens($permalink, $post_id, $leavename) {
  $post = get_post($post_id);
  $rewritecode = array(
    '%year%',
    '%monthnum%',
    '%day%',
    '%hour%',
    '%minute%',
    '%second%',
    $leavename? '' : '%postname%',
    '%post_id%',
    '%category%',
    '%author%',
    $leavename? '' : '%pagename%',
  );

  if ( '' != $permalink && !in_array($post->post_status, array('draft', 'pending', 'auto-draft')) ) {
      $unixtime = strtotime($post->post_date);

      $category = '';
      if ( strpos($permalink, '%category%') !== false ) {
          $cats = get_the_category($post->ID);
          if ( $cats ) {
              usort($cats, '_usort_terms_by_ID'); // order by ID
              $category = $cats[0]->slug;
              if ( $parent = $cats[0]->parent )
                  $category = get_category_parents($parent, false, '/', true) . $category;
          }
          // show default category in permalinks, without
          // having to assign it explicitly
          if ( empty($category) ) {
              $default_category = get_category( get_option( 'default_category' ) );
              $category = is_wp_error( $default_category ) ? '' : $default_category->slug;
          }
      }

      $author = '';
      if ( strpos($permalink, '%author%') !== false ) {
          $authordata = get_userdata($post->post_author);
          $author = $authordata->user_nicename;
      }

      $date = explode(" ",date('Y m d H i s', $unixtime));
      $rewritereplace =
      array(
          $date[0],
          $date[1],
          $date[2],
          $date[3],
          $date[4],
          $date[5],
          $post->post_name,
          $post->ID,
          $category,
          $author,
          $post->post_name,
      );
      $permalink = str_replace($rewritecode, $rewritereplace, $permalink);
  } else { // if they're not using the fancy permalink option
  }
  return $permalink;
}
add_filter('post_type_link', __NAMESPACE__ . '\\replace_permalink_tokens', 10, 3);
?>