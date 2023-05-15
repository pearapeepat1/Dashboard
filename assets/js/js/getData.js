$(() => {
    showProjectCounT()
    showProjectCount()
    showPersonCount()
    showTimeCount()
    showProjectlist()
    showProjectCompleted()
    showProjectinProgres()
    showProjectDelayed()
    showProjectDrop()
    showNameDrop()
    showStatusDrop()
    getval(sel)
    showProjectlistManage()

function showProjectCount() {
    var url= API_URL+"Dashboard/showProjectcount";
    $.ajax({
        url: base_url("Dashboard/callApi?url="+url),
        type:'GET',
        data:{
            format:'json'
        },
        dataType:'json',
        success: function(data){
            console.log(data);
            let Count = $('<h4 class="my-1 text-info txt-b">').text(data[0].cnt_project);
            $('#sumProject')
                .append(Count);
        },
        error(){
            $('#sumProject').html('Error');
        },
        
    });
}
function showProjectCounT() {
    var url= API_URL+"Dashboard/showProjectcount";
    $.ajax({
        url: base_url("Dashboard/callApi?url="+url),
        type:'GET',
        data:{
            format:'json'
        },
        dataType:'json',
        success: function(data){
            console.log(data);
            let Count = $('<h4 class="txt-b">').text(data[0].cnt_project);
            $('#sumProjecT')
                .append(Count);
        },
        error(){
            $('#sumProjecT').html('Error');
        },
    });
}
// function showProjectCount2() {

//     $.ajax({
//         url: base_url('Dashboard/showProjectcount'),
//         type:'GET',
//         data:{
//             format:'json'
//         },
//         dataType:'json',
//         success: function(data){
//             console.log(data);
//             let Count = $('<h4 class="my-1 text-info txt-b">').text(data[0].cnt_project);
//             $('#sumProject2')
//                 .append(Count);
//         },
//         error(){
//             $('#sumProject2').html('Error');
//         },
        
//     });
// }

function showPersonCount() {
    var url= API_URL+"Dashboard/showPersoncount";
    $.ajax({
        url: base_url("Dashboard/callApi?url="+url),
        type:'GET',
        data:{
            format:'json'
        },
        dataType:'json',
        success: function(data){
            console.log(data);
            let Count = $('<h4 class="my-1 text-danger txt-b">').text(data[0].cnt_person);
            $('#sumPerson')
                .append(Count);
        },
        error(){
            $('#sumPerson').html('Error');
        },
        
    });
}
function showTimeCount() {
    var url= API_URL+"Dashboard/showTimecount_hour";
        $.ajax({
            url: base_url("Dashboard/callApi?url="+url),
            type:'GET',
            data:{
                format:'json'
            },
            dataType:'json',
            success: function(data){
                let Count = $('<h4 class="my-1 text-success txt-b">').text(data[0].time_hour);
                $('#sumTime')
                    .append(Count);
            },
            // error(){
            //     $('#sumTime').html('Error');
            // },
            
        });
    }

function showProjectCompleted() {
var url= API_URL+"Dashboard/show_Projectstaall";
    $.ajax({
        url: base_url("Dashboard/callApi?url="+url),
        type:'GET',
        data:{
            format:'json'
        },
        dataType:'json',
        success: function(data){
            let Count = $('<h4 class="my-1 text-success txt-b">').text(data[0].summary);
            $('#pjCompleted')
                .append(Count);
        },
        error(){
            $('#pjCompleted').html('Error');
        },
        
    });
}
function showProjectinProgres() {
    var url= API_URL+"Dashboard/show_Projectstaall";
        $.ajax({
            url: base_url("Dashboard/callApi?url="+url),
            type:'GET',
            data:{
                format:'json'
            },
            dataType:'json',
            success: function(data){
                let Count = $('<h4 class="my-1 text-warning txt-b">').text(data[1].summary);
                $('#pjinProgres')
                    .append(Count);
            },
            error(){
                $('#pjinProgres').html('Error');
            },
            
        });
    }
    function showProjectDelayed() {
        var url= API_URL+"Dashboard/show_Projectstaall";
            $.ajax({
                url: base_url("Dashboard/callApi?url="+url),
                type:'GET',
                data:{
                    format:'json'
                },
                dataType:'json',
                success: function(data){
                    let Count = $('<h4 class="my-1 text-danger txt-b">').text(data[2].summary);
                    $('#pjDelayed')
                        .append(Count);
                },
                error(){
                    $('#pjDelayed').html('Error');
                },
                
            });
        }


function showProjectlist() {
    var url= API_URL+"Dashboard/showProjectList";
    $.ajax({
      method: "get",
      url: base_url("Dashboard/callApi?url="+url),
      dataType:'Json',
      success: (response) => {
        console.log(response);
        if (response.entries.length > 0) {
        //alert("length > 0");
          var html = "";
          for (let i = 0; i < response.entries.length; i++) {
            const data = response.entries[i];
           //alert(data.ip_project_name);
           const show_status = data.ip_status_project;
           if(show_status == 0){
             var status_rusult = '<p class="text-success">Completed</p>';
           }else if(show_status == 1){
            var status_rusult = '<p class="text-warning">in progress</p>';
           }else{
            var status_rusult = '<p class="text-danger">Delayed</p>';
           }
            html += `
                    <tr>
                        <td style="display:none;">${data.ip_id}</td>
                        <td>${data.ip_project_name}</td>
                        <td>${data.ip_person_in_charge}</td>
                        <td>${data.due_date}</td>
                        <td>${status_rusult}</td>
                        <td><div class="pie animate no-round" style="--p:80;--c:red;--b:5px">80%</div></td>
                        <td><button type="button" class="btn btn-secondary btnDel" data-id="${data.ip_id}><i class="bi bi-info-circle"></i> Detail</button></td>
                    </tr>`;
          }
          $("#tbody")
            .html(html)
            .promise()
            .done(() => {
              $("#table-master").DataTable();
            });
         }
      },
      error: (err) => {
        console.log(err);
      }
    });
  };
  function showProjectlistManage() {
    var url= API_URL+"Manage/show_projectlist";
    $.ajax({
      method: "get",
      url: base_url("Dashboard/callApi?url="+url),
      dataType:'Json',
      success: (response) => {
        console.log(response);
        if (response.entries.length > 0) {
          var html = "";
          for (let i = 0; i < response.entries.length; i++) {
            const data = response.entries[i];
           const show_status = data.ip_status_project;
           if(show_status == 0){
            var status_rusult = '<p class="text-success">Completed</p>';
          }else if(show_status == 1){
           var status_rusult = '<p class="text-warning">in progress</p>';
          }else{
           var status_rusult = '<p class="text-danger">Delayed</p>';
          }
            html += `
                    <tr>
                        <td style="display:none;">${data.ip_id}</td>
                        <td>${data.ip_project_name}</td>
                        <td>${data.ip_project_step}</td>
                        <td>${data.ip_person_in_charge}</td>
                        <td>${data.ip_position}</td>
                        <td>${data.star_date}</td>
                        <td>${data.due_date}</td>
                        <td>${status_rusult}</td>
                        <td> <form method="post" id="toggleForm">
                        <fieldset>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name='machine_state'>
                                    <label class="custom-control-label" id="statusText" for="customSwitch1"></label>
                                </div>
                            </div>
                        </fieldset>
                    </form></td>
                        <td><button type="button" class="btn btn-secondary btnDel" data-id="${data.ip_id}><i class="bi bi-info-circle"></i> Detail</button></td>
                    </tr>`;
          }
          $("#tbodY")
            .html(html)
            .promise()
            .done(() => {
              $("#tblManage").DataTable();
            });
         }
      },
      error: (err) => {
        console.log(err);
      }
    });
  };
  function showProjectDrop() {
    var url= API_URL+"Dashboard/show_Person";
    $.ajax({
      method: "get",
      url: base_url("Dashboard/callApi?url="+url),
      data:{
        format:'json'
    },
      dataType:'Json',
      success: function (data)  {
        console.log(data.entries);
        $.each(data.entries, function(index, value) {
            $('#selPerson').append(" <option value ='" + value.su_id + "'>'" + value.su_username + "'</option>")
        })
        
      },
      
    });
  };


  function showNameDrop() {
    var url= API_URL+"Dashboard/showProjectList";
    $.ajax({
      method: "get",
      url: base_url("Dashboard/callApi?url="+url),
      data:{
        format:'json'
    },
      dataType:'Json',
      success: function (data)  {
        console.log(data.entries);
        $.each(data.entries, function(index, value) {
            $('#selName').append(" <option value ='" + value.su_id + "'>'" + value.ip_project_name + "'</option>")
        })
        
      },
      
    });
  };

  
  function showStatusDrop() {
    var url= API_URL+"Dashboard/show_Eachstatus";
    $.ajax({ 
      method: "get",
      url: base_url("Dashboard/callApi?url="+url),
      data:{
        format:'json'
    },
      dataType:'Json',
      success: function (data)  {
        console.log(data.entries);
        $.each(data.entries, function(index, value) {
            const status = value.ip_status_project;
            if(status == 0){
                var show_status = 'Completes';
            }else if(status == 1){
                var show_status = 'In progress';
            }else{
                var show_status = 'Delayed';
            }
            $('#selStatus').append(" <option value ='" + status + "'>'" + show_status + "'</option>")
        })
        
      },
      
    });
  };

  $('select').on('change', function() {
    alert( this.value );
  });

  $(function() {
  $('#colorselector').change(function(){
    $('.colors').hide();
    $('#' + $(this).val()).show();
  });
});

 //button Delete
 $(document).on('click', '.btnDel', function() {
    var url= API_URL+"Dashboard/showProjectList";
    let id = $(this).attr('data-id');
    alert(id);     
    $.ajax({
        url: base_url("Dashboard/callApi?url="+url),
        type: 'GET',
        data: {
            ProId: id,
        },
        dataType: 'json',
        success: function(result) {

        }
    });
})
// $(document).ready(function(){
//     $('#table-master').DataTable();
//     $("#selProject").on('change', function(){
//       var value = $(this).val();
//       var url= API_URL+"Dashboard/showProjectList";
//       $.ajax({
//         url: base_url("Dashboard/callApi?url="+url),
//         type: 'POST',
//         data: 'request='+value,
//         success:function(data)
//         {
//         $("#tampil_kriteria").html(data);
//         $('#table-master').DataTable();
//         },
//       });
//     });
//   });

//   function showProjectlist() {
//     var url= API_URL+"Dashboard/showProjectList";
//     $.ajax({
//       method: "get",
//       url: base_url("Dashboard/callApi?url="+url),
//       dataSrc:'',
//       success: (response) => {
//         console.log(response);
//         response.forEach(element => {
//             html += `
//                     <tr>
//                         <td>${element["ip_project_name"]}</td>
//                         <td>${element.ip_person_in_charge}</td>
//                         <td>${element.due_date}</td>
//                         <td>${element.due_date}</td>
//                     </tr>`;
//                 });
//                 $('#table-master tbody').html(html);


//                 let table2 = new DataTable('#table-master');
         
//       },
//       error: (err) => {
//         console.log(err);
//       }
//     });
//   };
})