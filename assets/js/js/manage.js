var url = API_URL + "Addproject/show_Mststep";
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
            $('#frmCheckBox').append(`
            <div class="container">
                <div class="row py-1">
                    <div class="col-md-2 txt-b">
                        <h2><input class="form-check-input text-danger chkMaster" type="checkbox" value="${value.ms_id}"></h2>STEP : ${value.ms_id}
                    </div>
                    <div class="col-md-4 text-break fs-6">
                    <i class="bi bi-check2-circle text-warning"></i> <mark>${value.ms_name}</mark>
                    </div>
                    <div class="col-md-3 ">
                        <input type="date" class="form-control strDateAdd">
                    </div>
                    <div class="col-md-3 text-success">
                        <input type="date"  class="form-control dueDateAdd">
                    </div>
                </div>
            </div>`)
        })
    },

});


var max_fields_limit = 50; //set limit for maximum input fields
var x = 1; //initialize counter for text box
$(".add_more_button").click(function(e) {
    //click event on add more fields button having class add_more_button
    e.preventDefault();
    if (x < max_fields_limit) {
        //check conditions
        x++; //counter increment

        $(".input_fields_container_part").append(
            `<div class="newRow"> 
                <div class="row formAssignee">
                    <div class="col-lg-3">
                        <span class="txt-b"><i class="bi bi-person"></i>&nbsp;Person&nbsp;In&nbsp;Charge&nbsp;` + x + `</span> 
                    </div>
                     <div class="col-lg-3"> 
                        <select class="form-select selPersonCreate">
						
                        </select>
                    </div>
                    <div class="col-lg-2"> 
                        <span class="txt-b">Position</span>
                    </div> 
                    <div class="col-lg-3">
                        <select class="form-select selPosition multiple-select-field"  name="multiple-select-field" data-placeholder="Choose anything" multiple>
                        </select> 
                    </div>
					<div class="col-lg-1">
					    <button class="remove_fieldd btn btn-danger" ><i class="bi bi-trash"></i> </button>
				</div>
            </div>`
        );
        showProjectDrop()
        showPositionDrop()

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
                        $('.selPersonCreate:last').append(`<option value =${value.su_id}>${value.su_username}</option>`)
                    })

                },

            });
        };

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
                        $('.selPosition:last').append(`<option value =${value.mp_id}>${value.mp_name}</option>`)
                    })
                    $('.selPosition:last').select2({
                        theme: "bootstrap-5",
                        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                        closeOnSelect: true,
                    });
                },

            });
        }; //- //add input field
    }

});





// $("#btnInsertFirst").click(function() {
// 	var array = []
// 	$('.chkMaster').each(function() {
// 		if ($(this).is(":checked")) {
// 			let chkBox = $(this).val()
// 			let strDate = $(this).closest('div').find('.strDateAdd').val()
// 			let dueDate = $(this).closest('div').find('.dueDateAdd').val()
// 			array.push({
// 				chkBox: chkBox,
// 				strDate: strDate,
// 				dueDate: dueDate,
// 			})
// 			console.log(array);
// 			var url = API_URL + "Addproject/add_project?projectName=" + projectname.replaceAll(" ", "%20") + "&chkBox=" + [chkBox] + "&strDate=" + [strDate] + "&dueDate=" + [dueDate];
// 			// var url = API_URL + "Addproject/add_project?projectData=" + arrayTest ;
// 			// console.log(url);
// 			$.ajax({
// 				url: base_url("Dashboard/callApiInsertStap"),
// 				method: "GET",
// 				data: {
// 					format: 'json'
// 				},
// 				dataType: 'Json',
// 				data: {
// 					url: url,
// 					// array: array,
// 					chkBox: chkBox,
// 					strDate: strDate,
// 					dueDate: dueDate,
// 				},
// 				success: function(data) {
// 					$('#result').html(data);
// 				}
// 			});
// 		}
// 	});
// });



$('#multiple-select-field').select2({
    theme: "bootstrap-5",
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
    closeOnSelect: true,
});

// $('#btnSaveAdd').on('click', function() {
// 	var selProject2 = $('#selProject2').val();
// 	var addTask = $('#addTask').val();
// 	var strDateAdd = $('#strDateAdd').val();
// 	var dueDateAdd = $('#dueDateAdd').val();
// 	var selPerson3 = $('#selPerson3').val();
// 	var selPosition3 = $('#selPosition3').val();

// 	if (selProject2 != "" && addTask != "" && strDateAdd != "" && dueDateAdd != "" && selPerson3 != "" && selPosition3 != "") {
// 		$("#butsave").attr("disabled", "disabled");
// 		var url = API_URL + "Addproject/add_project_step?selProject2=" + selProject2 + "&addTask=" + addTask + "&strDateAdd=" + strDateAdd +
// 			"&dueDateAdd=" + dueDateAdd + "&selPerson3=" + selPerson3 + "&selPosition3=" + selPosition3;
// 		$.ajax({
// 			url: base_url("Dashboard/callApiAddTask"),
// 			type: "GET",
// 			data: {
// 				url: url,
// 				selProject2: selProject2,
// 				addTask: addTask,
// 				strDateAdd: strDateAdd,
// 				dueDateAdd: dueDateAdd,
// 				selPerson3: selPerson3,
// 				selPosition3: selPosition3,
// 			},
// 			cache: false,
// 			success: function(res) {
// 				if (res.result == true) {
// 					Swal.fire({
// 						icon: 'success',
// 						title: 'Success!',
// 						html: res.message,
// 						timer: 3000
// 					})
// 				} else {
// 					Swal.fire({
// 						icon: 'error',
// 						title: 'Save do not successfull!',
// 						html: res.message,
// 					})
// 				}

// 			}
// 		});
// 	} else {
// 		Swal.fire({
// 			icon: 'error',
// 			title: 'Oops...',
// 			text: 'Please fill all the field !',
// 		})
// 	}
// });


$(document).ready(function() {


    $('#adminId').on('change', function() {
        var adminId = $('#adminId').val();
        console.log(adminId);
        var url = API_URL + "Manage/show_add_admin?adminId=" + adminId;
        $.ajax({
            url: base_url('Dashboard/callApiShowAdmin'),
            type: 'GET',
            dataType: 'Json',
            data: {
                url: url,
                adminId: adminId,
            },
            success: (response) => {
                console.log(response);
                if (response.entries.length > 0) {
                    for (let i = 0; i < response.entries.length; i++) {
                        const data = response.entries[i];
                        $('#appendName').empty().append(`<input type="text" class="form-control" id="adminName" placeholder="Enter Employee name" value="${value.su_firstname}"></input>`)
                    }
                }
            }
        });
    });

    $('#btnSaveEmp').on('click', function() {
        var arrayEmployee = [];
        var EmpId = $('#empId').val();
        var EmpName = $('#empName').val();
        var EmpLastName = $('#empLName').val();
        if ('#empId' != null && '#empName' != null && '#empLName' != null) {
            arrayEmployee.push({
                EmpId: EmpId,
                EmpName: EmpName,
                EmpLastName: EmpLastName,
            })
            console.log(arrayEmployee);
            var url = API_URL + "Manage/add_resources";
            $.ajax({
                url: base_url("Dashboard/callApiCreateEmp"),
                type: "POST",
                data: {
                    arrayEmployee: arrayEmployee,
                },
                // dataType: 'json',
                success: function(res) {
                    console.log(res);
                    if (res == 1) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            html: res.message,
                            timer: 3000
                        }).then(() => {
                            location.reload();
                        })
                    } else {
                        Swal.fire({
                                icon: 'error',
                                title: 'Save do not successfull!',
                                html: res.message,
                            })
                            // .then(() => {
                            // 	location.reload();
                            // })
                    }
                }
            });
        } else {
            alert("Plse full field data");
        }
    })


    $(document).on("click", ".remove_fieldd", function(e) {
        //user click on remove text links
        e.preventDefault();
        $(this).closest(".newRow").remove();
        x--;
    });


    $('#btnInsertFirst').on('click', function() {
        var arrayPerson = []
        var arrayStep = []
        var arrayProject = []
        $('#formInsertProject').each(function() {
            if ('#inpProjectName' != '' && '#selLeader' != '') {
                var projectname = $('#inpProjectName').val();
                var assignee = $('#selLeader').val();
                arrayProject.push({
                    projectname: projectname,
                    projectLeader: assignee,
                })
            }
        });

        $('.formAssignee').each(function() {
            if ('.selPersonCreate' != '' && '.selPosition' != '') {
                let personName = $(this).closest('div').find('.selPersonCreate').val()
                let personPosition = $(this).closest('div').find('.selPosition').val()
                arrayPerson.push({
                    personName: personName,
                    personPosition: personPosition,
                })

            }
        })
        $('.chkMaster').each(function() {
            if ($(this).is(":checked")) {
                let chkBox = $(this).val()
                let strDate = $(this).closest('.row').find(".strDateAdd ").val()
                let dueDate = $(this).closest('.row').find(".dueDateAdd").val()
                arrayStep.push({
                    chkBox: chkBox,
                    strDate: strDate,
                    dueDate: dueDate,
                })

            }
        });
        // console.log(arrayProject);
        // console.log(arrayPerson);
        // console.log(arrayStep);

        var projectname = $('#inpProjectName').val();
        var assignee = $('#selLeader').val();
        let personName = $('.selPersonCreate').val()
        let personPosition = $('.selPosition').val()
        if (projectname != '' && assignee != '' && personName != '' && personPosition != '') {
            // var url = API_URL + "Addproject/add_project?projectname=" + projectname.replaceAll(" ", "%20") + "&assignee=" + assignee;
            var url = API_URL + "Addproject/add_project";
            $.ajax({
                url: base_url("Dashboard/callApiInsert"),
                type: "POST",
                data: {
                    // url: url,
                    arrayProject: arrayProject,
                    arrayPerson: arrayPerson,
                    arrayStep: arrayStep,
                },
                // dataType: 'json',
                success: function(res) {
                    // console.log(res);
                    if (res == 1) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: "Your Project Created ",
                            html: res.message,
                            timer: 3000
                        }).then(() => {
                            location.reload(true);
                        })
                    } else {
                        Swal.fire({
                                icon: 'error',
                                title: 'Save do not successfull!',
                                text: "I apologize for the inconvenience. The system is experiencing disruptions.",
                                html: res.message,
                            })
                            // .then(() => {
                            // 	location.reload();
                            // })
                    }
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please enter this information.',
            })
        }

    });

    (function() {
        var lastMove = Date.now();

        document.onmousemove = function() {
            lastMove = Date.now();
        }

        setInterval(function() {
            var diff = Date.now() - lastMove;
            if (diff > 350000) {
                window.location.href = 'dashboard';
            }
        }, 350000);
    }());




});


$(document).on("click", "#btnLogOut", function() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You wont to Logout",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, Logout',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'dashboard';
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
});