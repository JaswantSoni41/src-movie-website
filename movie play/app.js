$(document).ready(()=>{
    $('#hamburger-menu').click(()=>{
        $('#hamburger-menu').toggleClass('active')
        $('#nav-menu').toggleClass('active')
    })
    
    //setting out carousel
    let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]
    $('#hero-carousel').owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText: navText,
        autoplay: true,
        autoplayHoverPause: true
    })

    $('#top-movie-slide').owlCarousel({
        item: 6,
        dots: false,
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            500:{
                item:3
            },
            1280:{
                item:4
            },
            1600:{
                item:6
            }
        }
    })

    $('.movies-slide').owlCarousel({
        item: 2,
        dots: false,
        nav: true,
        navText: navText,
        margin: 15,
        responsive: {
            500:{
                item:2
            },
            1280:{
                item:4
            },
            1600:{
                item:6
            }
        }
    })
   
})