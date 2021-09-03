$(document).ready(function() {
    /* WOW Animation initialize */
    new WOW({
        mobile: false
    }).init();
    /* Back to top link */
    $('.backtotop').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });
    /* Move to contact form in page about.php */
    let url = new URL(window.location.href);
    let searchParams = new URLSearchParams(url.search);
    if (searchParams.get('u') == 'contact') {
        $('html,body').animate({
                scrollTop: $("#contact_form").offset().top - 5
            },
            'slow');
    }
});