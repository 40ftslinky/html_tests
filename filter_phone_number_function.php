<?php
/* DON'T copy the first line (above) if your functions.php already has it.
 * ---------------------------------------------------------------------- */



add_action( 'wp_head', 'custom_filter_phone_no_funct');
function custom_filter_phone_no_funct() { ?>


  <script type="text/javascript">
      jQuery(function ($) {
        $(document).ready(function(){
      		$("input[type=tel]").attr("maxlength", "10");
      		// $("input[type=tel]").after("<span class='error_msg'></span>")
      		var minLength = 9;
      		var maxLength = 11;

      		$("input").on("keydown keyup change", function(){
      		    var value = $(this).val();
      		    if (value.length < minLength)
      		        $(".mce_inline_error").text(" Entry must contain 10 characters.");
      		    else if (value.length > maxLength)
      		        $(".mce_inline_error").text("Text is too long");
      		    else
      		        $(".mce_inline_error").text("");
      		});
        });

      });
  </script>


<?php
}


/*-------------------------------------------------------------------------------
END
* ---------------------------------------------------------------------- */
