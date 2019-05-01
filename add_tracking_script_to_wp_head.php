<?php


add_action( 'wp_head', 'wpsites_add_tracking_code_head' );
		function wp_add_tracking_code_head() {
        if ( is_page(200) ) {
					echo'<div class="tracking-code">
					<!-- Start tracking Tag -->
					<script type="text/javascript">
					</script>
					<noscript>
					</noscript>
					<!-- End tracking tag -->
					</div>';
        }
		}

add_action( 'wp_head', 'wpsites_add_tracking_code_foot' );
		function wp_add_tracking_code_foot() {
        if ( is_page(200) ) {
						echo'<div class="tracking-code">
						<!-- Start tracking Tag -->
						<script type="text/javascript">
						</script>
						<noscript>
						</noscript>
						<!-- End tracking tag -->
						</div>';
        }
				if( is_page( array( 'title', 'slug', 'url' ) )
				}
		}
