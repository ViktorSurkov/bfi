<?php

use Roots\Sage\Assets;

global $detect;

?>
<header class="banner <?= ( $detect->isMobile() == true && is_page_template( 'templates/blog-page-tpl.php' ) != true && is_singular( 'post' ) != true && is_search() != true && is_archive() != true ) ? 'sticky' : ''; ?> <?= ( is_page_template( 'templates/blog-page-tpl.php' ) == true || is_singular( 'post' ) == true || is_search() == true || is_archive() == true ) ? 'animate-header' : ''; ?>">
  <div class="header-wrapper">
    <a class="brand" href="<?= esc_url( home_url( '/' ) ); ?>"><img class="logotype"
                                                                    src="<?= ( $detect->isTablet() == true || $detect->isMobile() == true ) ? Assets\asset_path( 'images/BFI-logo-M.svg' ) : Assets\asset_path( 'images/BFI-logo.svg' ) ?>"
                                                                    alt="<?php bloginfo( 'name' ); ?>"><i class="animation-header"></i></a>
    <?= ( is_page_template( 'templates/blog-page-tpl.php' ) == true || is_singular( 'post' ) == true || is_search() == true ) ? '<a href="' . get_the_permalink( 6 ) . '"><h1 class="block-title-global blog">Blog</h1></a>' : ''; ?>

    <?php if ( ( is_page_template( 'templates/blog-page-tpl.php' ) == true || is_singular( 'post' ) == true || is_search() == true ) || is_archive() == true ) { ?>
      <div class="search-icon-open-form">
        <div id="search-header" class="search">
          <?= get_search_form(); ?>
        </div>
        <i class="fa fa-times closeSearchForm" aria-hidden="true"></i>
        <i class="fa fa-search openSearchForm" aria-hidden="true"></i>
      </div>
    <?php }; ?>
    <nav class="nav-primary">
      <?php

      $header_nav_menu  = $locations['header-nav-menu'];
      $secondMenuObject = wp_get_nav_menu_object( $header_nav_menu );

      ?>
      <ul>
        <?php wp_nav_menu( [
          'menu'            => $header_nav_menu,
          'container'       => false,
          'container_class' => '',
          'container_id'    => '',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => '__return_empty_string',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'link_class'      => '',
          'items_wrap'      => '%3$s',
          'walker'          => '',
          'depth'           => 0,
          'theme_location'  => $header_nav_menu,
        ] ); ?>
      </ul>
    </nav>
    <div id="nav-icon1" class="nav-open-mobile">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>
