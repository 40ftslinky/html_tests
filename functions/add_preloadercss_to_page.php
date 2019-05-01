<?php


/*-------------------------------------------------------------------------------
Add PRELOADER css
-------------------------------------------------------------------------------*/

// Enqueue Scripts/Styles for our owl.carousel.2

add_action( 'wp_head', 'custom_add_preloadercss_head' );
function custom_add_preloadercss_head() { ?>
      <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/library/loader/preloader.css'); ?> ">
<?php
}
