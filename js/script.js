// scrolls the page to a given element.
// params:
// e - jQuery element selector
function scrollTo (e) {
    $('html, body').animate({
        scrollTop: $(e).offset().top
    }, 500);
    event.preventDefault();
}