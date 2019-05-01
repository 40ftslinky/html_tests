<?php
/*-------------------------------------------------------------------------------
Add Preloader
-------------------------------------------------------------------------------*/


// add div wrapper after body tag

add_action( 'wp_head', 'custom_header_alt');
function custom_header_alt() { ?>

  <script type="text/javascript">
        (function ($, document, undefined) {

            jQuery(document).ready( function($) {
                $('body').prepend('<div id="preloader"><div id="status">&nbsp;</div></div>');
                $('#page-container').css({'opacity':'0'});

            });

            $(window).on('load', function() { // makes sure the whole site is loaded
                $('#status').fadeOut(); // will first fade out the loading animation
                $('#preloader').delay(350).fadeOut('slow'); // will fade out the preloader DIV that covers the website.
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

// Enqueue Scripts/Styles for our owl.carousel.2

add_action( 'wp_head', 'omg_add_preloadercss_head' );
function omg_add_preloadercss_head() { ?>
      <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/library/loader/preloader.css'); ?> ">
<?php
}

/*-------------------------------------------------------------------------------
END PRELOADER function
-------------------------------------------------------------------------------*/
