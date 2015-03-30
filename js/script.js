// scrolls the page to a given element.
// params:
// e - jQuery element selector
function scrollTo (e, time) {
    event.preventDefault();
    try {
        $('html, body').animate({
            scrollTop: $(e).offset().top
        }, time ? time : 500);
        console.log($(e))
        console.log($(e).offset().top)
    } catch (err) {
        console.log(err);
    }
    
}