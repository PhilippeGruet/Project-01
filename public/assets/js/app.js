console.log("app.js");

/* ******************************************************* */
/*                          Navbar                         */
/* ******************************************************* */
$('#nav').affix({
    offset: {
        top: $('header').height()
    }
});

$(window).on('scroll', function() {
    if ( $('header').height() <= $(this).scrollTop() ) {
        $('#main-content').css("padding-top", "120px");
    } else {
        $('#main-content').css("padding-top", "60px");
    }
});
