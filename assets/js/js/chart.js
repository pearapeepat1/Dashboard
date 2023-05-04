document.addEventListener("DOMContentLoaded", function() {
    // Doughnut chart
    new Chart(document.getElementById("chartjs-doughnut"), {
        type: "doughnut",
        data: {
            labels: ["Completed", "In Progres", "Delayed"],
            datasets: [{
                data: [15, 5, 4],
                backgroundColor: [
                    window.theme.success,
                    window.theme.warning,
                    "#B03A2E "
                ],
                borderColor: "transparent"
            }]
        },
        options: {
            maintainAspectRatio: false,
            cutoutPercentage: 65,
            legend: {
                display: false
            }
        }

    });
});



$(function() {
    var $ppc = $('.progress-pie-chart'),
        percent = parseInt($ppc.data('percent')),
        deg = 360 * percent / 100;
    if (percent > 50) {
        $ppc.addClass('gt-50');
    }
    $('.ppc-progress-fill').css('transform', 'rotate(' + deg + 'deg)');
    $('.ppc-percents span').html(percent + '%');
});