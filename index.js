$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl carousel          
    $("#top-sale .owl-carousel").owlCarousel({  // pass peramitar to it 
        loop: true,
        nav: true, //for navigation button 
        dots: false,
        responsive : {   // to make responsive 
            0: {  //if window  view port has > 0
                items: 1
            },
            600: {          //if window has >600 plex
                items: 3
            },
            1000 : {     //if window has >1000 plex
                items: 5
            }
        }
    });

      // isotope filter
      var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){ //button group aitai catch korbe 
        var filterValue = $(this).attr('data-filter');// aita catch kora data ke filter kore return korbe 
        $grid.isotope({ filter: filterValue});
    })


    // new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

});