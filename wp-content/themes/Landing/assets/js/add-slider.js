function myFunction() {
    if($(window).width() < 577)
    {
        $('.row-3').addClass('owl-carousel');
    }
}

myFunction();

$(window).resize(function() {
    myFunction();
});