// run when DOM is ready()
$(document).ready(function() {
    $('input.input').on('focus', function() {
        // On first focus, check to see if we have the default text saved
        // If not, save current value to data()
        if (!$(this).data('defaultText')) $(this).data('defaultText', $(this).val());

        // check to see if the input currently equals the default before clearing it
        if ($(this).val()==$(this).data('defaultText')) $(this).val('');
    });
    $('input.input').on('blur', function() {
        // on blur, if there is no value, set the defaultText
        if ($(this).val()=='') $(this).val($(this).data('defaultText'));
    });
});

<!--
/*

<input class="input" value="value 1">
<input class="input" value="value 2">

http://jsfiddle.net/hhDwW/

*/

-->
