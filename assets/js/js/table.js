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

$(document).ready(function () {
    $('#example').DataTable();
});

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
    