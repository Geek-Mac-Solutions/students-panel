 
$(document).ready( function () {
    $('#paymentHistoryTable').DataTable();
    $('#videoRecTable').DataTable();
    $('#onlinExamTable').DataTable();
    $('#onlinTestResultTable').DataTable();
    $('#rankTable').DataTable();
    $('#attendanceTable').DataTable();
});

$('.fees-Carousel').owlCarousel({
    margin: 30,
    loop: true,
    dots: false,
    nav: true,
    center: true,
    autoplay: true,

    responsive: {
        0: {
            items: 1,
            
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});




$('.reviwe-teacher').owlCarousel({
    margin: 30,
    loop: true,
    dots: false,
    nav: true,
    center: true,
    autoplay: true,

    responsive: {
        0: {
            items: 1,
            
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

