<?php

/*-------------------------------------------------------------------------------
START custom_add_active_class */

add_action( 'wp_footer', 'custom_add_active_class' );
function custom_add_active_class() { ?> 

  <!-- // https://jsfiddle.net/cse_tushar/Dxtyu/141/ -->
  <!-- // https://www.taniarascia.com/smooth-scroll-to-id-with-jquery -->

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


		<script>
		$(document).ready(function () {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
            $(document).off("scroll");

            $('a').each(function () {
                $(this).removeClass('active');
            })
            $(this).addClass('active');

            var target = this.hash,
                // menu = target;
            $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top+2
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#top-menu-nav a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#top-menu-nav ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
</script>

<?php
}

/*-------------------------------------------------------------------------------
END custom_add_active_class */



?>
