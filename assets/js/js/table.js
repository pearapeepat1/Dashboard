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