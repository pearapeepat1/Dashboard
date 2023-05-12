/*$(() => {

    getProductDetails()

});

function getProductDetails() {
    $.ajax({
        url: base_url('Dashboard/ShowProjectList'),
        type: "GET", // GET, POST
        dataType: "json",
        success: function(result) {
            let html = '';
            result.forEach(element => {
                html += `<tr>
                            <td>${element["#"]}</td>
                            <td>${element["project_name"]}</td>
                            <td>${element["project_manager"]}</td>
                            <td>${element["project_due"]}</td>
                            <td>${element["project_status"]}</td>
                            <td>${element["project_progress"]}</td>
                        </tr>`;
            });

            $('#tblProjectList tbody').html(html);


            let table2 = new DataTable('#tblProjectList');

        }
    })
}*/



//insert textbox when select in dropdown*****
/*$(document).ready(function () {

    $('#slct').change(function () {
        var value = $(this).val(); var toAppend = '';
        if (value == 1) {
            toAppend = "<input type='textbox' >"; $("#container").html(toAppend); return;
        }
        if (value == 2) {
            toAppend = "<input type='textbox' >&nbsp;<input type='textbox' >"; $("#container").html(toAppend); return;
        }
        if (value = 3) {
            toAppend = "<input type='textbox' >&nbsp;<input type='textbox' >&nbsp;<input type='textbox' >"; $("#container").html(toAppend); return;

        }

    });

});*/

$(document).ready(function(){
	
    $("#ddlModel").on("change",function(){
       var GetValue=$("#ddlModel").val();
       $("#myTextbox").val(GetValue);
    });
    
    });
    

    // $(document).ready(() => {
    //     $.ajax({
    //       method: "get",
    //       url: "https://api.publicapis.org/entries",
    //       success: (response) => {
    //         console.log(response);
    //         if (response.entries.length > 0) {
    //           var html = "";
    //           for (let i = 0; i < response.entries.length; i++) {
    //             const data = response.entries[i];
    //             //console.log(data.API);
    //             html += `
    //                               <tr>
    //                                   <th scope="row">${i + 1}</th>
    //                                   <td>${data.API}</td>
    //                                   <td>${data.Auth}</td>
    //                                   <td>${data.Cors}</td>
    //                                   <td>${data.Category}</td>
    //                                   <td>
    //                                       <a href="${
    //                                         data.Link
    //                                       }" target="blank" class="btn-sm btn-primary">Link</a>
    //                                   </td>
    //                               </tr>`;
    //           }
    //           $("#tbody")
    //             .html(html)
    //             .promise()
    //             .done(() => {
    //               $("#table-master").DataTable();
    //             });
    //         }
    //       },
    //       error: (err) => {
    //         console.log(err);
    //       }
    //     });
    //   });
      