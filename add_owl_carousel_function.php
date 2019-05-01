<?php


/*-------------------------------------------------------------------------------
Add Owl Carousel
-------------------------------------------------------------------------------*/

// Enqueue Scripts/Styles for our owl.carousel.2

add_action( 'wp_head', 'omg_add_owlcarousel_head' );
function omg_add_owlcarousel_head() { ?>
      <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/includes/owl/owl.carousel.min.css'); ?> ">
      <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/includes/owl/owl.theme.default.min.css'); ?> ">
      <script src="<?php echo esc_url( get_stylesheet_directory_uri() . '/includes/owl/jquery.min.js'); ?> "></script>
      <script src="<?php echo esc_url( get_stylesheet_directory_uri() . '/includes/owl/owl.carousel.min.js'); ?> "></script>




<?php
}

add_action( 'wp_footer', 'omg_add_owlcarousel_foot' );
function omg_add_owlcarousel_foot() { ?>
      <script src="<?php echo esc_url( get_stylesheet_directory_uri() . '/includes/owl/jquery.min.js'); ?> "></script>
      <script src="<?php echo esc_url( get_stylesheet_directory_uri() . '/includes/owl/owl.carousel.min.js'); ?> "></script>

    <script>
        // init

      	jQuery(function($) {

              var owl = $('.owl-carousel');
              owl.owlCarousel({
                // items: 2,
                loop: true,
                // margin: 10,
                center: true,
                autoWidth:true,
                autoplay:true,
                nav:true,
                autoplayTimeout:3000,
                autoplayHoverPause: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:4,
                        nav:true,
                        margin: 10
                    },
                    1000:{
                        items:6
                    }
                }
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            });

    </script>


<?php
}

/*-------------------------------------------------------------------------------
END Add Owl Carousel
-------------------------------------------------------------------------------*/
