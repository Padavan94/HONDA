$(document).ready(function() {
	$(".main-slider").owlCarousel({
	    loop:true,
	    items: 1,
	    dots: true,
	});
    $(".top-catalog-slider").owlCarousel({
        loop:true,
        items: 4,
        margin: 31,
        dots: false
    });

    var owl = $('.main-slider');
    owl.owlCarousel();
    // Go to the next item
    $('.main-slider__next').click(function() {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.main-slider__prev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })

    $('#menu').metisMenu();
    

	forSVG();
});



function forSVG(){
    $('.svg').each(function () {
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function (data) {
        // Get the SVG tag, ignore the rest
        var $svg = $(data).find('svg');

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }

        $svg = $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');
});}
