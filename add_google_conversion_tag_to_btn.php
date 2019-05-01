<?php

add_action( 'wp_head', 'add_goog_conv_script' );
function add_goog_conv_script() { ?>


<script>

// -- custom functions

jQuery(function ($) {
    $(document).ready(function(){
    	$("#button-id").click(function(){
        	goog_report_conversion ('http://targetURL.com/');
    	});
    });

});
</script>



<!-- Google Code for Keiser Tracking Conversion Page --/>
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 999339384;
    w.google_conversion_label = "ftWpCKW2_XQQ-OrC3AM";
    w.google_remarketing_only = false;
  }
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>

<!-- google ad services --/>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>
<!--  / google ad services -->

<?php
}
