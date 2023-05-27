checkStap()

function checkStap() {
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
                $('#frmCheckBox').append(`<div class="container"><div class="row py-1">
            <div class="col-md-2 txt-b">
             <h2><input class="form-check-input text-danger chkMaster" type="checkbox" value="${value.ms_id}"></h2>Stap : ${value.ms_id}
            </div>
            <div class="col-md-4 text-break fs-6 fw-semibold text-dark">
              <i class="bi bi-stars text-warning txt-b"></i></i> <mark>${value.ms_name}</mark>
            </div>
            <div class="col-md-3">
            <input type="date"  class="form-control strDateAdd">
            </div>
            <div class="col-md-3 text-success">
            <input type="date"  class="form-control dueDateAdd">
            </div>
         </div>
            </div>`)
            })
        },

    });
};
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
                                    <span class="txt-b"><i class="bi bi-person-lines-fill text-success"></i>Person in Charge ` + x + `</span> 
                                </div>
                                <div class="col-lg-3"> 
                                    <select class="form-select selPerson3">
									<option value="">choose anything</option>
                                    </select>
                                </div>
                                <div class="col-lg-2"> 
                                    <span class="txt-b"><i class="bi bi-person-lines-fill text-success"></i>Position</span>
                                </div> 
                                <div class="col-lg-3">
                                    <select class="form-select selPosition multiple-select-field"  name="multiple-select-field" data-placeholder="Choose anything" multiple>
                                 </select> 
                            </div>
							<div class="col-lg-1">
								<button class="remove_field btn btn-danger" ><i class="bi bi-trash"></i> </button>
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
                        $('.selPerson3:last').append(`<option value =${value.mey_id}>${value.mey_name}</option>`)
                    })

                },

            });
        };
        $("#btnInsertFirst").click(function() {


        });

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
    $(document).on("click", ".remove_field", function(e) {
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
            if ('#inpProjectName' != '' && '#selPerson2' != '') {
                var projectname = $('#inpProjectName').val();
                var assignee = $('#selPerson2').val();
                arrayProject.push({
                    projectname: projectname,
                    projectLeader: assignee,
                })
            }
        });
        $('.formAssignee').each(function() {
            if ('.selPerson3' != '' && '.selPosition' != '') {
                let personName = $('.selPerson3').val()
                let personPosition = $('.selPosition').val()
                arrayPerson.push({
                    personName: personName,
                    personPosition: personPosition,
                })

            }
        })
        $('.chkMaster').each(function() {
            if ($(this).is(":checked")) {
                let chkBox = $(this).val()
                let strDate = $('.strDateAdd').val()
                let dueDate = $('.dueDateAdd').val()
                arrayStep.push({
                    //projectname: projectname.replaceAll(" ","%20"),
                    chkBox: chkBox,
                    strDate: strDate,
                    dueDate: dueDate,
                })
            }
        });
        var projectname = $('#inpProjectName').val();
        var assignee = $('#selPerson2').val();
        let personName = $('.selPerson3').val()
        let personPosition = $('.selPosition').val()
        let strDate = $('.strDateAdd').val()
        let dueDate = $('.dueDateAdd').val()
        if (projectname != '' && assignee != '' && personName != '' && personPosition != '') {
            if (strDate < dueDate && dueDate > strDate) {
                // var url = API_URL + "Addproject/add_project?projectname=" + projectname.replaceAll(" ", "%20") + "&assignee=" + assignee;
                var url = API_URL + "Addproject/add_project";
                $.ajax({
                    url: base_url("Dashboard/callApiInsert"),
                    type: "POST",
                    data: {
                        url: url,
                        arrayProject: arrayProject,
                        arrayPerson: arrayPerson,
                        arrayStep: arrayStep,
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
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'The due date must be the next day from the start date.',
                })
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please enter this information.',
            })
        }

    });
});