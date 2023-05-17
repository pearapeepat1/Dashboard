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

    
    function putStatus() {
         var url= API_URL+"Manage/show_projectlist";
        $.ajax({
            type: "GET",
            url: base_url("Dashboard/callApi?url="+url),
            data: {toggle_select: true},
            success: function (result) {
                var status = result.ip_status_flg;
                if (status == 1) {
                    $('#customSwitch1').prop('checked', true);
                    statusText(1);
                } else {
                    $('#customSwitch1').prop('checked', false);
                    statusText(0);
                }
                lastUpdated();
            }
        });
    }
    
    function onToggle() {
        $('#toggleForm :checkbox').change(function () {
            if (this.checked) {
                //alert('checked');
                updateStatus(1);
                statusText(1);
            } else {
                //alert('NOT checked');
                updateStatus(0);
                statusText(0);
            }
        });
    }
    
    function updateStatus(ip_status_flg) {
        var url= API_URL+"Manage/show_projectlist";
        $.ajax({
            type: "GET",
            url: base_url("Dashboard/callApi?url="+url),
            data: {toggle_update: true, status: ip_status_flg},
            success: function (result) {
                console.log(result);
                lastUpdated();
            }
        });
    }
    

    
    $(document).ready(function () {
        putStatus();//Set button to current status
        onToggle();//Update when toggled
        statusText();//Last updated text
    });