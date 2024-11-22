(function() {

    let sidebarOpened = false;
    let verif = false;
    let menu = document.querySelector('.responsive-menu');
    let button = document.querySelector('.menu-burger');
    button.addEventListener('click', function(e){
        e.stopPropagation();
        e.preventDefault();
        document.body.classList.add('has-sidebar');
        sidebarOpened = true;
        menu.style.display = 'block';
    })

    document.body.addEventListener('click', function () {
        if (sidebarOpened) {
            document.body.classList.remove('has-sidebar');
            verif = true;
        }
    })
    
}) ()



// $(document).ready(
//     function() {
//         $('.carousel-lft').slick({
//             autoplaySpeed: 1000,
//             slidesToShow: 3,
//             slidesToScroll: 1,
//             autoplay: true,
//             loop: true,
//             responsive: [
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         arrows: false,
//                         slidesToShow: 4
//                     }
//                 },
//                 {
//                     breakpoint: 480,
//                     settings: {
//                         arrows: false,
//                         slidesToShow: 3
//                     }
//                 }
//             ]
//         });
//     }
// );
