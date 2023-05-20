
$('#btnLogin').click(function() {

    let formData = $('#formLogin').serialize();
    let username = $('input[name="username"]').val();
    let password = $('input[name="password"]').val();
    if (username == "") {
        $('#err_in1').text("Insert Username!");
        $('#username').focus();
        return false;
    }
    if (password == "") {
        $('#err_in2').text("Insert Password!");
        $('#password').focus();
        return false;
    }
    var url= API_URL+"Login/chk_login?username="+ username +"&password=" + password;
    $.ajax({
        url: base_url("Dashboard/callApiLogin"),
        type: 'GET',
        data: {
            url:url,
            username: username,
            password: password,
        },
        dataType: 'json',
        success: function(res) {
            if (res.result == true) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    html: res.message,
                    timer: 3000
                }).then(() => {
                    window.location.href = 'http://127.0.0.1/DashboardProject/Dashboard/manage';
                })

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error Login!',
                    html: res.message,
                })
            }
        }
    })
})

// document.addEventListener("DOMContentLoaded", function() {
//     setInterval(() => {
//         var datetime = new Date();
//         //console.log(datetime);
//         document.getElementById("time").textContent = datetime; //it will print on html page
//     }, 1000);
// });
const container = document.getElementById('input-cont');

// Call addInput() function on button click
function addInput() {
    let input = document.createElement('input');
    input.placeholder = 'Add Topic';
    container.appendChild(input);
}

$(document).ready(function() {

    var i = 1;
    var length;
    //var addamount = 0;
    var addamount = 700;

    $("#add").click(function() {

        //var rowIndex = $('#dynamic_field').find('tr').length;	 -->
        //console.log('rowIndex: ' + rowIndex); -->
        //console.log('amount: ' + addamount); -->
        //var currentAmont = rowIndex * 700; -->
        //console.log('current amount: ' + currentAmont); -->
        //addamount += currentAmont; -->

        addamount += 700;
        console.log('amount: ' + addamount);
        i++;
        $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="Enter topic" class="form-control name_list"/></td><td><td></td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

    $(document).on('click', '.btn_remove', function() {
        addamount -= 700;
        console.log('amount: ' + addamount);

        //var rowIndex = $('#dynamic_field').find('tr').length;	 -->
        //addamount -= (700 * rowIndex); -->
        //console.log(addamount); -->

        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });



    $("#submit").on('click', function(event) {
        var formdata = $("#add_name").serialize();
        console.log(formdata);

        event.preventDefault()

        $.ajax({
            url: "#",
            type: "POST",
            data: formdata,
            cache: false,
            success: function(result) {
                alert(result);
                $("#add_name")[0].reset();
            }
        });

    });
});




