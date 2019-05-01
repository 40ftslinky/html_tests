/*-------------------------------------------------------------------------------
SWAP NAV LOGO
-------------------------------------------------------------------------------*/

function custom_theme_scripts() {
    wp_enqueue_script( 'custom_swap_nav_logo', get_template_directory_uri() . 'library/js/custom_swap_nav_logo.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

/*-------------------------------------------------------------------------------
end SWAP NAV LOGO
-------------------------------------------------------------------------------*/



/*-------------------------------------------------------------------------------
SWAP NAV LOGO
-------------------------------------------------------------------------------*/

// add secondary logo

add_action( 'wp_head', 'custom_swap_logo');
function custom_swap_logo() { ?>

  <script type="text/javascript">
	(function ($, document, undefined) {
		jQuery(document).ready( function($) {
			jQuery(".logo_container").append('
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  class="secondary-logo-wrapper" >\
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() .'/library/svg/UoM_horiz.svg' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="secondary-logo" />\
				</a>');
			});
		}(jQuery, document))
  </script>
<?php
}

/*-------------------------------------------------------------------------------
END SWAP NAV LOGO
-------------------------------------------------------------------------------*/


/* #secondary-logo
   --------------*/

   #secondary-logo {
       display: inline-block;
       float: none;
       max-height: 54%;
       margin-bottom: 0;
       vertical-align: middle;
   }

   .logo_container a.secondary-logo-wrapper {
       position:absolute;
       display: inline;
       /* top:11px;
       left:3px; */
       /*display: inline-block;*/
       float: none;
       /*max-height: 54%;*/
       /* margin-bottom: 0; */
       vertical-align: middle;
   }

   .secondary-logo-wrapper img {
       vertical-align: middle;
   }

   .logo_container a {
       display: inline;
   }

   .logo_container #logo { }

   /*------------------------------------------------*/
   /*------   --  [ Swap Logo on Scroll]  --   ------*/
   /*------------------------------------------------*/

   #secondary-logo {
       opacity:0;
   }


   .et-fixed-header .mobile_menu_bar:before { color: #2d2d2d !important;}
   .et-fixed-header #logo {
       opacity:0;
   }

   .et-fixed-header #secondary-logo {
       height:53px;
       opacity:1;
       -webkit-transition: all 0.4s ease-in-out;
       -moz-transition: all 0.4s ease-in-out;
       transition: all 0.4s ease-in-out;
       -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
       transform: translate3d(0, 0, 0);
   }


   @media (max-width: 980px) {
           /* .et_non_fixed_nav.et_transparent_nav #main-header,
           .et_non_fixed_nav.et_transparent_nav #top-header,
           .et_fixed_nav #main-header, .et_fixed_nav #top-header {
               position: fixed !important;
           }
           .et_mobile_menu {
               overflow: scroll !important;
               max-height: 83vh;
           } */

           #main-header .logo_container,
           #main-header.et-fixed-header .logo_container a.secondary-logo-wrapper { padding-left: 5%; }


           .et-fixed-header #secondary-logo { height:43px !important; }
           .logo_container a.secondary-logo-wrapper {
               top:20px !important;
               left:4px !important;
             }
       }
