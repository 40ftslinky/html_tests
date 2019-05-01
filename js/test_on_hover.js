<script language="javascript">
    $(function() {
        $('.launch_vid_col_02').hover(function() {
            animate('.launch_text', 'fadeIn');
            return false;
        });
    });

    function animate(element_ID, animation) {
        $(element_ID).addClass(animation);
        var wait = window.setTimeout( function(){
            $(element_ID).removeClass(animation)}, 1300
        );
    }
</script>
$(document).ready(function(){
            $('.launch_vid_col_02').hover(function(){

                $('.launch_text').addClass('animated fadeIn');
            });
      $('.launch_text').on('animationend mozanimationend webkitAnimationEnd oAnimationEnd msanimationend', function () {
        $(this).remove();
      });
}); //window

<script language="javascript">

function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);
        });
}

function animationClick(element, animation){
    element = $(element);
    element.click(
        function() {
            element.addClass('animated ' + animation);
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);

        });
}

$(document).ready(function(){


      $('.launch_vid_col_02').each(function() {
          animationHover('.launch_text', 'fadeIn');
          return false;
      });

});

</script>

.icon:hover {-vendor-animation:bounce 1s;}
