pieChart()
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

 
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [
      {
        data: [50, 60, 70, 180, 190],
      },
    ],
  },
  options: {
    plugins: {
      datalabels: {
        display: true,
        backgroundColor: '#ccc',
        borderRadius: 3,
        font: {
          color: 'red',
          weight: 'bold',
        },
      },
      doughnutlabel: {
        labels: [
          {
            text: '550',
            font: {
              size: 20,
              weight: 'bold',
            },
          },
          {
            text: 'total',
          },
        ],
      },
    },
  },
});
