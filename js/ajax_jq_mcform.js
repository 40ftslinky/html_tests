//<script>
$(document).ready( function () {
    var $form = $('#mc-embedded-form');
    if ( $form.length > 0 ) {
        $('form input[type="submit"]').bind('click', function ( event ) {
            if ( event ) event.preventDefault();
            register($form);
        });
    }
});

function register($form) {
    $.ajax({
        type: $form.attr('method'),
        url: $form.attr('action'),
        data: $form.serialize(),
        cache       : false,
        dataType    : 'json',
        contentType: "application/json; charset=utf-8",
        error       : function(err) { alert("Could not connect to the registration server. Please try again later."); },
        success     : function(data) {
            if (data.result != "success") {
                // Something went wrong, do something to notify the user. maybe alert(data.msg);
            } else {
                // It worked, carry on...
            }
        }
    });
}
//</script>
