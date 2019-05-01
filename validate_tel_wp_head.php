<?php
/* DON'T copy the first line (above) if your functions.php already has it.
 * ---------------------------------------------------------------------- */

add_action( 'wp_head', 'custom_validate_tel' );
		function custom_validate_tel() { ?>
			echo'
						<script type="text/javascript">

						jQuery(function ($) {
						  $(document).ready(function(){
								$("input[type=tel]").attr("maxlength", "10");
								$("input[type=tel]").after("<span class='error_msg'></span>")
								var minLength = 9;
								var maxLength = 11;

								$("input").on("keydown keyup change", function(){
								    var value = $(this).val();
								    if (value.length < minLength)
								        $(".error_msg").text(" Entry must contain 10 characters.");
								    else if (value.length > maxLength)
								        $(".error_msg").text("Text is long");
								    else
								        $(".error_msg").text("");
								});
						  });

						});
						</script>
					';
				}
		}

<?php
}

/*-------------------------------------------------------------------------------
END
* ---------------------------------------------------------------------- */
