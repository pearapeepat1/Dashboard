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
    showProjectlistManage()
    showPositionDrop()
    selPersontDrop()
    showNameDrop2()
    selPersontDrop3()
    showPositionDrop3() 

//------------------------------------------show  Project Count ---------------------------------------------------
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
            //console.log(data);
            let Count = $('<h4 class="my-1 text-info txt-b">').text(data[0].cnt_project);
            $('#sumProject')
                .append(Count);
        },
        error(){
            $('#sumProject').html('Error');
        },
        
    });
}

//------------------------------------------show  Project Count in div Overall Progress  ---------------------------------------------------
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
            //console.log(data);
            let Count = $('<h4 class="txt-b">').text(data[0].cnt_project);
            $('#sumProjecT')
                .append(Count);
        },
        error(){
            $('#sumProjecT').html('Error');
        },
    });
}

//------------------------------------------Show Person Count ---------------------------------------------------
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
            //console.log(data);
            let Count = $('<h4 class="my-1 text-danger txt-b">').text(data[0].cnt_person);
            $('#sumPerson')
                .append(Count);
        },
        error(){
            $('#sumPerson').html('Error');
        },
        
    });
}

//------------------------------------------Show Time Count ---------------------------------------------------
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
            error(){
                $('#sumTime').html('Error');
            },
            
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
//------------------------------------------Show Count Project in progress ---------------------------------------------------
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


//------------------------------------------Table Project Dashboard page ---------------------------------------------------
function showProjectlist() {
    var url= API_URL+"Dashboard/showProjectList";
    $.ajax({
      method: "get",
      url: base_url("Dashboard/callApi?url="+url),
      dataType:'Json',
      success: (response) => {
       // console.log(response);
        if (response.entries.length > 0) {
        //alert("length > 0");
          var html = "";
          for (let i = 0; i < response.entries.length; i++) {
            const data = response.entries[i];
           //alert(data.ip_project_name);
           const show_status = data.ip_status_project;
           const show_progress = data.percents;
           if(show_status == 0){
             var status_rusult = '<span class="badge rounded-pill bg-success "><i class="bi bi-stars"></i> Completed</span>';
           }else if(show_status == 1){
            var status_rusult = '<span class="badge rounded-pill bg-warning "><i class="bi bi-stars"></i> In &nbsp;progress</span>';
           }else{
            var status_rusult = '<span class="badge rounded-pill bg-danger  blink"><i class="bi bi-stars"></i> Delayed</span>';
           }
           if(show_progress==100){
            var status_color = 'green';
           }else if(show_progress < 100 && show_status == 2 ){
            var status_color = 'red';
           }else{
            var status_color = 'orange';
           }
            html += `
                    <tr>
                        <td style="display:none;">${data.ip_id}</td>
                        <td>${data.ip_project_name}</td>
                        <td>${data.ip_person_in_charge}</td>
                        <td>${data.due_date}</td>
                        <td>${status_rusult}</td>
                        <td><div class="pie animate no-round " style="--p:${data.percents};--c:${status_color};--b:4px" >${data.percents}%</div></td>
                        <td><p class="btn btnDel text-center" id="btnDetail" data-id="${data.ip_id}><i class="bi bi-info-circle"></i><i class="bi bi-grid-fill "></i></p></td>
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



//  button Insert
 $('#btnDetail').click(function() {
  var url= API_URL+"Dashboard/showProjectList";
  let id = $(this).attr('data-id');
  console.log(id);
  $.ajax({
       url: base_url("Dashboard/callApi?url="+url),
      type: 'GET',
      data: {
          ProId: id,
      },
      dataType: 'json',
      success: function(result) {
          //tableAjax3.ajax.reload();
      }
  });
})

//------------------------------------------Table Project Management page ---------------------------------------------------
  function showProjectlistManage() {
    var url= API_URL+"Manage/show_projectlist";
    // alert(url);
    $.ajax({
      method: "get",
      url: base_url("Dashboard/callApi?url="+url),
      dataType:'Json',
      success: (response) => {
        if (response.entries.length > 0) {
          var html = "";
          for (let i = 0; i < response.entries.length; i++) {
            const data = response.entries[i]; 
            const show_status = data.ip_status_project;
            if(show_status == 0){
              var status_rusult = '<span class="badge rounded-pill bg-success "><i class="bi bi-stars"></i> Completed</span>';
            }else if(show_status == 1){
             var status_rusult = '<span class="badge rounded-pill bg-warning "><i class="bi bi-stars"></i> In &nbsp;progress</span>';
            }else{
             var status_rusult = '<span class="badge rounded-pill bg-danger  blink"><i class="bi bi-stars"></i> Delayed</span>';
            }         
            html += `
                    <tr>
                        <td style="display:none;">${data.ip_id}</td>
                        <td>${data.ip_project_name}</td>
                        <td>${data.ip_project_step}</td>
                        <td>${data.ip_person_in_charge}</td>
                        <td>${data.star_date}</td>
                        <td>${data.due_date}</td>
                        <td>${status_rusult}</td>
                        <td>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                          </div>
                      </td>
                      <td><p class="btn btnDel text-center" id="btnDetail" data-id="${data.ip_id}><i class="bi bi-info-circle"></i><i class="bi bi-pencil-square "></i></p></td>
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

//------------------------------------------Deropdown Person in chart ---------------------------------------------------
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
       // console.log(data.entries);
        $.each(data.entries, function(index, value) {
            $('#selPerson').append(" <option value ='" + value.su_username + "'>'" + value.su_username + "'</option>")
        })
        
      },
      
    });
  };
//------------------------------------------Deropdown Person in chart 2---------------------------------------------------
function selPersontDrop() {
  var url= API_URL+"Dashboard/show_Person";
  $.ajax({
    method: "get",
    url: base_url("Dashboard/callApi?url="+url),
    data:{
      format:'json'
  },
    dataType:'Json',
    success: function (data)  {
     // console.log(data.entries);
      $.each(data.entries, function(index, value) {
          $('#selPerson2').append(" <option value ='" + value.su_username + "'>'" + value.su_username + "'</option>")
      })
      
    },
    
  });
};
//------------------------------------------Deropdown Person in chart 3---------------------------------------------------
function selPersontDrop3() {
  var url= API_URL+"Dashboard/show_Person";
  $.ajax({
    method: "get",
    url: base_url("Dashboard/callApi?url="+url),
    data:{
      format:'json'
  },
    dataType:'Json',
    success: function (data)  {
     // console.log(data.entries);
      $.each(data.entries, function(index, value) {
          $('#selPerson3').append(" <option value ='" + value.su_username + "'>'" + value.su_username + "'</option>")
      })
      
    },
    
  });
};
//------------------------------------------Deropdown Position---------------------------------------------------
function showPositionDrop() {
  var url= API_URL+"Dashboard/show_Prosition";
  $.ajax({
    method: "get",
    url: base_url("Dashboard/callApi?url="+url),
    data:{
      format:'json'
  },
    dataType:'Json',
    success: function (data)  {
     // console.log(data.entries);
      $.each(data.entries, function(index, value) {
          $('#selPosition').append(" <option value ='" + value.mp_name + "'>'" + value.mp_name + "'</option>")
      })
      
    },
    
  });
};
//------------------------------------------Deropdown Position 2---------------------------------------------------
function showPositionDrop3() {
  var url= API_URL+"Dashboard/show_Prosition";
  $.ajax({
    method: "get",
    url: base_url("Dashboard/callApi?url="+url),
    data:{
      format:'json'
  },
    dataType:'Json',
    success: function (data)  {
     // console.log(data.entries);
      $.each(data.entries, function(index, value) {
          $('#selPosition3').append(" <option value ='" + value.mp_name + "'>'" + value.mp_name + "'</option>")
      })
      
    },
    
  });
};

//------------------------------------------Deropdown Peoject Name ---------------------------------------------------
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
        //console.log(data.entries);
        $.each(data.entries, function(index, value) {
          const projectName = value.ip_project_name;
            $('#selName').append(" <option value ='" + projectName + "'>'" + projectName + "'</option>")
        })
        
      },
      
    });
  };
  //------------------------------------------Deropdown Peoject Name 2---------------------------------------------------
function showNameDrop2() {
  var url= API_URL+"Dashboard/showProjectList";
  $.ajax({
    method: "get",
    url: base_url("Dashboard/callApi?url="+url),
    data:{
      format:'json'
  },
    dataType:'Json',
    success: function (data)  {
      //console.log(data.entries);
      $.each(data.entries, function(index, value) {
        const projectName = value.ip_project_name;
          $('#selProject2').append(" <option value ='" + projectName + "'>'" + projectName + "'</option>")
      })
      
    },
    
  });
};

//------------------------------------------Deropdown Status ---------------------------------------------------
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
       // console.log(data.entries);
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

//------------------------------------------Test Button get ID ---------------------------------------------------

  // $(document).on('click', '.btnDetail', function() {
//   let id = $(this).attr('data-id');
//   console.log(id);
//   $.ajax({
//       url: base_url('Dashboard/DelData'),
//       type: 'GET',
//       data: {
//           ProId: id,
//       },
//       dataType: 'json',
//       success: function(result) {

//       }
//   });
// })


//------------------------------------------Test Fillter by Dropdown List ---------------------------------------------------

//   $('#selName').on('change', function() {
// 		$('#table-master').dataTable().fnDestroy()
// 		let getName = $(this).val();
// 		let getPerson = $('#selPerson').val();
// 		let getStatus = $('#selStatusn').val();
// 		list_table(getName, 0, 0, getPerson);
// 	});


// 	function list_table(str_date, start, end, str_dep) {
// 		var url = API_URL + "Dashboard/showProjectList";
// 		var historyTable = $('#table-master').DataTable({
// 			ajax: {
// 				type: 'POST',
// 				url: base_url("Dashboard/callApi?url=" + url),
// 				data: {
// 					project_name:ip_project_name,
// 					person_in_charge: ip_person_in_charge,
// 					due_date:due_date,
// 					status_project:ip_status_project
// 				}
// 			},
// 			columnDefs: [{
// 				searchable: true,
// 				orderable: false,
// 				targets: 0,
// 			}, ],
// 			bSort: false,
// 			order: [
// 				[1, 'asc']
// 			],
// 			columns: [{
// 					className: 'text-center',
// 					data: 'ip_project_name'
// 				},
// 				{
// 					className: 'text-center',
// 					data: 'ip_person_in_charge'
// 				},
// 				{
// 					className: 'text-center',
// 					data: 'due_date'
// 				},
// 				{
// 					className: 'text-center',
// 					data: 'ip_status_project'
// 				},
// 			]
// 		});
// 		historyTable.on('order.dt search.dt', function() {
// 			let i = 1;
// 			historyTable.cells(null, 0, {
// 				search: 'applied',
// 				order: 'applied'
// 			}).every(function(cell) {
// 				this.data(i++);
// 			});
// 		}).draw();
// 	}
// })

//----------------------------------------------------test datatable-------------------------------------------------
// let tableAjax3 = $('#tblPHM').DataTable({
//   ajax: {
//       url: base_url('Dashboard/ReportPHM'),
//       dataSrc: '',
//   },
//   columns: [{
//           data: 'pds_code',
//       },
//       {
//           data: 'pds_name',
//       },
//       {
//           data: 'pds_price',
//       },
//       {
//           data: 'pds_qty',
//       }, {
//           data: null,
//           render: function(row) {
//               return `<button class="btn btn-success btnEdit" type="button" data-id="${row.pds_code}"><i class="bi bi-pencil-square"></i></button>`;
//           }
//       },
//       {
//           data: null,
//           render: function(row) {
//               return `<button class="btn btn-danger btnDel" type="button" data-id="${row.pds_code}"><i class="bi bi-trash3-fill"></i></button>`;
//           }
//       }

//   ],
// })

})
