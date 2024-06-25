 
$(document).ready( function () {
    $('#paymentHistoryTable').DataTable();
    $('#videoRecTable').DataTable();
    $('#onlinExamTable').DataTable();
    $('#onlinTestResultTable').DataTable();
    $('#rankTable').DataTable();
    $('#attendanceTable').DataTable();
    $('#notePaperTable').DataTable();
    $('#orderHistoryTable').DataTable();
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



const ctx = document.getElementById('timeMgtChart');

new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['NO RECORD', 'SELF STUDIES', 'SCHOOL', 'TUTION CLASSES', 'EXTRA ACTIVITIES', 'SPORTS / EXCERCISE','SLEEPING'],
    datasets: [{
      label: '%',
      data: [12, 8, 30, 25, 10, 5,10],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});