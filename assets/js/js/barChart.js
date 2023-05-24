
    barStap()
proOverall()



function barStap() {
    var options = {
        series: [{
        data: [300, 430, 180, 200, 80, 150]
      }],
        chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          borderRadius: 6,
          horizontal: true,
        }
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: ['Stap 1','Stap 2','Stap 3','Stap 4','Stap 5','Stap 6','Stap 7',
        ],
      }
      
      };

      var chart = new ApexCharts(document.querySelector("#barStap"), options);
      chart.render();
}


function proOverall() {
    var optionsProgress1 = {
        chart: {
          height: 70,
          type: 'bar',
          stacked: true,
          sparkline: {
            enabled: true
          }
        },
        plotOptions: {
          bar: {
            horizontal: true,
            barHeight: '20%',
            colors: {
              backgroundBarColors: ['#fff']
            }
          },
        },
        stroke: {
          width: 0,
        },
        series: [{
          name: 'Process Ocerall',
          data: [44]
        }],
        title: {
          floating: true,
          offsetX: -10,
          offsetY: 5,
          text: 'Process Ocerall'
        },
        subtitle: {
          floating: true,
          align: 'right',
          offsetY: 0,
          text: '44%',
          style: {
            fontSize: '20px'
          }
        },
        tooltip: {
          enabled: true
        },
        xaxis: {
          categories: ['Process Ocerall'],
        },
        yaxis: {
          max: 100
        },
        fill: {
          opacity: 1
        }
      }
      
      var chartProgress1 = new ApexCharts(document.querySelector('#proOverall'), optionsProgress1);
      chartProgress1.render();
}