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
    showPositionDrop3()
    showProjectlistManage()
    tblDetailStap()

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
                $('#sumProject')
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
                $('#sumProjecT')
                    .append(Count);
            },
            error() {
                $('#sumProjecT').html('Error');
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
                $('#sumPerson')
                    .append(Count);
            },
            error() {
                $('#sumPerson').html('Error');
            },

        });
    }

    //------------------------------------------Show Time Count ---------------------------------------------------
    function showTimeCount() {
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
                $('#sumTime')
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
                $('#pjCompleted')
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
                $('#pjinProgres')
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
                $('#pjDelayed')
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
                        } else {
                            var status_rusult = '<span class="badge rounded-pill bg-danger  blink"><i class="bi bi-stars"></i> Delayed</span>';
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
                        <td>${data.ip_project_name}</td>
                        <td>${data.ip_leader}</td>
                        <td>${data.due_date}</td>
                        <td>${status_rusult}</td>
                        <td><div class="pie animate no-round " style="--p:${data.percents};--c:${status_color};--b:4px" >${data.percents}%</div></td>
                        <td><p class="btn text-center btnDetail" id="btnDetail" data-id="${data.ip_id}" "> <i class="bi bi-search"></i> </p> </td>
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

    // <a href="http://127.0.0.1/DashboardProject/Dashboard/detail"></a>

    //------------------------------------------ Button get ID for Show Detail  ---------------------------------------------------
    $(document).on('click', '.btnDetail', function() {
        let id = $(this).attr('data-id');
        // alert(id);
        tblDetailStap(id)
        ChartPlane(id)
        chartDesign(id)
        chartDev(id)
        chartHalfOverall(id)
        chartTest(id)

    })

    //---------------------------------------------table stap detail page ----------------------------------------------------------
    function tblDetailStap(data) {
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
                if (response.entries.length > 0) {
                    var html = "";
                    for (let i = 0; i < response.entries.length; i++) {
                        const data = response.entries[i];
                        html += `
                    <tr>
                        <td>${data.ip_project_name}</td>
                        <td>${data.ms_name}</td>
                        <td>${data.ips_est_start_date}</td>
                        <td>${data.ips_est_end_date}</td>
                        <td>${data.ips_person_in_charge}</td>
                      </tr>`;
                    }
                    $("#tbodyStap")
                        .html(html)
                        .promise()
                        .done(() => {
                            $("#tblStap").DataTable({
                                scrollX: true,
                            });

                        });
                }
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
                        } else {
                            var status_rusult = '<span class="badge rounded-pill bg-danger  blink"><i class="bi bi-stars"></i> Delayed</span>';
                        }
                        let statusFlag = data.ip_status_flg == 1 ? 'checked' : ' '

                        html += `
                    <tr>
                        <td style="display:none;">${data.ip_id}</td>
                        <td>${data.ip_project_name}</td>
                        <td>${data.ip_project_step}</td>
                        <td>${data.ip_leader}</td>
                        <td>${data.star_date}</td>
                        <td>${data.due_date}</td>
                        <td>${status_rusult}</td>
                        <td class="text-center">
                        <center><form class="toggleForm">
                          <div class="form-check form-switch">
                           <h5><input class="form-check-input customSwitch" type="checkbox" role="switch" data-id="${data.ip_id}" id="customSwitch_${data.ip_id} " ${statusFlag}></h5> 
                          </div>
                          </form></center> 
                      </td>
                      <td><p class="btn btnDel text-center txt-b btnEdit" data-id="${data.ip_id}" onclick="EditModal()" id="btnDetail"><i class="bi bi-pencil-square text-success fw-bolder"></i></p></td>
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
    //------------------------------------------ Taggle button switch ------------------------------------------------------

    // function putStatus() {
    //   var url= API_URL+"Manage/show_projectlist";
    //   $.ajax({
    //       type: "GET",
    //       url: base_url("Dashboard/callApi?url="+url),
    //       dataType:'Json',
    //       // data: {toggle_select: true},
    //       success: function (response) {
    //         for (let i = 0; i < response.entries.length; i++) {
    //           const data = response.entries[i]; 
    //           if (data.ip_status_flg == 1) {
    //               $('#customSwitch').prop('checked', true);
    //               // statusText(1);
    //           } else {
    //               $('#customSwitch').prop('checked', false);
    //               // statusText(0);
    //           }
    //       }
    //     }
    //   });
    // }
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
    //   $(document).on('click','.toggleForm', function() {
    //     let id = $(this).attr('data-id');
    //     const swalWithBootstrapButtons = Swal.mixin({
    //       customClass: {
    //         confirmButton: 'btn btn-success',
    //         cancelButton: 'btn btn-danger'
    //       },
    //       buttonsStyling: false
    //     })
    //     swalWithBootstrapButtons.fire({
    //       title: 'Are you sure?',
    //       text: "You won't be chang Status",
    //       icon: 'warning',
    //       showCancelButton: true,
    //       confirmButtonText: 'Yes, chang it!',
    //       cancelButtonText: 'No, cancel!',
    //       reverseButtons: true
    //     }).then((result) => {
    //       if (result.isConfirmed) {
    //         Swal.fire({
    //           position: 'top-end',
    //           icon: 'success',
    //           title: 'Your work has been saved',
    //           showConfirmButton: false,
    //           timer: 1500,
    //         }).then(() => {
    //           // location.reload();
    //         })
    //         // console.log(id); 
    //         // var url= API_URL+"Manage/update_flg?projectID="+id + "&Status=";
    //         // console.log(url);
    //         // $.ajax({
    //         //     type: "GET",
    //         //     url: base_url("Dashboard/callApi"),
    //         //     data: {
    //         //       url:url,
    //         //       id:id,
    //         //     },
    //         //     success: function (result) {
    //         //         console.log(result);
    //         //     }
    //         // });
    //       } else if (
    //         /* Read more about handling dismissals below */
    //         result.dismiss === Swal.DismissReason.cancel
    //       ) {
    //         swalWithBootstrapButtons.fire(
    //           'Cancelled',
    //           'Your imaginary file is safe :)',
    //           'error'
    //         )
    //       }
    //     })
    // })



    //------------------------------------------ Button get ID for Edit  ---------------------------------------------------

    $(document).on('click', '.btnEdit', function() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "Do you want to Edit",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                let id = $(this).attr('data-id');
                console.log(id);
                $.ajax({
                    url: base_url('Dashboard/DelData'),
                    type: 'GET',
                    data: {
                        ProId: id,
                    },
                    dataType: 'json',
                    success: function(result) {

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
                )
            }
        })

    })

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
                    $('.selPerson').append(`<option value =${value.mey_id}>${value.mey_name}</option>`)
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
                    $('#selPerson2').append(`<option value =${value.mey_name}>${value.mey_name}</option>`)
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
                    $('.selPerson3').append(`<option value =${value.mey_id}>${value.mey_name}</option>`)
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
                    $('#selName').append(`<option value =${projectName }">${projectName}</option>`)
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
                    $('#selProject2').append(`<option value =${value.ip_id } ">"${projectName }</option>`)
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
                    } else {
                        var show_status = 'Delayed';
                    }
                    $('#selStatus').append(`<option value =${ value.ip_status_project }>${show_status}</option>`)
                })

            },

        });
    };
    //------------------------------------------ check test ---------------------------------------------------


    // $('#frmCheckBox').append(`<div class="container"><div class="row py-2">
    // <div class="row">
    // <input class="form-check-input chkMaster" type="checkbox" value="${value.ms_id}">
    // <div class="col-lg txt-b">
    // Stap : ${value.ms_id}
    // </div>
    // <div class="col-lg-10">
    // <label class"form-check-label txt-b fs-4 text-success">${value.ms_name}</label>
    // </div>
    // </div>
    // <div class="col-sm-3">
    // <input type="date"  class="form-control strDateAdd">
    // </div>
    // <div class="col-sm-3">
    // <input type="date"  class="form-control dueDateAdd">
    // </div>
    // <div class="col-sm-3">
    // <select class="form-select selPerson3">
    // <option value="">Assignee</option></select>
    // </div>
    // <div class="col-sm-3">
    // <select class="form-select selPosition3">
    // <option value="">Position</option></select>
    // </div></div>
    // </div>`)


    //------------------------------------------Test Fillter by Dropdown List ---------------------------------------------------

    //   $('#selName').on('change', function() {
    // 		$('#table-master').dataTable().fnDestroy()
    // 		let getName = $(this).val();
    // 		let getPerson = $('#selPerson').val();
    // 		let getStatus = $('#selStatusn').val();
    // 		list_table(getName, 0, 0, getPerson);
    // 	});


    // 	function list_table(str_date, start, end, str_dep) {
    // 		var url = API_URL + "Dashboard/showProjectList";
    // 		var historyTable = $('#table-master').DataTable({
    // 			ajax: {
    // 				type: 'POST',
    // 				url: base_url("Dashboard/callApi?url=" + url),
    // 				data: {
    // 					project_name:ip_project_name,
    // 					person_in_charge: ip_person_in_charge,
    // 					due_date:due_date,
    // 					status_project:ip_status_project
    // 				}
    // 			},
    // 			columnDefs: [{
    // 				searchable: true,
    // 				orderable: false,
    // 				targets: 0,
    // 			}, ],
    // 			bSort: false,
    // 			order: [
    // 				[1, 'asc']
    // 			],
    // 			columns: [{
    // 					className: 'text-center',
    // 					data: 'ip_project_name'
    // 				},
    // 				{
    // 					className: 'text-center',
    // 					data: 'ip_person_in_charge'
    // 				},
    // 				{
    // 					className: 'text-center',
    // 					data: 'due_date'
    // 				},
    // 				{
    // 					className: 'text-center',
    // 					data: 'ip_status_project'
    // 				},
    // 			]
    // 		});
    // 		historyTable.on('order.dt search.dt', function() {
    // 			let i = 1;
    // 			historyTable.cells(null, 0, {
    // 				search: 'applied',
    // 				order: 'applied'
    // 			}).every(function(cell) {
    // 				this.data(i++);
    // 			});
    // 		}).draw();
    // 	}
    // })

    //----------------------------------------------------test datatable-------------------------------------------------
    // let tableAjax3 = $('#tblPHM').DataTable({
    //   ajax: {
    //       url: base_url('Dashboard/ReportPHM'),
    //       dataSrc: '',
    //   },
    //   columns: [{
    //           data: 'pds_code',
    //       },
    //       {
    //           data: 'pds_name',
    //       },
    //       {
    //           data: 'pds_price',
    //       },
    //       {
    //           data: 'pds_qty',
    //       }, {
    //           data: null,
    //           render: function(row) {
    //               return `<button class="btn btn-success btnEdit" type="button" data-id="${row.pds_code}"><i class="bi bi-pencil-square"></i></button>`;
    //           }
    //       },
    //       {
    //           data: null,
    //           render: function(row) {
    //               return `<button class="btn btn-danger btnDel" type="button" data-id="${row.pds_code}"><i class="bi bi-trash3-fill"></i></button>`;
    //           }
    //       }

    //   ],
    // })


})


ChartPlane()
chartDesign()
chartDev()
chartHalfOverall()
chartTest()



function ChartPlane() {
    var options = {
        series: [100],
        chart: {
            height: 250,
            type: 'radialBar',
            toolbar: {
                show: true
            }
        },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 225,
                hollow: {
                    margin: 0,
                    size: '70%',
                    background: '#fff',
                    image: undefined,
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: 'front',
                    dropShadow: {
                        enabled: true,
                        top: 5,
                        left: 0,
                        blur: 4,
                        opacity: 0.24
                    }
                },
                track: {
                    background: '#fff',
                    strokeWidth: '67%',
                    margin: 0, // margin is in pixels
                    dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                    }
                },

                dataLabels: {
                    show: true,
                    name: {
                        offsetY: -20,
                        show: true,
                        color: '#888',
                        fontSize: '20px'
                    },
                    value: {
                        formatter: function(val) {
                            return parseInt(val);
                        },
                        color: '#111',
                        fontSize: '60px',
                        show: true,
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: 'horizontal',
                shadeIntensity: 0.5,
                gradientToColors: ['#ABE5A1'],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100]
            }
        },
        stroke: {
            lineCap: 'round'
        },
        labels: ['Percent'],
    };

    var chart = new ApexCharts(document.querySelector("#chartPlane"), options);
    chart.render();
}


function chartDesign(data) {
    var options = {
        series: [40],
        chart: {
            height: 250,
            type: 'radialBar',
            toolbar: {
                show: true
            }
        },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 225,
                hollow: {
                    margin: 0,
                    size: '70%',
                    background: '#fff',
                    image: undefined,
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: 'front',
                    dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.24
                    }
                },
                track: {
                    background: '#fff',
                    strokeWidth: '67%',
                    margin: 0, // margin is in pixels
                    dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                    }
                },

                dataLabels: {
                    show: true,
                    name: {
                        offsetY: -20,
                        show: true,
                        color: '#888',
                        fontSize: '20px'
                    },
                    value: {
                        formatter: function(val) {
                            return parseInt(val);
                        },
                        color: '#111',
                        fontSize: '60px',
                        show: true,
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: 'horizontal',
                shadeIntensity: 0.5,
                gradientToColors: ['#ABE5A1'],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100]
            }
        },
        stroke: {
            lineCap: 'round'
        },
        labels: ['Percent'],
    };

    var chart = new ApexCharts(document.querySelector("#chartDesign"), options);
    chart.render();
}


function chartDev() {
    var options = {
        series: [75],
        chart: {
            height: 250,
            type: 'radialBar',
            toolbar: {
                show: true
            }
        },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 225,
                hollow: {
                    margin: 0,
                    size: '70%',
                    background: '#fff',
                    image: undefined,
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: 'front',
                    dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.24
                    }
                },
                track: {
                    background: '#fff',
                    strokeWidth: '67%',
                    margin: 0, // margin is in pixels
                    dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                    }
                },

                dataLabels: {
                    show: true,
                    name: {
                        offsetY: -20,
                        show: true,
                        color: '#888',
                        fontSize: '20px'
                    },
                    value: {
                        formatter: function(val) {
                            return parseInt(val);
                        },
                        color: '#111',
                        fontSize: '60px',
                        show: true,
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: 'horizontal',
                shadeIntensity: 0.5,
                gradientToColors: ['#ABE5A1'],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100]
            }
        },
        stroke: {
            lineCap: 'round'
        },
        labels: ['Percent'],
    };

    var chart = new ApexCharts(document.querySelector("#chartDev"), options);
    chart.render();
}


function chartHalfOverall() {

    var options = {
        series: [67],
        chart: {
            height: 350,
            type: 'radialBar',
            offsetY: -10
        },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 135,
                dataLabels: {
                    name: {
                        fontSize: '16px',
                        color: undefined,
                        offsetY: 120
                    },
                    value: {
                        offsetY: 76,
                        fontSize: '22px',
                        color: undefined,
                        formatter: function(val) {
                            return val + "%";
                        }
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                shadeIntensity: 0.15,
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 50, 65, 91]
            },
        },
        stroke: {
            dashArray: 4
        },
        labels: ['Overall Progress'],
    };



    var chart = new ApexCharts(document.querySelector("#chartHalfOverall"), options);
    chart.render();

}

function chartTest() {
    var options = {
        series: [70],
        chart: {
            height: 180,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '50%',
                }
            },
        },
        labels: ['Testing'],
    };


    var chart = new ApexCharts(document.querySelector("#chartTest"), options);
    chart.render();
}


// arr
// {
//   array[i].push({
//     "name": val,
//     "position": val
//   })
// }

// [
//   {
//     "name": pee,
//     "position": 1,2,3,4
//   },{
//     "name": sia,
//     "position": 1,2
//   }
// ]