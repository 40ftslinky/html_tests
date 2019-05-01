/*---
<!-- INSIDE HEAD TAG
call goog_report_conversion
when someone clicks on the
chosen link or button
-->
----*/

<script type="text/javascript">
jQuery(function ($) {
    $(document).ready(function(){
    	$("#submit_button_ID").click(function(){
        	goog_report_conversion ('http://targetURL.com/thank-you/');
    	});
    });

});
</script>
