$(document).ready(function() {
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
        var url = API_URL + "Login/chk_login?username=" + username + "&password=" + password;
        $.ajax({
            url: base_url("Dashboard/callApiLogin"),
            type: 'GET',
            data: {
                url: url,
                username: username,
                password: password,
            },
            dataType: 'json',
            success: function(res) {
                if (res.result == true) {
                    Swal.fire({
                            icon: 'success',
                            title: '<h1 class="txt-b">Login success</h1>',
                            html: `<h3 class="txt-b text-success">Welcome ${res.data} !</h3>`,
                            timer: 1500,
                        })
                        .then(() => {
                            window.location.href = 'http://127.0.0.1/DashboardProject/Dashboard/manage';
                            sessionStorage.setItem("userName", res.data);
                            let personName = sessionStorage.getItem("userName");
                            document.getElementById("userName").innerHTML = personName;
                        })

                } else if (res.result == 5) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Login!',
                        html: `<h5>Username do not correct </h5>`,
                    })
                } else if (res.result == 6) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Login!',
                        html: `<h5>Password do not correct </h5>`,
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Login!',
                        html: res.respone
                    })
                }
            }
        })
    })





});