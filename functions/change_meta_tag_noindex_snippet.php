<?php

/**
 * CHANGE the  default noindex meta tag.
 * REMOVE noindex function and replace with new_nofollow_meta functions
 * also RUN on log-in page as wp_head is exluded
 **/

remove_action('wp_head','noindex',1);
add_action( 'wp_head', 'new_nofollow_meta', 1 );
add_action( 'login_enqueue_scripts', 'new_nofollow_meta', 1 );


/** No Index No Follow Entire Website **/
function new_nofollow_meta() {
    echo "<meta name='robots' content='noindex,nofollow' />\n";
}

?>
