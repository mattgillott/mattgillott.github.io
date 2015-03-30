// scrolls the page to a given element.
// params:
// e - jQuery element selector
function scrollTo (e, time) {
    if ($(e).offset().top != undefined) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $(e).offset().top
        }, time ? time : 500);
    }
}
function checkTel () {
    if (! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        event.preventDefault();
    }
}