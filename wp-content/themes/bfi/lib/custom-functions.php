<?php

//require_once 'tools/Mobile_Detect.php';
$detect = new Mobile_Detect;

// Remove the "Profile Picture" field
function remove_personal_options() {
  echo '<script type="text/javascript">jQuery(document).ready(function($) {
	$(\'form#your-profile tr.user-profile-picture\').remove(); 
});</script>';
}

add_action( 'admin_head', 'remove_personal_options' );

// Custom menu locations
function register_locations_of_menus() {
  register_nav_menus(
    array(
      'header-nav-menu' => __( 'Header menu' ),
    )
  );
}

add_action( 'init', 'register_locations_of_menus' );


//Custom style of search form
function wpdocs_my_search_form( $form ) {
  $form = '<form role="search" method="get" class="search-form" action="' . home_url( '/' ) . '" >
    <i class="search-form__icon fi-search"></i>
    <input class="search-form-input" type="search" placeholder="' . translate( 'Search blog', 'sage' ) . '" value="' . get_search_query() . '" name="s" />
    <input class="search-button" type="submit" value="" />
    <i class="fa fa-search" aria-hidden="true"></i>
    </form>';

  return $form;
}

add_filter( 'get_search_form', 'wpdocs_my_search_form' );


//Search only in post type post
function SearchFilter( $query ) {
  if ( $query->is_search ) {
    $query->set( 'post_type', 'post' );
  }

  return $query;
}

add_filter( 'pre_get_posts', 'SearchFilter' );


//Custom pagination
function custom_pagination( $numpages = '', $pagerange = '', $paged = '' ) {

  if ( empty( $pagerange ) ) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   *
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if ( empty( $paged ) ) {
    $paged = 1;
  }
  if ( $numpages == '' ) {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if ( ! $numpages ) {
      $numpages = 1;
    }
  }

  /**
   * We construct the pagination arguments to enter into our paginate_links
   * function.
   */
  $pagination_args = array(
    'base'         => get_pagenum_link( 1 ) . '%_%',
    'format'       => 'page/%#%',
    'total'        => $numpages,
    'current'      => $paged,
    'show_all'     => false,
    'end_size'     => 1,
    'mid_size'     => $pagerange,
    'prev_next'    => true,
    'prev_text'    => __( 'Previous' ),
    'next_text'    => __( 'Next' ),
    'type'         => 'plain',
    'add_args'     => false,
    'add_fragment' => '',
  );

  $paginate_links = paginate_links( $pagination_args );

  if ( $paginate_links ) {
    if ( is_paged() ) {
      echo "<nav class='custom-pagination paged-page-template'>";
    } else {
      echo "<nav class='custom-pagination'>";
    }
    echo $paginate_links;
    echo "</nav>";
  }
}

//Added custom thumbnail sizes
add_image_size( 'small-post-img', 405, 254 );
add_image_size( 'big-post-img', 1140, 642 );
add_image_size( 'middle-post-img', 566, 319 );
add_image_size( 'single-post-img', 1130, 460 );
