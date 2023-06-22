 //------------------------------------------ Button get ID for Show Detail  ---------------------------------------------------
 var value
 var dataDetail = []
 $(() => {
     // Create a new URLSearchParams object with the current URL search parameters
     var searchParams = new URLSearchParams(window.location.search);

     // Get the value of a specific parameter
     value = searchParams.get('id');
     //  console.log(value);
     tblDetailStep(value)

 })

 //---------------------------------------------table stap detail page ----------------------------------------------------------
 function tblDetailStep(data) {
     var url = API_URL + "Detail/show_project_step?projectID=" + data;
     $.ajax({
         url: base_url('Dashboard/callApiDetail'),
         type: 'GET',
         dataType: 'Json',
         data: {
             url: url,
             ProId: data,
         },
         success: (response) => {
             dataDetail = response
             var perCent = dataDetail.pj_percent
             var dataProject = dataDetail.detail_pj
             console.log(dataDetail);
             for (let i = 0; i < dataProject.length; i++) {
                 const data = dataProject[i];
                 const show_status = data.status;
                 if (show_status == 0) {
                     var status_rusult = '<span class="text-success text-uppercase">Completed</span>';
                     var img_status = 'https://cdn-icons-png.flaticon.com/512/4685/4685238.png'
                 } else if (show_status == 1) {
                     var status_rusult = '<span class="text-warning text-uppercase">In&nbsp;progress</span>';
                     var img_status = 'https://cdn-icons-png.flaticon.com/512/3528/3528180.png'
                 } else if (show_status == 2) {
                     var status_rusult = '<span  class="text-danger text-uppercase">Delayed</span>';
                     var img_status = 'https://cdn-icons-png.flaticon.com/128/2972/2972549.png'
                 } else {
                     var status_rusult = '<span class="text-primary text-uppercase">Waiting</span>';
                     var img_status = 'https://cdn-icons-png.flaticon.com/512/1027/1027650.png'
                 }

                 if (perCent == 100) {
                     var color_over = 'green';
                 } else if (perCent < 100 && show_status == 2) {
                     var color_over = 'red';
                 } else {
                     var color_over = 'orange';
                 }
                 $('#projectStatus').empty().append(`<div class="row"><div class="col-lg-4"><img src="${img_status}" alt="" class="responsive" srcset=""></div><div class="col-lg-8"><h5 class="txt-b">STATUS&nbsp;:&nbsp;${status_rusult}</h5><p class="text-uppercase ">Project Leader : ${data.leader}</p><p class="text-uppercase">Start Date : ${data.str_date}</p><p class="text-uppercase">Due Date : ${data.end_date}</p></div></div>`)

             }
             if (response.entries.length > 0) {
                 for (let i = 0; i < response.entries.length; i++) {
                     const data = response.entries[i];
                     const show_status = data.status;
                     const show_progress = data.percents;

                     if (show_status == 0) {
                         var status_rusult = '<span class="txt-b"><i class="bi bi-circle-fill blink text-success"></i>&nbsp;Completed</span>';
                     } else if (show_status == 1) {
                         var status_rusult = '<span class="txt-b"><i class="bi bi-circle-fill blink text-warning"></i>&nbsp;In&nbsp;progress</span>';
                     } else if (show_status == 2) {
                         var status_rusult = '<span class="txt-b"><i class="bi bi-circle-fill blink text-danger"></i>&nbsp;Delayed</span>';
                     } else {
                         var status_rusult = '<span class="txt-b"><i class="bi bi-circle-fill blink text-primary"></i>&nbsp;Waiting</span>';
                     }
                     if (show_progress == 100) {
                         var status_color = 'green';
                     } else if (show_progress < 100 && show_status == 2) {
                         var status_color = 'red';
                     } else {
                         var status_color = 'orange';
                     }

                     if (show_status == 0) {
                         var status_icon = 'is-done';
                     } else if (show_status == 1) {
                         var status_icon = 'current';
                     } else if (show_status == 2) {
                         var status_icon = 'delay';
                     } else {
                         var status_icon = 'waiting';
                     }

                     if (data.due_date == null) {
                         data.due_date = ''
                     }
                     if (data.person == null) {
                         data.person = ''
                     }
                     if (data.star_date == null) {
                         data.star_date = ''
                     }
                     document.getElementById("ProjectName").innerHTML = data.projectname;
                     $('#Overall').empty().append(`<center><div class="pieOver animate no-round " style="--p:${perCent};--c:${color_over};--b:8px" >${perCent}%</div></center>`)
                     $('#proGress').empty().append(`<div class="progress-bar bg-success" role="progressbar" aria-label="Example with label" style="width: ${perCent}%;" aria-valuenow="${perCent}" aria-valuemin="0" aria-valuemax="100">${perCent}%</div>`)
                     $('.showData').append(`<li ><center><div class="pieStep animate no-round " style="--p:${data.percents};--c:${status_color};--b:4px" >${data.percents}%</div></center>Assinee : ${data.person}<br>Start : ${data.star_date}</li><br>`)
                     $('.step-progress').append(` <span>Due Date: ${data.due_date}</span><br>${status_rusult}<li class="step-progress-item ${status_icon} txt-b"><strong><h2 class="fw-bold">${data.step}</h2></strong></li><br>`)
                 }

             }
         }
     });
 }