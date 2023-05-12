function manage() {
    Swal.fire({
        title: 'Login Form',
        html: `<input type="text" id="username" class="swal2-input" placeholder="Username"><input type="password" id="password" class="swal2-input" placeholder="Password">`,
        confirmButtonText: 'Sign in',
        focusConfirm: false,
        preConfirm: () => {
            const password = Swal.getPopup().querySelector('#password').value
            if (!password) {
                Swal.showValidationMessage(`Please enter username & password`)
            }
            return { password: password }

        }
    }).then(() => {
        window.location.href = base_url('Dashboard/manage')
    })

}


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