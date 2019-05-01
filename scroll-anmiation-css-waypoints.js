// https://spin.atomicobject.com/2015/05/31/scroll-anmiation-css-waypoints/

var $header = $('.header'),
    scrollClass = 'on-scroll',
    activateAtY = 20;

function deactivateHeader() {
    if (!$header.hasClass(scrollClass)) {
        $header.addClass(scrollClass);
    }
}

function activateHeader() {
    if ($header.hasClass(scrollClass)) {
        $header.removeClass(scrollClass);
    }
}

$(window).scroll(function() {
    // User is scrolling
    if($(window).scrollTop() > activateAtY) {
        deactivateHeader();
    } else {
        activateHeader();
    }
});

// if your html and/or body element has a height: 100% style set, you’ll need to bind the scroll event to a particular element like so:
/*
$('#content-container').scroll(function() {
    // Put logic here
});
*/
