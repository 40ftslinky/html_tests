<?php
/* DON'T copy the first line (above) if your functions.php already has it.
 * ---------------------------------------------------------------------- */



/* -------------------------------------------------------------------------------
REMOVE ELEMENTOR DEFAULT COPYRIGHT
------------------------------------------------------------------------------- */

if ( ! function_exists( 'generate_add_footer_info' ) ) {
	add_action( 'generate_credits', 'generate_add_footer_info' );
	/**
	 * Add the copyright to the footer
	 *
	 * @since 0.1
	 */
	function generate_add_footer_info() {
		$copyright = sprintf( '<span class="copyright">&copy; %1$s</span> &bull; <a href="%2$s" target="_blank" itemprop="url">default.com</a>',
			date( 'Y' ),
			esc_url( 'https://default.com' ),
			__( 'GeneratePress', 'generatepress' )
		);

		echo apply_filters( 'generate_copyright', $copyright ); // WPCS: XSS ok.
	}
}

/* -------------------------------------------------------------------------------
END REMOVE DEFAULT COPYRIGHT
------------------------------------------------------------------------------- */
