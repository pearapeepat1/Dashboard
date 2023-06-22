<div class="container bg-contain">
    
    <div>
        <div class="row py-2">
            <div class="col-lg-8">
                <h1 class="text-success txt-b txt-shadow-head">M A N A G E M E N T</h1>
            </div>
            <div class="col-lg-2">
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear-fill fs-5 text-success"></i> SETTING
                    </button>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" data-bs-toggle="modal" data-bs-toggle="modal" href="#exampleModal">Create Step</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-toggle="modal" href="#crtRes">Create Resources</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-toggle="modal" href="#crtAdmin">Create Admin</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-secondary" id="btnLogOut">L O G O U T <i class="bi bi-box-arrow-in-right"></i></button>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 py-2">
            <!-- Total Project -->
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary txt-b">Total Project</p>
                                <h4 class="my-1 text-info txt-b">
                                    <div id="sumProjectMange"></div>
                                </h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="bi bi-briefcase-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Resources -->
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary txt-b">Total Resources</p>
                                <h4 class="my-1 text-danger txt-b">
                                    <div id="sumPerson"></div>
                                </h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Time Spent -->
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary txt-b">Time Spent</p>
                                <h4 class="my-1 text-success txt-b">
                                    <div id="sumTimeManage"></div>
                                </h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="bi bi-clock-history"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary txt-b">Current Time</p>
                                <h4 class="my-1 text-warning txt-b"><span id="ralTime"></span></h4>
                                <p class="mb-0 font-13"></p>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="bi bi-stopwatch"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="wrap magin-left-button">
                <button class="button" data-bs-toggle="modal" data-bs-toggle="modal" href="#exampleModalToggle" role="button"> <i class="bi bi-plus-circle-fill text-danger fs-5"></i> Create</button>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-12">
                <div class="bg-white raduis-div">
                    <div class="card-body">
                        <div >
                            <div class="row py-3">
                                <div class="col-md-4">
                                    <h3 class="title txt-b text-secondary ">Project Management</h3>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id="selProject2">
                                        <option value="">All Project</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select " id="selPerson2">
                                        <option value="">All Leader</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select" id="selStatusManage">
                                        <option value="">All Status</option>
                                    </select>
                                </div>
                            </div>
                            <div class="py-3">
                                <table id="tblManage" class="display table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Project Name</th>
                                            <th class="text-center">Step</th>
                                            <th class="text-center">Project Leader</th>
                                            <th class="text-center">Start Date</th>
                                            <th class="text-center">Due Date</th>
                                            <th class="text-center">Status </th>
                                            <th class="text-center">Action</th>
                                            <th class="text-center">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbodY">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="exampleModalToggle" aria-hidden="true" data-bs-backdrop="false" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content border-start border-5 border-5 border-success modal-bg ">
                    <div class="modal-header ">
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <h1>
                                    <center><span class="text-success txt-shadow-head">C R E A T E </span><span class="text-secondary txt-shadow-head">P R O J E C T</span></center>
                                </h1>
                                <form action="" id="formInsertProject">
                                    <div class="row g-3 py-3">
                                        <div class="col-lg-3">
                                            <span class="txt-b">Project Name</span>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Project name" aria-label="Project name" id="inpProjectName">
                                        </div>
                                    </div>
                                    <div class="row g-3 py-2">
                                        <div class="col-lg-3">
                                            <span class="txt-b">Project Leader</span>
                                        </div>
                                        <div class="col-lg-9">
                                            <select class="form-select " name="selLeader" id="selLeader">
                                                <option value="">Select Project Leader</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- <div class="col-lg-3">
                                            <select class="form-select selPosition3 " id="selPositionAdd" name="selPerson2">
                                            </select>
                                        </div>
                                        <div class="col-lg-1">
                                            <button type="button" class="btn btn-primary"><i class="bi bi-person-add"></i></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <span class="txt-b"><i class="bi bi-person-lines-fill text-success"></i>Select you Choose</span>
                                        </div>
                                        <div class="col-lg-9">
                                            <select class="form-select selPerson3" id="multiple-select-field" data-placeholder="Choose anything" multiple></select>
                                            <script>
                                                $('#multiple-select-field').select2({
                                                    theme: "bootstrap-5",
                                                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                                                    placeholder: $(this).data('placeholder'),
                                                    closeOnSelect: false,
                                                });
                                            </script>
                                        </div>
                                    </div>  -->
                                    <div class="row g-3 py-3">
                                    <h3>
                                <span class="text-success txt-shadow txt-shadow-head">P R O J E C T</span> <span class="text-secondary txt-shadow-head">A S S I G N E E</span>&nbsp;&nbsp;&nbsp;
                            
                            </h3>
                                        <div class="input_fields_container_part">
                                            <div class="row formAssignee">
                                                <div class="col-lg-3">
                                                    <span class="txt-b"><i class="bi bi-person"></i>&nbsp;Person&nbsp;In&nbsp;Charge&nbsp;1</span>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select class="form-select selPersonCreate ">
                                                        <option value="  ">Select Person in Charge </option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2">
                                                    <span class="txt-b">Position</span>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select class="form-select selPosition" id="multiple-select-field" data-placeholder="Choose anything" multiple>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1">
                                                    <button class="btn btn-sm btn-primary add_more_button"><i class="bi bi-person-fill-add fs-5"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script>

                                </script>

                            </div>
                            <div class="row py-3">
                                <h3>
                                    <span class="text-success txt-shadow txt-shadow-head">P R O J E C T</span> <span class="text-secondary txt-shadow-head">S T E P</span>
                                </h3>
                                <div class="row txt-b">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="text-success text-center"> S T A R T &nbsp; D A T E</span>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="text-danger text-center">D U E &nbsp; D A T E</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check" id="frmCheckBox">

                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-10">
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="sudmit" class="btn btn-success" id="btnInsertFirst"><i class="bi bi-cloud-download-fill"></i> Save</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="myDIV" class="py-5 editDiv" style="display:none;">
        <div >
            <div class="bg-white raduis-div">
                <div class="card-body">
                    <div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h1 style="font-family: b Biger Over;">
                                    <center><span class="text-success txt-shadow-head">E D I T S</span><br> <span class="text-secondary txt-shadow-head">P R O J E C T</span> <i class="bi bi-pencil-square text-success"></i></center>
                                </h1>
                            </div>
                            <div class="col-lg-4">
                                <div class="col-sm">
                                    <span class="txt-b text-success txt-shadow-head"> Project Name :</span>
                                    <h1 class="txt-b text-primary-emphasis txt-shadow-head text-uppercase" id="ProjectName">
                                        <!-- Project Name -->
                                    </h1>
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <div class="col-sm" id="ProjectStatus">
                                    <!-- Project Status -->
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-success saveEdit">S A V E &nbsp;<i class="bi bi-save"></i></button>
                            </div>
                        </div>
                        <form action="" id="formEditProject">
                            <div class="row py-4">
                                <div class="col-sm-2">
                                    <span class="txt-b">Project Name</span>
                                </div>
                                <div class="col-sm-10" id="inpProjectNameEdit">
                                    <!-- <input type="taxt" id="edtProjetcName" class="form-control" > -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <span class="txt-b">Project Leader</span>
                                </div>
                                <div class="col-sm-10">
                                    <select class="form-select " id="selLeaderEdit"></select>
                                </div>
                            </div>
                        </form>
                        <div class="row py-3">
                            <h3>
                                <span class="text-success txt-shadow txt-shadow-head">P R O J E C T</span> <span class="text-secondary txt-shadow-head">A S S I G N E E</span>&nbsp;&nbsp;&nbsp;
                                <button class="btn add_more_button_Edit ">
                                    C R E A T E <i class="bi bi-person-fill-add text-success fs-5"></i>
                                </button>
                            </h3>
                            <form action="" id="formEditAssigneeEdit">
                                <div class="input_fields_Edit">
                                    <div class="row formEditAssignee">
                                        <!-- <div class="col-lg-10">
                                    </div> -->
                                        <!-- <div class="col-lg-2">
                                        <button class="btn btn-outline-success add_more_button_Edit">
                                        Add Person<i class="bi bi-person-fill-add text-success fs-5"></i>
                                        </button>
                                    </div> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="stepEdit">

                        </div>
                        <div class="row py-1">
                            <h3>
                                <span class="text-success txt-shadow txt-shadow-head">P R O J E C T</span> <span class="text-secondary txt-shadow-head">S T E P</span>
                            </h3>
                            <div class="row txt-b">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-2">
                                    <center><span class=" ">Start Date</span></center>
                                </div>
                                <div class="col-sm-2">
                                    <center><span class="">Due Date</span></center>
                                </div>
                                <div class="col-sm">
                                    <center><span class=" ">Assignee</span></center>
                                </div>
                                <div class="col-sm">
                                    <center><span class=" ">Position</span></center>
                                </div>
                                <div class="col-sm">
                                    <center><span class=" ">Percent(%)</span></center>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-check" id="frmCheckBoxEdit">

                                </div>
                            </div>
                            <!-- <div class="row py-2">
                                    <div class="col-lg-10">
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="sudmit" class="btn btn-success" id="btnInsertFirst"><i class="bi bi-cloud-download-fill"></i> Save</button>
                                    </div>

                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content border-start border-5 border-5 border-success">
                <div class="modal-header">
                    <h1 class="txt-shadow-head" id="exampleModalLabel">
                        <center><span class="text-success">C&nbsp;R&nbsp;A&nbsp;T&nbsp;E</span>&nbsp;&nbsp;<span class="text-secondary">S&nbsp;T&nbsp;E&nbsp;P</span></center>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Stap:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Enter stap name" required>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="message-text" placeholder="Enter Description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="crtRes" data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content border-start border-5 border-5 border-success">
                <div class="modal-header">
                    <h2 class="txt-shadow-head" id="exampleModalLabel">
                        <center><span class="text-success">C R E A T E</span> <span class="text-secondary">R E S O U R C E S</span></center>
                    </h2>
                    <div class="row">

                    </div>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formCreateEmp">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Employee ID:</label>
                            <input type="text" class="form-control" id="empId" placeholder="Enter Enployee ID" required>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Employee Name:</label>
                            <input type="text" class="form-control" id="empName" placeholder="Enter Employee name"></input>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Employee Last Name:</label>
                            <input type="text" class="form-control" id="empLName" placeholder="Enter Employee Last name"></input>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="message-text" class="col-form-label">Employee Default Position:</label>
                            <select class="form-select selPosition" id="empPosition">
                                <option value=" ">Choose Position</option>
                            </select>
                        </div> -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="btnSaveEmp">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="crtAdmin" data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content border-start border-5 border-5 border-success">
                <div class="modal-header">
                    <h2 class="txt-shadow-head" id="exampleModalLabel">
                        <center><span class="text-success">C R E A T E</span> <span class="text-secondary">A D M I N</span></center>
                    </h2>
                    <div class="row">

                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Enployee ID:</label>
                            <select class="form-control selPerson" id="adminId">
                                <option value="">Choose Employee ID</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Employee Name:</label>
                            <input type="text" class="form-control" placeholder="Employee name" disabled></input>
                            <div id="appendName"></div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Create Password:</label>
                            <input type="password" class="form-control" id="adminPassword" placeholder="Enter Password"></input>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="Crfpassword" placeholder="Confirm Password"></input>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- close container -->
</div>
<!-- close container -->
<script>
    function EditModal() {
        
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    setInterval(() => {
       $('#myDiv')
    }, 1000);
</script>

