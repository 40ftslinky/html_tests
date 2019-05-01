<?php
/* DON'T copy the first line (above) if your functions.php already has it.
 * ---------------------------------------------------------------------- */

/*-------------------------------------------------------------------------------
Change the custom logo URL
-------------------------------------------------------------------------------*/

add_action( 'wp_head', 'my_custom_logo_link' );
function my_custom_logo_link() { ?>

  <script type="text/javascript">

						jQuery(function($){
						    $('.logo_container a').attr('href','http://www.tsfx.com.au');
						});

  </script>

<?php
}


/*-------------------------------------------------------------------------------
END
* ---------------------------------------------------------------------- */
