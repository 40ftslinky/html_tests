// http://michaelrispolidevelopment.com/tips%20and%20tricks/2016/01/20/mailchimp-ajax.html
// //sitename.us10.list-manage.com/subscribe/post-json?u=[[USER_ID]]&amp;id=[[LIST_ID]]&c=?


//<script>

function register($form) {
  jQuery.ajax({
    type: "GET",
    url: $form.attr('action'),
    data: $form.serialize(),
    cache       : false,
    dataType    : 'jsonp',
    contentType: "application/json; charset=utf-8",
    error       : function(err) { console.log('error') },
    success     : function(data) {
      if (data.result != "success") {
        console.log('poop');
      } else {
        console.log('woo hoo');
        formSuccess();
      }
    }
  });
}

// waits for form to appear rather than appending straight to the form.
// Also helps if you have more than one type of form that you want to use this action on.

jQuery(document).on('submit', '#mc-embedded-subscribe-form', function(event) {
    try {
      //define argument as the current form especially if you have more than one
      var $form = jQuery(this);
      // stop open of new tab
      event.preventDefault();
      // submit form via ajax
      register($form);
    } catch(error){}
  });

  //
//</script>
