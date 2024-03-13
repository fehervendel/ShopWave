// $(function() {
//     $(window).on('scroll', function() {
//         var scroll = $(window).scrollTop();
//         $(".parallax-background").css("top", -scroll * 0.5 + "px");
//     });
// });
$(function() {
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        var parallaxSection = $(".parallax");
        var parallaxOffsetTop = parallaxSection.offset().top;
        var windowHeight = $(window).height();

        if (scroll + windowHeight > parallaxOffsetTop && scroll < parallaxOffsetTop + parallaxSection.outerHeight()) {
            // Ha a szekció a képernyőn belül van
            var distanceFromTop = scroll - parallaxOffsetTop;
            $(".parallax-background").css("top", -distanceFromTop * 0.5 + "px");
        }
    });
});