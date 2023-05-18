// $(() => {

//     $('#btnInsertFirst').click(function() {

//         let formData = $('#formInsertProject').serialize();
//         let projectname = $('input[name="inpProjectName"]').val();
//         let assignee = $('input[name="selPerson2"]').val();
//         let position = $('input[name="selPosition"]').val();
    
//         var url= API_URL+"Addproject/add_porject";
//         $.ajax({
//             url: base_url("Dashboard/callApi?url="+url),
//             type: 'GET',
//             data: {
//                 url:url,
//                 projectname: projectname,
//                 assignee: assignee,
//                 position:position,
//             },
//             dataType: 'json',
//             success: function(res) {
//                 console.log(res);
//                 if (res.result == true) {
//                     Swal.fire({
//                         icon: 'success',
//                         title: 'Success!',
//                         html: res.message,
//                         timer: 3000
//                     }).then(() => {
//                         // window.location.href = 'http://127.0.0.1/DashboardProject/Dashboard/manage';
//                     })
    
//                 } else {
//                     Swal.fire({
//                         icon: 'error',
//                         title: 'Error Login!',
//                         html: res.message,
//                     })
//                 }
//             }
//         })
//     })





// })