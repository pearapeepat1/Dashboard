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
    showPositionDrop()
    selPersontDrop()
    showNameDrop2()
    selPersontDrop3()
    showStatusDropManage()
    showPositionDrop3()
    showProjectlistManage()
        // tblDetailStep()
    list_table()
    selPersontDrop4()
    showProjectCountMange()
    selLeader()
    setInterval(() => {
        onToggle()
    }, 1000);


    //------------------------------------------ show  Project Count on Dashboard  page---------------------------------------------------

    function showProjectCount() {
        var url = API_URL + "Dashboard/showProjectcount";
        $.ajax({
            url: base_url("Dashboard/callApi?url=" + url),
            type: 'GET',
            data: {
                format: 'json'
            },
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                let Count = $('<h4 class="my-1 text-info txt-b">').text(data[0].cnt_project);
                $('#sumProject').empty()
                    .append(Count);
            },
            error() {
                $('#sumProject').html('Error');
            },

        });
    }
    //----------------------------------------------------------------------------------------------------------------


    //------------------------------------------show  Project Count in div Overall Progress  --------------------------
    function showProjectCounT() {
        var url = API_URL + "Dashboard/showProjectcount";
        $.ajax({
            url: base_url("Dashboard/callApi?url=" + url),
            type: 'GET',
            data: {
                format: 'json'
            },
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                let Count = $('<h4 class="txt-b">').text(data[0].cnt_project);
                $('#sumProjecT').empty()
                    .append(Count);
            },
            error() {
                $('#sumProjecT').html('Error');
            },
        });
    }
    //------------------------------------------show  Project Count in div Overall Progress  --------------------------
    function showProjectCountMange() {
        var url = API_URL + "Manage/showProjectcount";
        $.ajax({
            url: base_url("Dashboard/callApi?url=" + url),
            type: 'GET',
            data: {
                format: 'json'
            },
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                let Count = $('<h4 class="my-1 text-info txt-b">').text(data[0].cnt_project);
                $('#sumProjectMange').empty()
                    .append(Count);
            },
            error() {
                $('#sumProjectMange').html('Error');
            },
        });
    }
    //------------------------------------------Show Person Count ---------------------------------------------------
    function showPersonCount() {
        var url = API_URL + "Dashboard/showPersoncount";
        $.ajax({
            url: base_url("Dashboard/callApi?url=" + url),
            type: 'GET',
            data: {
                format: 'json'
            },
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                let Count = $('<h4 class="my-1 text-danger txt-b">').text(data[0].cnt_person);
                $('#sumPerson').empty()
                    .append(Count);
            },
            error() {
                $('#sumPerson').html('Error');
            },

        });
    }

    //------------------------------------------Show Time Count ---------------------------------------------------
    function showTimeCount() {
        var url = API_URL + "Manage/showTimecount_hour";
        $.ajax({
            url: base_url("Dashboard/callApi?url=" + url),
            type: 'GET',
            data: {
                format: 'json'
            },
            dataType: 'json',
            success: function(data) {
                let Count = $('<h4 class="my-1 text-success txt-b">').text(data[0].time_hour);
                $('#sumTimeManage').empty()
                    .append(Count);
            },
            error() {
                $('#sumTimeManage').html('Error');
            },

        });


        var url = API_URL + "Dashboard/showTimecount_hour";
        $.ajax({
            url: base_url("Dashboard/callApi?url=" + url),
            type: 'GET',
            data: {
                format: 'json'
            },
            dataType: 'json',
            success: function(data) {
                let Count = $('<h4 class="my-1 text-success txt-b">').text(data[0].time_hour);
                $('#sumTime').empty()
                    .append(Count);
            },
            error() {
                $('#sumTime').html('Error');
            },

        });
    }
    //-------------------------------------show Project Completed ---------------------------------------------------------------
    function showProjectCompleted() {
        var url = API_URL + "Dashboard/show_Projectstaall";
        $.ajax({
            url: base_url("Dashboard/callApi?url=" + url),
            type: 'GET',
            data: {
                format: 'json'
            },
            dataType: 'json',
            success: function(data) {
                let Count = $('<h4 class="my-1 text-success txt-b">').text(data[0].summary);
                $('#pjCompleted').empty()
                    .append(Count);
            },
            error() {
                $('#pjCompleted').html('Error');
            },

        });
    }
    //------------------------------------------Show Count Project in progress ---------------------------------------------------
    function showProjectinProgres() {
        var url = API_URL + "Dashboard/show_Projectstaall";
        $.ajax({
            url: base_url("Dashboard/callApi?url=" + url),
            type: 'GET',
            data: {
                format: 'json'
            },
            dataType: 'json',
            success: function(data) {
                let Count = $('<h4 class="my-1 text-warning txt-b">').text(data[1].summary);
                $('#pjinProgres').empty()
                    .append(Count);
            },
            error() {
                $('#pjinProgres').html('Error');
            },

        });
    }
    //---------------------------------------  show Project Delayed --------------------------------------------------------------
    function showProjectDelayed() {
        var url = API_URL + "Dashboard/show_Projectstaall";
        $.ajax({
            url: base_url("Dashboard/callApi?url=" + url),
            type: 'GET',
            data: {
                format: 'json'
            },
            dataType: 'json',
            success: function(data) {
                let Count = $('<h4 class="my-1 text-danger txt-b">').text(data[2].summary);
                $('#pjDelayed').empty()
                    .append(Count);
            },
            error() {
                $('#pjDelayed').html('Error');
            },

        });
    }

    //------------------------------------------Table Project Dashboard page ---------------------------------------------------
    function showProjectlist() {
        var url = API_URL + "Dashboard/showProjectList";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            dataType: 'Json',
            success: (response) => {
                console.log(response);
                if (response.entries.length > 0) {
                    //alert("length > 0");
                    var html = "";
                    for (let i = 0; i < response.entries.length; i++) {
                        const data = response.entries[i];
                        //alert(data.ip_project_name);
                        const show_status = data.ip_status_project;
                        const show_progress = data.percents;
                        if (show_status == 0) {
                            var status_rusult = '<span class="badge rounded-pill bg-success "><i class="bi bi-stars"></i> Completed</span>';
                        } else if (show_status == 1) {
                            var status_rusult = '<span class="badge rounded-pill bg-warning "><i class="bi bi-stars"></i> In &nbsp;progress</span>';
                        } else if (show_status == 2) {
                            var status_rusult = '<span class="badge rounded-pill bg-danger  blink"><i class="bi bi-stars"></i> Delayed</span>';
                        } else {
                            var status_rusult = '<span class="badge rounded-pill bg-primary "><i class="bi bi-stars"></i> Waiting</span>';
                        }
                        if (show_progress == 100) {
                            var status_color = 'green';
                        } else if (show_progress < 100 && show_status == 2) {
                            var status_color = 'red';
                        } else {
                            var status_color = 'orange';
                        }
                        html += `
                    <tr>
                        <td style="display:none;">${data.ip_id}</td>
                        <td class="text-center">${data.ip_project_name}</td>
                        <td class="text-center">${data.su_username}</td>
                        <td class="text-center">${data.due_date}</td>
                        <td class="text-center">${status_rusult}</td>
                        <td class="text-center"><div class="pie animate no-round " style="--p:${data.percents};--c:${status_color};--b:4px" >${data.percents}%</div></td>
                        <td class="text-center"><a class="btn text-center btnDetail" href="detail?id=${data.ip_id}" id="btnDetail" data-id="${data.ip_id}" "> <i class="bi bi-search"></i> </a> </td>
                    </tr>`;
                    }
                    $("#tbody")
                        .html(html)
                        .promise()
                        .done(() => {
                            $("#table-master").DataTable({
                                scrollX: true,
                            });
                        });
                }
            },
            error: (err) => {
                console.log(err);
            }
        });
    };


    //--------------------------------------test dropdown --------------------------------------------
    $('#selName').on('change', function() {
        var dropDown1 = document.getElementById("selPerson");
        dropDown1.selectedIndex = '';
        var dropDown2 = document.getElementById("selStatus");
        dropDown2.selectedIndex = '';
        $('#table-master').dataTable().fnDestroy()
        let getName = $(this).val();
        let getPerson = '';
        let getStatus = '';
        list_table(getName, getPerson, getStatus);
    });
    $('#selPerson').on('change', function() {
        var dropDown1 = document.getElementById("selName");
        dropDown1.selectedIndex = '';
        var dropDown2 = document.getElementById("selStatus");
        dropDown2.selectedIndex = '';
        $('#table-master').dataTable().fnDestroy()
        let getPerson = $(this).val();
        let getStatus = '';
        let getName = '';
        list_table(getName, getPerson, getStatus);
    });
    $('#selStatus').on('change', function() {
        var dropDown1 = document.getElementById("selName");
        dropDown1.selectedIndex = '';
        var dropDown2 = document.getElementById("selPerson");
        dropDown2.selectedIndex = '';
        $('#table-master').dataTable().fnDestroy()
        let getStatus = $(this).val();
        let getName = '';
        let getPerson = '';
        list_table(getName, getPerson, getStatus);
    });

    function list_table(getName, getPerson, getStatus) {

        // console.log(getName, getPerson, getStatus);
        var url = API_URL + "Dashboard/search_datatb?getName=" + getName + "&getPerson=" + getPerson + "&getStatus=" + getStatus;
        // var url = API_URL + "Dashboard/search_datatb";
        $.ajax({
            url: base_url('Dashboard/callApiDetail'),
            type: 'GET',
            dataType: 'Json',
            data: {
                url: url,
                getName: getName,
                getPerson: getPerson,
                getStatus: getStatus,
            },
            success: (response) => {
                if (response == null) {
                    var html = "";
                    $("#tbody")
                        .html(html)
                        .promise()
                        .done(() => {
                            $("#table-master").DataTable({
                                scrollX: true,
                            });
                        });

                } else {
                    if (response.entries.length > 0) {
                        var html = "";
                        for (let i = 0; i < response.entries.length; i++) {
                            const data = response.entries[i];
                            //alert(data.ip_project_name);
                            const show_status = data.ip_status_project;
                            const show_progress = data.percents;
                            if (show_status == 0) {
                                var status_rusult = '<span class="badge rounded-pill bg-success "><i class="bi bi-stars"></i> Completed</span>';
                            } else if (show_status == 1) {
                                var status_rusult = '<span class="badge rounded-pill bg-warning "><i class="bi bi-stars"></i> In &nbsp;progress</span>';
                            } else if (show_status == 2) {
                                var status_rusult = '<span class="badge rounded-pill bg-danger  blink"><i class="bi bi-stars"></i> Delayed</span>';
                            } else {
                                var status_rusult = '<span class="badge rounded-pill bg-primary "><i class="bi bi-stars"></i> Waiting</span>';
                            }
                            if (show_progress == 100) {
                                var status_color = 'green';
                            } else if (show_progress < 100 && show_status == 2) {
                                var status_color = 'red';
                            } else {
                                var status_color = 'orange';
                            }
                            html += `
                    <tr>
                        <td style="display:none;">${data.ip_id}</td>
                        <td class="text-center">${data.ip_project_name}</td>
                        <td class="text-center">${data.su_username}</td>
                        <td class="text-center">${data.due_date}</td>
                        <td class="text-center">${status_rusult}</td>
                        <td class="text-center"><div class="pie animate no-round " style="--p:${data.percents};--c:${status_color};--b:4px" >${data.percents}%</div></td>
                        <td class="text-center"><a class="btn text-center btnDetail" href="detail?id=${data.ip_id}" id="btnDetail" data-id="${data.ip_id}" "> <i class="bi bi-search"></i> </a> </td>
                    </tr>`;
                        }
                        $("#tbody")
                            .html(html)
                            .promise()
                            .done(() => {
                                $("#table-master").DataTable({
                                    scrollX: true,
                                });
                            });
                    }
                }
            },
            error: (err) => {
                // console.log(err);
            }
        });

    }

    //------------------------------------------Table Project Management page ---------------------------------------------------
    function showProjectlistManage() {
        var url = API_URL + "Manage/show_projectlist";
        // alert(url);
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            dataType: 'Json',
            success: (response) => {
                if (response.entries.length > 0) {
                    var html = "";
                    for (let i = 0; i < response.entries.length; i++) {
                        const data = response.entries[i];
                        const show_status = data.ip_status_project;
                        if (show_status == 0) {
                            var status_rusult = '<span class="badge rounded-pill bg-success "><i class="bi bi-stars"></i> Completed</span>';
                        } else if (show_status == 1) {
                            var status_rusult = '<span class="badge rounded-pill bg-warning "><i class="bi bi-stars"></i> In &nbsp;progress</span>';
                        } else if (show_status == 2) {
                            var status_rusult = '<span class="badge rounded-pill bg-danger  blink"><i class="bi bi-stars"></i> Delayed</span>';
                        } else {
                            var status_rusult = '<span class="badge rounded-pill bg-primary "><i class="bi bi-stars"></i> Waiting</span>';
                        }
                        let statusFlag = data.ip_status_flg == 1 ? 'checked' : ' '

                        html += `
                    <tr>
                        <td class="text-center">${i+1}</td>
                        <td class="text-center">${data.ip_project_name}</td>
                        <td class="text-center">${data.ip_project_step}</td>
                        <td class="text-center">${data.su_username}</td>
                        <td class="text-center">${data.star_date}</td>
                        <td class="text-center">${data.due_date}</td>
                        <td class="text-center">${status_rusult}</td>
                        <td class="text-center">
                        <form class="toggleForm text-center">
                          <div class="form-check form-switch">
                           <h5><input class="form-check-input customSwitch " type="checkbox" role="switch" data-id="${data.ip_id}" id="customSwitch_${data.ip_id} " ${statusFlag}></h5> 
                          </div>
                          </form>
                      </td>
                      <td class="text-center"><p class="btn text-center txt-b btnEdit" data-id="${data.ip_id}"  onclick="EditModal()" id="btnDetail"><i class="bi bi-pencil-square text-success fw-bolder"></i></p></td>
                      </tr>`;
                    }
                    $("#tbodY")
                        .html(html)
                        .promise()
                        .done(() => {
                            $("#tblManage").DataTable({
                                scrollX: true,

                            });

                        });
                }
            },
            error: (err) => {
                console.log(err);
            },

        });

    };
    //---------------------------fillter dropdown ------------------------------------------------------
    $('#selProject2').on('change', function() {
        var dropDown1 = document.getElementById("selPerson2");
        dropDown1.selectedIndex = '';
        var dropDown2 = document.getElementById("selStatusManage");
        dropDown2.selectedIndex = '';
        $('#tblManage').dataTable().fnDestroy()
        let getName = $(this).val();
        let getPerson = '';
        let getStatus = '';
        Manage_table(getName, getPerson, getStatus);
    });
    $('#selPerson2').on('change', function() {
        var dropDown1 = document.getElementById("selProject2");
        dropDown1.selectedIndex = '';
        var dropDown2 = document.getElementById("selStatusManage");
        dropDown2.selectedIndex = '';
        $('#tblManage').dataTable().fnDestroy()
        let getPerson = $(this).val();
        let getStatus = '';
        let getName = '';
        Manage_table(getName, getPerson, getStatus);
    });
    $('#selStatusManage').on('change', function() {
        var dropDown1 = document.getElementById("selProject2");
        dropDown1.selectedIndex = '';
        var dropDown2 = document.getElementById("selPerson2");
        dropDown2.selectedIndex = '';
        $('#tblManage').dataTable().fnDestroy()
        let getStatus = $(this).val();
        let getName = '';
        let getPerson = '';
        Manage_table(getName, getPerson, getStatus);
    });

    function Manage_table(getName, getPerson, getStatus) {

        // console.log(getName, getPerson, getStatus);
        var url = API_URL + "Manage/search_datatb?getName=" + getName + "&getPerson=" + getPerson + "&getStatus=" + getStatus;
        // var url = API_URL + "Dashboard/search_datatb";
        $.ajax({
            url: base_url('Dashboard/callApiDetail'),
            type: 'GET',
            dataType: 'Json',
            data: {
                url: url,
                getName: getName,
                getPerson: getPerson,
                getStatus: getStatus,
            },
            success: (response) => {
                if (response == null) {
                    var html = "";
                    $("#tbodY")
                        .html(html)
                        .promise()
                        .done(() => {
                            $("#tblManage").DataTable({
                                scrollX: true,
                            });
                        });
                } else {
                    if (response.entries.length > 0) {
                        var html = "";
                        for (let i = 0; i < response.entries.length; i++) {
                            const data = response.entries[i];
                            const show_status = data.ip_status_project;
                            if (show_status == 0) {
                                var status_rusult = '<span class="badge rounded-pill bg-success "><i class="bi bi-stars"></i> Completed</span>';
                            } else if (show_status == 1) {
                                var status_rusult = '<span class="badge rounded-pill bg-warning "><i class="bi bi-stars"></i> In &nbsp;progress</span>';
                            } else if (show_status == 2) {
                                var status_rusult = '<span class="badge rounded-pill bg-danger  blink"><i class="bi bi-stars"></i> Delayed</span>';
                            } else {
                                var status_rusult = '<span class="badge rounded-pill bg-primary "><i class="bi bi-stars"></i> Waiting</span>';
                            }
                            let statusFlag = data.ip_status_flg == 1 ? 'checked' : ' '

                            html += `
                    <tr>
                        <td class="text-center">${data.ip_id}</td>
                        <td class="text-center">${data.ip_project_name}</td>
                        <td class="text-center">${data.ip_project_step}</td>
                        <td class="text-center">${data.su_username}</td>
                        <td class="text-center">${data.star_date}</td>
                        <td class="text-center">${data.due_date}</td>
                        <td class="text-center">${status_rusult}</td>
                        <td class="text-center">
                        <form class="toggleForm text-center">
                          <div class="form-check form-switch">
                           <h5><input class="form-check-input customSwitch" type="checkbox" role="switch" data-id="${data.ip_id}" id="customSwitch_${data.ip_id} " ${statusFlag}></h5> 
                          </div>
                          </form>
                      </td>
                      <td class="text-center"><p class="btn  text-center txt-b btnEdit" data-id="${data.ip_id}"  onclick="EditModal()"><i class="bi bi-pencil-square text-success fw-bolder"></i></p></td>
                      </tr>`;
                        }
                        $("#tbodY")
                            .html(html)
                            .promise()
                            .done(() => {
                                $("#tblManage").DataTable({
                                    scrollX: true,

                                });

                            });
                    }
                }
            },
            error: (err) => {
                console.log(err);
            }
        });
    }

    //------------------------------------------ Taggle button switch ------------------------------------------------------

    function onToggle() {
        $('.toggleForm :checkbox').change(function() {
            let id = $(this).attr('data-id');
            if (this.checked) {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be chang Status",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, chang it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        var status = '1';
                        var url = API_URL + "Manage/update_flg?projectID=" + id + "&Status=" + status;
                        $.ajax({
                            type: "GET",
                            url: base_url("Dashboard/callApiUpdateStatus"),
                            data: {
                                url: url,
                                id: id,
                                status: status,
                            },
                            dataType: 'json',
                            success: function(res) {
                                if (res.result == true) {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Your work has been saved',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then(() => {
                                        location.reload()
                                    })
                                } else {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'error',
                                        title: 'Save chang error!',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                }
                            }
                        });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        ).then(() => {
                            location.reload()
                        })
                    }
                })
            } else {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be chang Status",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, chang it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        var status = '0';
                        var url = API_URL + "Manage/update_flg?projectID=" + id + "&Status=" + status;
                        console.log(url);
                        $.ajax({
                            type: "GET",
                            url: base_url("Dashboard/callApiUpdateStatus"),
                            data: {
                                url: url,
                                id: id,
                                status: status,
                            },
                            dataType: 'json',
                            success: function(res) {
                                if (res.result == true) {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Your work has been saved',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then(() => {
                                        location.reload()
                                    })
                                } else {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'error',
                                        title: 'Save chang error!',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                }
                            }
                        });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        ).then(() => {
                            location.reload()
                        })
                    }
                })
            }
        });
    }


    //------------------------------------------ Disable switch ------------------------------------------------------------
    $("#id_chk").change(() => {
        if ($("#id_chk").is(":checked")) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    console.log("checked");
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })

        } else {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    console.log("unchecked");
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        }
    });
    //------------------------------------------Deropdown Person in chart ---------------------------------------------------
    function showProjectDrop() {
        var url = API_URL + "Dashboard/show_Person";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                // console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    $('.selPerson').append(`<option class="text-uppercase" value =${value.su_id}>${value.su_username}</option>`)
                })

            },

        });
    };

    //------------------------------------------Deropdown Person in chart 3---------------------------------------------------
    function selPersontDrop3() {
        var url = API_URL + "Dashboard/show_Person";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                // console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    $('.selPerson3').append(`<option class="text-uppercase" value =${value.su_id}>${value.su_username}</option>`)
                })

            },

        });
    };

    function selPersontDrop4() {
        var url = API_URL + "Dashboard/show_Person";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                // console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    $('.selPersonCreate').append(`<option class="text-uppercase" value =${value.su_id}>${value.su_username}</option>`)
                })

            },

        });
    };
    //------------------------------------------Deropdown Position---------------------------------------------------
    function showPositionDrop() {
        var url = API_URL + "Dashboard/show_Prosition";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                // console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    $('.selPosition').append(`<option value =${value.mp_id}>${value.mp_name}</option>`)
                })

            },

        });
    };
    //------------------------------------------Deropdown Position 2---------------------------------------------------
    function showPositionDrop3() {
        var url = API_URL + "Dashboard/show_Prosition";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                // console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    $('.selPosition3').append(`<option value =${value.mp_id }>${value.mp_name}</option>`)
                })

            },

        });
    };

    //------------------------------------------Deropdown Peoject Name ---------------------------------------------------
    function showNameDrop() {
        var url = API_URL + "Dashboard/showProjectList";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                //console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    const projectName = value.ip_project_name;
                    $('#selName').append(`<option value =${value.ip_id}>${projectName}</option>`)
                })

            },

        });
    };

    //------------------------------------------Deropdown Peoject Name 2---------------------------------------------------
    function showNameDrop2() {
        var url = API_URL + "Manage/show_projectlist";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                //console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    const projectName = value.ip_project_name;
                    $('#selProject2').append(`<option value =${value.ip_id } ">${projectName }</option>`)
                })

            },

        });
    };

    //------------------------------------------Deropdown Status ---------------------------------------------------
    function showStatusDrop() {
        var url = API_URL + "Dashboard/show_Eachstatus";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                // console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    const status = value.ip_status_project;
                    if (status == 0) {
                        var show_status = 'Completes';
                    } else if (status == 1) {
                        var show_status = 'In progress';
                    } else if (status == 2) {
                        var show_status = 'Delayed';
                    } else {
                        var show_status = '';
                    }
                    $('#selStatus').append(`<option value =${ value.ip_status_project }>${show_status}</option>`)
                })

            },

        });
    };
    //------------------------------------------Deropdown Status 2---------------------------------------------------
    function showStatusDropManage() {
        var url = API_URL + "Dashboard/show_Eachstatus";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                // console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    const status = value.ip_status_project;
                    if (status == 0) {
                        var show_status = 'Completes';
                    } else if (status == 1) {
                        var show_status = 'In progress';
                    } else if (status == 2) {
                        var show_status = 'Delayed';
                    } else {
                        var show_status = 'waiting';
                    }
                    $('#selStatusManage').append(`<option value =${ value.ip_status_project }>${show_status}</option>`)
                })

            },

        });
    };
    //------------------------------------------Deropdown Person in chart 2---------------------------------------------------
    function selPersontDrop() {
        var url = API_URL + "Dashboard/show_Person";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                // console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    $('#selPerson2').append(`<option class="text-uppercase" value =${value.su_id}>${value.su_username}</option>`)
                })
            },

        });
    };

    function selLeader() {
        var url = API_URL + "Dashboard/show_Person";
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApi?url=" + url),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                // console.log(data.entries);
                $.each(data.entries, function(index, value) {
                    $('#selLeader').append(`<option class="text-uppercase" value =${value.su_id}>${value.su_username}</option>`)
                })
            },

        });
    };

})