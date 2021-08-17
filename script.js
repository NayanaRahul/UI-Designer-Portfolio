$(document).ready(function() {
    $('.backtotop').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });
    let url = new URL(window.location.href);
    let searchParams = new URLSearchParams(url.search);
    if (searchParams.get('u') == 'contact') {
        $('html,body').animate({
                scrollTop: $("#contact_form").offset().top + 1000
            },
            'slow');
    }
});