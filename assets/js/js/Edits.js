// setInterval(() => {
//     showDataEdit()
//     showPerson()
//     editStep()
// }, 1000);
$(() => {

    {
        var oldProjectName = []
        var dataStep = []
        var dataUse = []
    }

    $(document).on('click', '.btnEdit', function() {
        let id = $(this).attr('data-id');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "Do you want to Edit Project",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, Edit it!',
            cancelButtonText: ' No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                showDataEdit(id)
                showPerson(id)
                editStep(id)
                saveAddPersonEdit(id)
                saveEdit(id)
                    // savePersonEdit(id)

                $('html,body').animate({
                        scrollTop: $(".editDiv").offset().top
                    },
                    'slow');
                // dataStepChecked(id)
                // DelPersonEdit(id)
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your Edits Project :)',
                    'error'
                ).then(() => {
                    location.reload()
                })
            }
        })

    })



    // var url = API_URL + "Dashboard/show_Person";
    // $.ajax({
    //     method: "get",
    //     url: base_url("Dashboard/callApi?url=" + url),
    //     data: {
    //         format: 'json'
    //     },
    //     dataType: 'Json',
    //     success: function(data) {
    //         DropPersonAll = data.entries
    //     },
    // });

    var url = API_URL + "Addproject/show_Mststep";
    $.ajax({
        method: "get",
        url: base_url("Dashboard/callApi?url=" + url),
        data: {
            format: 'json'
        },
        dataType: 'Json',
        success: function(data) {
            dataStep = data.entries
        },
    });


    //----------------------------------------- NAME AND LRADER ------------------------------------------------------------------------------

    function showDataEdit(data) {
        var url = API_URL + "Editproject/show_edit_project?id_pj=" + data;
        $.ajax({
            url: base_url('Dashboard/callApi'),
            type: 'GET',
            dataType: 'Json',
            data: {
                url: url,
                ProId: data,
            },
            success: (response) => {
                // console.log(response);
                oldProjectName = response.entries
                if (response.entries.length > 0) {
                    var html = "";
                    for (let i = 0; i < response.entries.length; i++) {
                        const data = response.entries[i];
                        const show_status = data.status;
                        if (show_status == 0) {
                            var status_rusult = '<span class="txt-b"><i class="bi bi-circle-fill blink text-success"></i>&nbsp;Completed</span>';
                        } else if (show_status == 1) {
                            var status_rusult = '<span class="txt-b"><i class="bi bi-circle-fill blink text-warning"></i>&nbsp;In&nbsp;progress</span>';
                        } else if (show_status == 2) {
                            var status_rusult = '<span class="txt-b"><i class="bi bi-circle-fill blink text-danger"></i>&nbsp;Delayed</span>';
                        } else {
                            var status_rusult = '<span class="txt-b"><i class="bi bi-circle-fill blink text-primary"></i>&nbsp;Waiting</span>';
                        }

                        document.getElementById("ProjectName").innerHTML = data.ip_project_name;
                        document.getElementById("ProjectStatus").innerHTML = status_rusult;
                        $('#inpProjectNameEdit').empty().append(`<input type="taxt" id="edtProjetcName" class="form-control" value="${data.ip_project_name}">`)
                            // $.each(data.entries, function(index, data) {
                            // $('#selLeaderEdit').empty().append(`<option value="${data.leader_id}" selected >${data.leader}</option>`)
                        var text = data.leader_id
                            // alert(text)
                            // var textLeader = data.leader

                        // })
                    }
                }

                var url = API_URL + "Dashboard/show_Person";
                $.ajax({
                    method: "get",
                    url: base_url("Dashboard/callApi?url=" + url),
                    data: {
                        format: 'json'
                    },
                    dataType: 'Json',
                    success: function(data) {
                        DropPersonAll = data.entries
                        for (let i = 0; i < DropPersonAll.length; i++) {
                            const data = DropPersonAll[i];
                            // console.log(data);
                            $('#selLeaderEdit').append(`<option value =${data.su_id} >${data.su_username}</option>`)
                        }
                        $('#selLeaderEdit:last').val(text).trigger("change")
                    },
                });

            }
        });


    }

    //---------------------------------------------- PERSON IN CHARGE -------------------------------------------------------------------------------
    {
        var oldPerson = []
        var id_pj
    }

    function showPerson(data) {
        id_pj = data;
        var url = API_URL + "Editproject/show_edit_person?id_pj=" + id_pj;
        $.ajax({
            url: base_url('Dashboard/callApiShowPersonEdit2'),
            type: 'GET',
            dataType: 'Json',
            data: {
                url: url,
                ProId: data,
            },
            success: (response) => {
                // console.log(response);
                if (response.entries.length > 0) {
                    var dataPosition = response.position;
                    var DropPerson = response.person;
                    for (let i = 0; i < response.entries.length; i++) {
                        dataUse = response.entries[i];
                        // console.log(dataUse.positions);
                        $(".stepEdit").append(`
                            <div class="newEditRow"> 
                                <div class="row formEditAssigneeShow ">               
                                    <div class="col-lg-2">
                                        <span class="txt-b">Person in Charge</span> 
                                    </div>
                                    <div class="col-lg-2 py-2" id="selPersonEdit"> 
                                        <select class="form-select selPersonEdit" disabled>
                                         
                                        </select>
                                    </div>
                                    <div class="col-lg-1"> 
                                        <span class="txt-b">Position</span>
                                    </div> 
                                    <div class="col-lg-5" id="selPositionEdit">
                                        <select class="form-select selPositionEdit multiple-select-field"  name="multiple-select-field" data-placeholder="Choose anything" multiple>
                                        
                                        </select>
                                    </div>
                                    <div class="col-lg-1">
                                        <button class="remove_field btn btn-danger"  data-id="${id_pj}" "><i class="bi bi-trash"></i> </button>
                                    </div>
                                    <div class="col-lg-1">
                                        <button class="btn btn-success savePersonEdit" id="savePersonEdit" data-id="${dataUse.positions}"><i class="bi bi-cloud-arrow-up"></i> 
                                        </button>
                                    </div>
                                    </div>
                             </div>`)
                        var textSu = dataUse.su_id
                        var text = dataUse.positions
                        for (let i = 0; i < DropPerson.length; i++) {
                            const data = DropPerson[i];
                            // console.log(data);
                            // console.log(DropPosition);
                            $('.selPersonEdit:last').append(`<option value =${data.su_id} >${data.su_username}</option>`)
                            $('.selPersonEdit:last').val(textSu).trigger("change")
                        }
                        for (let i = 0; i < dataPosition.length; i++) {
                            const data = dataPosition[i];
                            // console.log(data);
                            $('.selPositionEdit:last').append(`<option value =${data.mp_id}>${data.mp_name}</option>`)
                            $('.selPositionEdit:last').select2({
                                theme: "bootstrap-5",
                                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                                placeholder: $(this).data('placeholder'),
                                closeOnSelect: true,
                            });
                        }
                        $('.selPositionEdit:last').val(text.split(",")).trigger("change")
                    }


                }
            }
        });
    }


    //------------------------------- REMOVE  ADD PERSON EDIT -------------------------------------------------------
    $(document).on("click", ".remove_field_add", function(e) {
        //user click on remove text links
        e.preventDefault();

        // remove data fuction
        $(this).closest(".newEditRow").remove();
        x--;
    })



    $(document).on("click", ".remove_field", function(e) {
        //user click on remove text links
        e.preventDefault();
        // $(this).closest(".newEditRow").remove();
        // x--;
        // remove data fuction
        // delete in database

        let id_pj = $(this).attr('data-id');
        let su_id = $(this).closest('.newEditRow').find('.selPersonEdit').val()
        $(this).closest(".newEditRow").remove();
        // let su_id = $('.selPersonEdit').val()
        // console.log(su_id);
        // console.log(id_pj); 
        // console.log(su_id);
        var url = API_URL + "Editproject/del_person";
        $.ajax({
            url: base_url("Dashboard/callApiDel"),
            type: "POST",
            data: {
                id_pj: id_pj,
                su_id: su_id,
            },
            // dataType: 'json',
            success: function(res) {
                // console.log(res);
                if (res == 1) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Remove Person In Charge success!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Remove do not successfull!',
                        html: res.message,
                    })
                }
            }
        });

        // };
    });


    //------------------------------- STEP -----------------------------------------------------
    {
        var StepChecked = []
        var oldStep = []

    }

    function editStep(data) {
        let id_pj = data;
        var urlStep = API_URL + "Editproject/show_edit_step?id_pj=" + id_pj;
        $.ajax({
            method: "get",
            url: base_url("Dashboard/callApiStepEdit?url=" + urlStep),
            data: {
                format: 'json'
            },
            dataType: 'Json',
            success: function(data) {
                StepChecked = data.entries
                var StepDrop = data.ps_dropdown
                var StepPosition = data.pst_dropdown
                var dataCheckId = []
                var dataMasterId = []
                if (data.mst_step.length > 0) {
                    for (let i = 0; i < data.mst_step.length; i++) {
                        var dataMs = data.mst_step[i];
                        dataMasterId = dataMs.ms_id
                            // let statusFlag = dataCheckId == dataMasterId ? 'checked' : ' '
                        $('#frmCheckBoxEdit').append(`
                            <div class="container rowStepEdit">
                                <div class="row py-1" ">
                                    <div class="col-md-1 txt-b" id="chkMasterEdit">
                                        <h2><input class="form-check-input chkMasterEdit" type="checkbox" value="${dataMs.ms_id}"></h2>STEP: ${i+1}
                                    </div>
                                    <div class="col-md-2 text-start txt-b text-nowrap bg-body-secondary" id="nameStep">
                                    <i class="bi bi-fire text-danger"></i>&nbsp;${dataMs.ms_name}
                                    </div>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control inpStrDateEdit " id="inpStrDateEdit"  >
                                    </div>
                                    <div class="col-md-2 text-success">
                                        <input type="date"  class="form-control inpDueDateEdit" id="inpDueDateEdit" >
                                    </div>
                                    <div class="col-md">
                                        <select class="form-select SelStepPersonChecked">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-select SelStepPositionChecked" >
                                            <option value=" "></option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="text"  class="form-control text-success txt-b inpPercentEdit" id="inpPercentEdit" placeholder="%" min="1" max="100">
                                    </div>
                                </div>
                            </div>`)
                        var star_date = []
                        var due_date = []
                        var valDrop = []
                        var percents = []
                        var perSonId = []
                        var step_id = []
                        var lep_id = []
                        for (let i = 0; i < StepDrop.length; i++) {
                            const data = StepDrop[i];
                            valDrop = data.lep_id
                                // console.log(DropPosition);
                            $('.SelStepPersonChecked:last').append(`<option value =${data.person_id} >${data.person_name}</option>`)
                        }
                        for (let i = 0; i < StepChecked.length; i++) {
                            var dataUse = StepChecked[i];
                            dataCheckId = dataUse.step_id
                            star_date = dataUse.star_date
                            due_date = dataUse.due_date
                            valDrop = dataUse.positions
                            percents = dataUse.percents
                            perSonId = dataUse.person_id
                            positionId = dataUse.position_id
                            step_id = dataUse.step_id
                            lep_id = dataUse.lep_id
                            if (dataCheckId == dataMasterId) {
                                // console.log(dataCheckId + '==' + dataMasterId);
                                $(".chkMasterEdit:last").attr("checked", true);
                                $('.inpStrDateEdit:last').val(star_date).trigger("change")
                                $('.inpDueDateEdit:last').val(due_date).trigger("change")
                                $('.inpPercentEdit:last').val(percents).trigger("change")
                                $('.SelStepPersonChecked:last').val(perSonId).trigger("change")
                                $('.SelStepPositionChecked:last').append(`<option value =${dataUse.lep_id} selected>${dataUse.position_name}</option>`)
                            } else {

                            }
                        }

                        $('.SelStepPersonChecked').on('change', function() {
                            let getPerson_id = $(this).val();
                            $(this).closest('.rowStepEdit').find('.SelStepPositionChecked option').remove();
                            for (let i = 0; i < StepPosition.length; i++) {
                                const data = StepPosition[i];
                                if (getPerson_id == data.person_id) {
                                    // console.log(getPerson_id + '==' + data.person_id);
                                    $(this).closest('.rowStepEdit').find('.SelStepPositionChecked').append(`<option value =${data.lep_id} >${data.position_name}</option>`)
                                }
                            }
                        });

                    }

                }
            },

        });
    }

    //--------------------------------------- SAVE EDITS --------------------------------------------------------------------------------
    function saveEdit(data) {
        $(document).on('click', '.saveEdit', function() {
            var arrayProjectEdit = []
            var arrayOldStep = []
            var arrayNewStep = []
            var arrayStepEdit = []
            var arrayStepEditAll = []
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "Do you want to Save Edit Project",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, save it!',
                cancelButtonText: ' No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#formEditProject').each(function() {
                        if ('#inpProjectNameEdit' != '' && '#selLeaderEdit' != '') {
                            var projectname = $('#edtProjetcName').val();
                            var assignee = $('#selLeaderEdit').val();
                            arrayProjectEdit.push({
                                projectname: projectname,
                                projectLeader: assignee,
                            })
                        }
                    });
                    $('.chkMasterEdit').each(function() {
                        if ($(this).is(":checked")) {
                            let chkBox = $(this).val()
                            let strDate = $(this).closest('.rowStepEdit').find(".inpStrDateEdit ").val()
                            let dueDate = $(this).closest('.rowStepEdit').find(".inpDueDateEdit").val()
                            let person = $(this).closest('.rowStepEdit').find(".SelStepPersonChecked").val()
                            let position = $(this).closest('.rowStepEdit').find(".SelStepPositionChecked").val()
                            let percent = $(this).closest('.rowStepEdit').find(".inpPercentEdit").val()
                            arrayStepEdit.push({
                                Step_id: chkBox,
                                strDate: strDate,
                                dueDate: dueDate,
                                // person: person,
                                lep_id: position,
                                percent: percent,
                            })
                            for (let i = 0; i < chkBox.length; i++) {

                                arrayNewStep.push({
                                    chkBox,
                                })
                            }


                        }
                    })
                    for (let i = 0; i < StepChecked.length; i++) {
                        const data = StepChecked[i];
                        oldStep = data.step_id
                        arrayOldStep.push({
                            oldStep,
                        })

                    }


                    var oldStep_id = arrayOldStep.map(function(obj) {
                        return parseInt(obj.oldStep);
                    });
                    var newStep_id = arrayNewStep.map(function(item) {
                        return parseInt(item.chkBox);
                    });

                    function findChanges(oldArray, newArray) {
                        const addedValues = newArray.filter(item => !oldArray.includes(item));
                        const deletedValues = oldArray.filter(item => !newArray.includes(item));
                        return {
                            added: addedValues,
                            deleted: deletedValues,
                        };

                    }

                    // Example usage
                    const oldArray = oldStep_id;
                    const newArray = newStep_id;
                    const changes = findChanges(oldArray, newArray);
                    // console.log('Added values:', changes.added); // [4, 5]
                    // console.log('Deleted values:', changes.deleted); // [1, 3]

                    arrayStepEditAll.push({
                        id_pj: data,
                        Added: changes.added,
                        Deleted: changes.deleted,
                        arrayStepEdit: arrayStepEdit,
                    })
                    console.log(arrayStepEditAll);
                    var url = API_URL + "Editproject/update_project";
                    $.ajax({
                        url: base_url("Dashboard/callApiUpdateProject"),
                        type: "POST",
                        data: {
                            arrayProjectEdit: arrayProjectEdit,
                            arrayStepEditAll: arrayStepEditAll
                        },
                        // dataType: 'json',
                        success: function(res) {
                            console.log(res);
                            if (res == 1) {
                                Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Edits Project Success',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                    .then(() => {
                                        $('#myDiv').load(' #myDiv')
                                    })
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Edits Project do not success!',
                                    html: 'Plse Check your Information',
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
                        'You Edits Project)',
                        'error'
                    ).then(() => {
                        location.reload()
                    })
                }
            })

        })
    }




    //--------------------------------- SAVE ADD PERSON EDIT --------------------------------------------------------
    function saveAddPersonEdit(data) {
        $(document).on("click", "#saveAddPersonEdit", function(e) {
            //user click on save_add will add to database
            e.preventDefault();
            let arrayPersonAdd = [];
            $('.formEditAssignee').each(function() {
                if ('.selPersonAddEdit' != '' && '.selPositionAddEdit' != '') {
                    let personName = $(this).closest('div').find('.selPersonAddEdit').val()
                    let personPosition = $(this).closest('div').find('.selPositionAddEdit').val()
                    arrayPersonAdd.push({
                        personName: personName,
                        personPosition: personPosition,
                    })

                }
            })
            console.log(arrayPersonAdd);
            var url = API_URL + "Editproject/add_person";
            $.ajax({
                url: base_url("Dashboard/callApiInsertPersonAdd"),
                type: "POST",
                data: {
                    url: url,
                    ProId: data,
                    arrayPersonAdd: arrayPersonAdd,
                },
                // dataType: 'json',
                success: function(res) {
                    console.log(res);
                    if (res == 1) {
                        Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Person In Charge add success!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            .then(() => {
                                $('#myDiv').load(' #myDiv')
                            })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Person In Charge add do not success!',
                            // html: 'Plse Enter Information',
                        })
                    }
                }
            });

        });
    }

    //--------------------------------- SAVE PERSON EDIT --------------------------------------------------------
    $(document).on("click", ".savePersonEdit", function(e) {
        e.preventDefault();
        var old = []
        var arrAdd = []
        var arrDelete = []
        old = $(this).attr('data-id');
        let arrayPersonEdit = [];
        let personName = $(this).closest('.newEditRow').find('.selPersonEdit').val()
        let personPosition = $(this).closest('.newEditRow').find('.selPositionEdit').val()

        function findChanges(oldArray, newArray) {
            const addedValues = newArray.filter(item => !oldArray.includes(item));
            const deletedValues = oldArray.filter(item => !newArray.includes(item));

            return {
                added: addedValues,
                deleted: deletedValues,
            };

        }

        // Example usage

        var newPosition = personPosition.map(function(element) {
            return parseInt(element);
        });
        var oldPosition = old.split(",").map(function(element) {
            return parseInt(element);
        });

        // console.log(newPosition);
        // console.log(oldArr);
        const oldArray = oldPosition;
        const newArray = newPosition;
        const changes = findChanges(oldArray, newArray);
        // console.log('Added values:', changes.added); // [4, 5]
        // console.log('Deleted values:', changes.deleted); // [1, 3]
        arrAdd.push({
            Added: changes.added,

            id_pj: id_pj,
            personName: personName,
        })
        arrDelete.push({
            Deleted: changes.deleted,
            id_pj: id_pj,
            personName: personName,
        })
        arrayPersonEdit.push({
            arrAdd: arrAdd,
            arrDelete: arrDelete,
        })
        var url = API_URL + "Editproject/edit_position";
        $.ajax({
            url: base_url("Dashboard/callApiEditPosition"),
            type: "POST",
            data: {
                //lep_id: lep_id,
                arrayPersonEdit: arrayPersonEdit,
            },
            // dataType: 'json',
            success: function(res) {
                console.log(res);
                if (res.result == 1) {
                    Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Position has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        .then(() => {

                        })
                } else if (res.result == 2) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Success',
                        html: 'Insert success and Delete unsuccess',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else if (res.result == 3) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Success',
                        html: ' Insert unsuccessful and Delete success',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else if (res.result == 4) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'warning',
                        title: 'Error !',
                        html: 'Insert and Delete no data',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else if (res.result == 5) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Success !',
                        html: ' Delete success and Insert no data',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else if (res.result == 6) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'warning',
                        title: 'Error !',
                        html: 'Delete unsuccessful and Insert no data',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else if (res.result == 7) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Success',
                        html: 'Insert success and Delete no data',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else if (res.result == 8) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'warning',
                        title: 'Error !',
                        html: 'Insert unsuccessful and Delete no data',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error !',
                        html: 'Insert and Delete unsuccessful',
                    })
                }
            }
        });

        // };
    });

    // function savePersonEdit(data) {
    //     $(document).on("click", ".savePersonEdit", function(e) {
    //         //user click on save_add will add to database
    //         e.preventDefault();
    //         let lep_id = $(this).closest('.newEditRow').find('data-id').val()
    //         let arrayPersonEdit = [];
    //         $('.formEditAssigneeShow').each(function() {
    //             if ('.selPersonEdit' != '' && '.selPositionEdit' != '') {
    //                 let personName = $(this).closest('.newEditRow').find('.selPersonEdit').val()
    //                 let personPosition = $(this).closest('.newEditRow').find('.selPositionEdit').val()
    //                 arrayPersonEdit.push({
    //                     personName: personName,
    //                     personPosition: personPosition,
    //                 })

    //             }
    //         })
    //         console.log(arrayPersonEdit);
    //         var url = API_URL + "Editproject/add_person";
    //         $.ajax({
    //             url: base_url("Dashboard/callApiInsertPersonAdd"),
    //             type: "POST",
    //             data: {
    //                 lep_id: lep_id,
    //                 ProId: data,
    //                 arrayPersonEdit: arrayPersonEdit,
    //             },
    //             // dataType: 'json',
    //             success: function(res) {
    //                 // console.log(res);
    //                 if (res == 1) {
    //                     Swal.fire({
    //                             position: 'top-end',
    //                             icon: 'success',
    //                             title: 'Your work has been saved',
    //                             showConfirmButton: false,
    //                             timer: 1500
    //                         })
    //                         .then(() => {
    //                             // $('#myDiv').reload()
    //                         })
    //                 } else {
    //                     Swal.fire({
    //                         icon: 'error',
    //                         title: 'Save do not successfull!',
    //                         
    //                     })
    //                 }
    //             }
    //         });


    //         var NewPosition = []
    //         for (let i = 0; i < arrayPersonEdit.length; i++) {
    //             const data = arrayPersonEdit[i];
    //             NewPosition = data.personPosition

    //         }


    //         function findChanges(oldArray, newArray) {
    //             const addedValues = newArray.filter(item => !oldArray.includes(item));
    //             const deletedValues = oldArray.filter(item => !newArray.includes(item));

    //             return {
    //                 added: addedValues,
    //                 deleted: deletedValues
    //             };
    //         }

    //         // Example usage
    //         const oldArray = [1, 2, 3];
    //         console.log(NewPosition);
    //         const newArray = NewPosition;

    //         const changes = findChanges(oldArray, newArray);
    //         console.log('Added values:', changes.added); // [4, 5]
    //         console.log('Deleted values:', changes.deleted); // [1, 3]


    //     });
    // }

    //-------------------------------- BUTTON ADD PERSON EDITS ---------------------------------------------------------

    var max_fields_limit = 2; //set limit for maximum input fields
    var x = 1; //initialize counter for text box
    $(".add_more_button_Edit").click(function(e) {
        //click event on add more fields button having class add_more_button
        e.preventDefault();
        if (x < max_fields_limit) {
            //check conditions
            x++; //counter increment
            $(".formEditAssignee").append(
                `<div class="newEditRow"> 
            <div class="row formAssignee">
                <div class="col-lg-2">
                    <span class="txt-b">Person&nbsp;In&nbsp;Charge&nbsp;<span class="badge bg-danger">New</span></span> 
                </div>
                 <div class="col-lg-2"> 
                    <select class="form-select selPersonAddEdit">
                    <option value="">choose anything</option>
                    </select>
                </div>
                <div class="col-lg-1"> 
                    <span class="txt-b">Position</span>
                </div> 
                <div class="col-lg-5">
                    <select class="form-select selPositionAddEdit multiple-select-field"  name="multiple-select-field" data-placeholder="Choose anything" multiple>
                    </select> 
                </div>
                <div class="col-lg-1">
                    <button class="remove_field_add btn btn-danger" ><i class="bi bi-trash"></i> </button>
                </div>
                <div class="col-lg-1">
                <button class="btn btn-success" id="saveAddPersonEdit"><i class="bi bi-person-add"></i> </button>
            </div>
            </div>`
            );

            var urlPerson = API_URL + "Dashboard/show_Person";
            $.ajax({
                method: "get",
                url: base_url("Dashboard/callApi?url=" + urlPerson),
                data: {
                    format: 'json'
                },
                dataType: 'Json',
                success: function(data) {
                    // console.log(data.entries);
                    $.each(data.entries, function(index, value) {
                        $('.selPersonAddEdit').append(`<option value =${value.su_id}>${value.su_username}</option>`)
                    })
                },

            });

            var urlPosition = API_URL + "Dashboard/show_Prosition";
            $.ajax({
                method: "get",
                url: base_url("Dashboard/callApi?url=" + urlPosition),
                data: {
                    format: 'json'
                },
                dataType: 'Json',
                success: function(data) {
                    // console.log(data.entries);
                    $.each(data.entries, function(index, value) {
                        $('.selPositionAddEdit').append(`<option value =${value.mp_id}>${value.mp_name}</option>`)
                    })
                    $('.selPositionAddEdit').select2({
                        theme: "bootstrap-5",
                        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                        closeOnSelect: true,
                    });
                },

            });
        }; //- //add input field
    });




})