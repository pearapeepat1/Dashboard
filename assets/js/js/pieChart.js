
pieChart()
// ChartPlane()
// chartDesign()
// chartDev()
// chartHalfOverall()
// chartTest()



function pieChart() {
  var url= API_URL+"Dashboard/show_Projectstaall";
    $.ajax({
        url: base_url("Dashboard/callApi?url="+url),
        type:'GET',
        data:{
            format:'json'
        },
        dataType:'json',
        success: function(data){
          const ctx = document.getElementById('pieOverall');
          new Chart(ctx, {
            type: 'doughnut',
            data: {
              labels: ['Completed','In Progres','Delayed'],
              datasets: [{
                label: '# of Progress',
                data: [data[0].summary, data[1].summary,data[2].summary],
              }]
            },
            
          });
        },
        error(){
            $('#pieOverall').html('Error');
        },
    });
}

 
// function ChartPlane() {
//   var options = {
//     series: [100],
//     chart: {
//         height: 250,
//         type: 'radialBar',
//         toolbar: {
//             show: true
//         }
//     },
//     plotOptions: {
//         radialBar: {
//             startAngle: -135,
//             endAngle: 225,
//             hollow: {
//                 margin: 0,
//                 size: '70%',
//                 background: '#fff',
//                 image: undefined,
//                 imageOffsetX: 0,
//                 imageOffsetY: 0,
//                 position: 'front',
//                 dropShadow: {
//                     enabled: true,
//                     top: 5,
//                     left: 0,
//                     blur: 4,
//                     opacity: 0.24
//                 }
//             },
//             track: {
//                 background: '#fff',
//                 strokeWidth: '67%',
//                 margin: 0, // margin is in pixels
//                 dropShadow: {
//                     enabled: true,
//                     top: -3,
//                     left: 0,
//                     blur: 4,
//                     opacity: 0.35
//                 }
//             },

//             dataLabels: {
//                 show: true,
//                 name: {
//                     offsetY: -20,
//                     show: true,
//                     color: '#888',
//                     fontSize: '20px'
//                 },
//                 value: {
//                     formatter: function(val) {
//                         return parseInt(val);
//                     },
//                     color: '#111',
//                     fontSize: '60px',
//                     show: true,
//                 }
//             }
//         }
//     },
//     fill: {
//         type: 'gradient',
//         gradient: {
//             shade: 'dark',
//             type: 'horizontal',
//             shadeIntensity: 0.5,
//             gradientToColors: ['#ABE5A1'],
//             inverseColors: true,
//             opacityFrom: 1,
//             opacityTo: 1,
//             stops: [0, 100]
//         }
//     },
//     stroke: {
//         lineCap: 'round'
//     },
//     labels: ['Percent'],
// };

// var chart = new ApexCharts(document.querySelector("#chartPlane"), options);
// chart.render();
// }


// function chartDesign(data) {
//   console.log('data'+data);
//   var options = {
//     series: [40],
//     chart: {
//         height: 250,
//         type: 'radialBar',
//         toolbar: {
//             show: true
//         }
//     },
//     plotOptions: {
//         radialBar: {
//             startAngle: -135,
//             endAngle: 225,
//             hollow: {
//                 margin: 0,
//                 size: '70%',
//                 background: '#fff',
//                 image: undefined,
//                 imageOffsetX: 0,
//                 imageOffsetY: 0,
//                 position: 'front',
//                 dropShadow: {
//                     enabled: true,
//                     top: 3,
//                     left: 0,
//                     blur: 4,
//                     opacity: 0.24
//                 }
//             },
//             track: {
//                 background: '#fff',
//                 strokeWidth: '67%',
//                 margin: 0, // margin is in pixels
//                 dropShadow: {
//                     enabled: true,
//                     top: -3,
//                     left: 0,
//                     blur: 4,
//                     opacity: 0.35
//                 }
//             },

//             dataLabels: {
//                 show: true,
//                 name: {
//                   offsetY: -20,
//                   show: true,
//                     color: '#888',
//                     fontSize: '20px'
//                 },
//                 value: {
//                     formatter: function(val) {
//                         return parseInt(val);
//                     },
//                     color: '#111',
//                     fontSize: '60px',
//                     show: true,
//                 }
//             }
//         }
//     },
//     fill: {
//         type: 'gradient',
//         gradient: {
//             shade: 'dark',
//             type: 'horizontal',
//             shadeIntensity: 0.5,
//             gradientToColors: ['#ABE5A1'],
//             inverseColors: true,
//             opacityFrom: 1,
//             opacityTo: 1,
//             stops: [0, 100]
//         }
//     },
//     stroke: {
//         lineCap: 'round'
//     },
//     labels: ['Percent'],
// };

// var chart = new ApexCharts(document.querySelector("#chartDesign"), options);
// chart.render();
// }


// function chartDev() {
//   var options = {
//     series: [75],
//     chart: {
//         height: 250,
//         type: 'radialBar',
//         toolbar: {
//             show: true
//         }
//     },
//     plotOptions: {
//         radialBar: {
//             startAngle: -135,
//             endAngle: 225,
//             hollow: {
//                 margin: 0,
//                 size: '70%',
//                 background: '#fff',
//                 image: undefined,
//                 imageOffsetX: 0,
//                 imageOffsetY: 0,
//                 position: 'front',
//                 dropShadow: {
//                     enabled: true,
//                     top: 3,
//                     left: 0,
//                     blur: 4,
//                     opacity: 0.24
//                 }
//             },
//             track: {
//                 background: '#fff',
//                 strokeWidth: '67%',
//                 margin: 0, // margin is in pixels
//                 dropShadow: {
//                     enabled: true,
//                     top: -3,
//                     left: 0,
//                     blur: 4,
//                     opacity: 0.35
//                 }
//             },

//             dataLabels: {
//                 show: true,
//                 name: {
//                   offsetY: -20,
//                   show: true,
//                     color: '#888',
//                     fontSize: '20px'
//                 },
//                 value: {
//                     formatter: function(val) {
//                         return parseInt(val);
//                     },
//                     color: '#111',
//                     fontSize: '60px',
//                     show: true,
//                 }
//             }
//         }
//     },
//     fill: {
//         type: 'gradient',
//         gradient: {
//             shade: 'dark',
//             type: 'horizontal',
//             shadeIntensity: 0.5,
//             gradientToColors: ['#ABE5A1'],
//             inverseColors: true,
//             opacityFrom: 1,
//             opacityTo: 1,
//             stops: [0, 100]
//         }
//     },
//     stroke: {
//         lineCap: 'round'
//     },
//     labels: ['Percent'],
// };

// var chart = new ApexCharts(document.querySelector("#chartDev"), options);
// chart.render();
// }


// function chartHalfOverall() {
     
//   var options = {
//     series: [67],
//     chart: {
//     height: 350,
//     type: 'radialBar',
//     offsetY: -10
//   },
//   plotOptions: {
//     radialBar: {
//       startAngle: -135,
//       endAngle: 135,
//       dataLabels: {
//         name: {
//           fontSize: '16px',
//           color: undefined,
//           offsetY: 120
//         },
//         value: {
//           offsetY: 76,
//           fontSize: '22px',
//           color: undefined,
//           formatter: function (val) {
//             return val + "%";
//           }
//         }
//       }
//     }
//   },
//   fill: {
//     type: 'gradient',
//     gradient: {
//         shade: 'dark',
//         shadeIntensity: 0.15,
//         inverseColors: false,
//         opacityFrom: 1,
//         opacityTo: 1,
//         stops: [0, 50, 65, 91]
//     },
//   },
//   stroke: {
//     dashArray: 4
//   },
//   labels: ['Overall Progress'],
//   };



//   var chart = new ApexCharts(document.querySelector("#chartHalfOverall"), options);
//   chart.render();

// }

// function chartTest() {
//   var options = {
//     series: [70],
//     chart: {
//     height: 180,
//     type: 'radialBar',
//   },
//   plotOptions: {
//     radialBar: {
//       hollow: {
//         size: '50%',
//       }
//     },
//   },
//   labels: ['Testing'],
//   };


//   var chart = new ApexCharts(document.querySelector("#chartTest"), options);
//   chart.render();
// }



