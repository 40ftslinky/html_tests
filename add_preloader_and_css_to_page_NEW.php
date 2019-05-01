<?php

/*-------------------------------------------------------------------------------
Add Preloader
-------------------------------------------------------------------------------*/

// add div wrapper after body tag

add_action( 'wp_head', 'custom_loader_head');
function custom_loader_head() { ?>

  <script type="text/javascript">
        (function ($, document, undefined) {

            jQuery(document).ready( function($) {
                $('body').prepend('<div class="loader_container ">\\
                  <span class="progress">\\
                  <svg height="300" width="300">\\
                    <circle cx="150" cy="150" r="146" stroke-width="5" fill="none" />\\
                  </svg>\\
                  </span>\\
                  <div class=" bg_svg"></div>\\
                </div>');

                $('#page-container').css({'opacity':'0'});

            });

            $(window).on('load', function() { // makes sure the whole site is loaded
                $('#progress').fadeOut(); // will first fade out the loading animation
                $('#loader_container').delay(350).fadeOut('slow'); // will fade out the preloader DIV that covers the website.
                $('#page-container').css({'opacity':'1'});
                $('body').css({'background-color':'#ffffff'});
                $('body').delay(350).css({'overflow':'visible'});
            });

      }(jQuery, document))

  </script>
<?php
}

/*-------------------------------------------------------------------------------
END PRELOADER function
-------------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------------
Add PRELOADER css
-------------------------------------------------------------------------------*/

// Enqueue Scripts/Styles for preloader

add_action( 'wp_head', 'custom_add_preloadercss_etc_head' );
function custom_add_preloadercss_etc_head() { ?>
      <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/library/loader/svg_preloader.css'); ?> ">
<?php
}

/*-------------------------------------------------------------------------------
END PRELOADER css
-------------------------------------------------------------------------------*/
