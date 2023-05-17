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
                data: [data[0].summary, data[1].summary,5],
              }]
            },
            
          });
        },
        error(){
            $('#pieOverall').html('Error');
        },
    });
  
}

 
