<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <div class="col-lg-5">
        <h3 class="text-success txt-b " style="font-family: b Biger Over;">M a n a g e m e n t</h3> <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="col-lg-7">
                    <li class="nav-item">
                        <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-clipboard-plus"></i> Create Project</a>
                    </li>
                </div>
                <div class="col-lg-6">
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-clipboard-plus"></i> Create Stap</button>
                    </li>
                </div>
            </ul>
            <div class="col-lg-4">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav> --> <!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
<script src="https://phpcoder.tech/multiselect/js/jquery.multiselect.js"></script>
<link rel="stylesheet" href="https://phpcoder.tech/multiselect/css/jquery.multiselect.css">
<div class="container bg-dashboard">
    <div class="container py-2">
        <div class="row py-2">
            <div class="col-lg-6">
                <h3 class="text-success txt-b " style="font-family: b Biger Over;">M a n a g e m e n t</h3>
            </div>
            <div class="col-lg-2">
            <div class="wrap">
                    <button class="button"data-bs-toggle="modal" data-bs-toggle="modal" href="#exampleModalToggle" role="button"> Create Project</button>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="wrap">
                    <button class="button"data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"> Create Stap</button>
                </div>
            </div>
            <div class="col-lg-2">
                <select class="form-select" name="selDate" id="selDate">
                    <option value="24">All Day</option>
                    <option value="30">Last 30 Day</option>
                    <option value="15">Last 15 Day</option>
                    <option value="7">Last 7 Day</option>
                </select>
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
                                    <div id="sumProject"></div>
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
                                    <div id="sumTime"></div>
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
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white raduis-div">
                    <div class="card-body">
                        <div class="container">
                            <div class="row py-3">
                                <div class="col-md-4">
                                    <h3 class="title txt-b text-secondary ">Project Summary</h3>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" name="selName" id="selName" onchange="getState(this.value)">
                                        <option>All Project</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" name="selPerson" id="selPerson">
                                        <option>All Person in charge</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select" name="selStatus" id="selStatus">
                                        <option>All Status</option>
                                    </select>
                                </div>
                            </div>
                            <div class="py-3">
                                <table id="tblManage" class="display table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="display:none;">#</th>
                                            <th>Project Name</th>
                                            <th>Step</th>
                                            <th>Project Leader</th>
                                            <th>Start Date</th>
                                            <th>Due Date</th>
                                            <th>Status </th>
                                            <th>Action</th>
                                            <th>Edit</th>
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
                <div class="modal-content border-start border-5 border-5 border-success ">
                    <div class="modal-header ">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <h1 style="font-family: b Biger Over;">
                                    <center><span class="text-success">Create</span> <span class="text-secondary">Project</span></center>
                                </h1>
                                <form action="" id="formInsertProject">
                                    <div class="row g-3 py-3">
                                        <div class="col-lg-3">
                                            <span class="txt-b"><i class="bi bi-clipboard-fill text-success"></i> Project Name</span>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Project name" aria-label="Project name" id="inpProjectName">
                                        </div>
                                    </div>
                                    <div class="row g-3 py-2">
                                        <div class="col-lg-3">
                                            <span class="txt-b"><i class="bi bi-person-lines-fill text-success"></i> Project Leader</span>
                                        </div>
                                        <div class="col-lg-9">
                                            <select class="form-select selPerson3" name="selPerson2" id="selPerson2">
                                                <option value="">Select Assignee</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-3 py-2">
                                        <div class="col-lg-3">
                                            <span class="txt-b"><i class="bi bi-person-lines-fill text-success"></i>Person in Charge</span>
                                        </div>
                                        <div class="col-lg-9">

                                            <select class="form-select selPerson3" id="multiple-select-field" data-placeholder="Choose anything" multiple>

                                            </select>
                                            <script>
                                                $('#multiple-select-field').select2({
                                                    theme: "bootstrap-5",
                                                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                                                    placeholder: $(this).data('placeholder'),
                                                    closeOnSelect: false,
                                                });
                                            </script>
                                        </div>
                                        <div class="col-lg-3">
                                            <span class="txt-b"><i class="bi bi-person-lines-fill text-success"></i>Position</span>
                                        </div>
                                        <div class="col-lg-9">
                                            <select class="form-select selPosition3" id="selPersonAdd" name="selPerson2" data-placeholder="Choose anything" multiple>
                                            </select>
                                        </div>
                                        <script>
                                            $('#selPersonAdd').select2({
                                                theme: "bootstrap-5",
                                                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                                                placeholder: $(this).data('placeholder'),
                                                closeOnSelect: false,
                                            });
                                        </script>
                                        <!-- <div class="col-lg-1">
                                            <button class="btn btn-primary" type="submit"> <i class="bi bi-person-add"> </i></button>
                                        </div> -->
                                    </div>
                                    <!-- <div class="row">
                                        <input type="text" class="form-control" placeholder="Person in Charge" aria-label="Person in Charge" id="inpPerson">
                                    </div> -->
                                </form>


                            </div>
                            <div class="row py-3">
                                <h3 style="font-family: b Biger Over;">
                                    <span class="text-success">Project</span> <span class="text-secondary">Step</span>
                                </h3>
                                <div class="row txt-b">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-3">
                                        <center><span class="text-success"><i class="bi bi-calendar2-plus-fill"></i> START DATE</span></center>
                                    </div>
                                    <div class="col-sm-3">
                                        <center><span class="text-danger"><i class="bi bi-calendar2-check-fill"></i>DUE DATE</span></center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check" id="frmCheckBox">

                                    </div>
                                    <!-- <input type="checkbox" id="Educator_Classes" name="Educator_Classes[]" class="Educator_Classes" value="<?php echo $Class_Number; ?>" /> -->
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-10">
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="sudmit" class="btn btn-success" id="btnInsertFirst"><i class="bi bi-cloud-download-fill"></i> Save</button>
                                    </div>

                                    <!-- <div class="col-lg-2">
                                        <center><button class="btn btn-danger " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Add Stap</button></center>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" data-bs-backdrop="false" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog  modal-lg modal-dialog-scrollable ">
                    <div class="modal-content border-start border-5 border-5 border-success">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1 style="font-family: b Biger Over;">
                                <center><span class="text-success">Add</span> <span class="text-secondary">Task</span></center>
                            </h1>
                            <form action="">
                                <div class="container">
                                    <div class="row g-3 py-2">
                                        <div class="col-sm-2">
                                            <span class="txt-b">Project Name</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select" name="selProject2" id="selProject2">
                                                <option value="">Project Name</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            <span class="txt-b">Task</span>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" id="addTask" class="form-control">
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-sm-2">
                                                <span class="txt-b">Start Date</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="date" id="strDateAdd" class="form-control">
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="txt-b">Due Date</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="date" id="dueDateAdd" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 py-3">
                                        <div class="col-sm-2">
                                            <span class="txt-b">Assignee</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select " name="selPerson3" id="selPerson3">
                                                <option value="">Assignee</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <span class="txt-b">Position</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select" name="selPosition3" id="selPosition3">
                                                <option value="">Position</option>
                                            </select>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col-sm-8">
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-success" id="btnSaveAdd"><i class="bi bi-plus"></i> Add Task</button>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="reset" class="btn btn-danger" id="btnClear"><i class="bi bi-eraser"></i> Reset</button>
                                            </div>

                                        </div>
                                    </div>
                            </form>
                            <div class="row g-2 ">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th style="display:none;" scope="col">#</th>
                                            <th scope="col">Task Detail</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">Due Date</th>
                                            <th scope="col">Assignee</th>
                                            <th scope="col">Position</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody2">
                                        <tr>
                                            <th scope="row">traceability</th>
                                            <td>15 Mar 23</td>
                                            <td>24 Apr 23</td>
                                            <td>Rapeepat J.</td>
                                            <td class="badge rounded-pill bg-secondary">Front End</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">traceability</th>
                                            <td>15 Mar 23</td>
                                            <td>24 Apr 23</td>
                                            <td>Rapeepat J.</td>
                                            <td class="badge rounded-pill bg-secondary">Front End</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">traceability</th>
                                            <td>15 Mar 23</td>
                                            <td>24 Apr 23</td>
                                            <td>Rapeepat J.</td>
                                            <td class="badge rounded-pill bg-secondary">Front End</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">traceability</th>
                                            <td>15 Mar 23</td>
                                            <td>24 Apr 23</td>
                                            <td>Rapeepat J.</td>
                                            <td class="badge rounded-pill bg-warning">Front End</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">traceability</th>
                                            <td>15 Mar 23</td>
                                            <td>24 Apr 23</td>
                                            <td>Rapeepat J.</td>
                                            <td class="badge rounded-pill bg-secondary">Front End</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">traceability</th>
                                            <td>15 Mar 23</td>
                                            <td>24 Apr 23</td>
                                            <td>Rapeepat J.</td>
                                            <td class="badge rounded-pill bg-warning">Front End</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">traceability</th>
                                            <td>15 Mar 23</td>
                                            <td>24 Apr 23</td>
                                            <td>Rapeepat J.</td>
                                            <td>Front End</td>
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>





    <!-- <label class="switch">
    <input type="checkbox" class="chk" id="id_chk">
    <span class="slider"></span>
</label> -->

    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header border-start border-5 border-5 border-success">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="container">
            <div class="row">
                <h1 style="font-family: b Biger Over;">
                    <center><span class="text-success">Edits</span> <span class="text-secondary">Project</span></center>
                </h1>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-sm-4">
                <span class="txt-b">Project Name</span>
            </div>
            <div class="col-sm-8">
                <input type="taxt" id="edtProjetcName" class="form-control">
            </div>
        </div>
        <div class="row py-1">
            <div class="col-sm-4">
                <span class="txt-b">Project Name</span>
            </div>
            <div class="col-sm-8">
                <input type="taxt" id="edtProjetcName" class="form-control">
            </div>
        </div>
    </div>
</div> -->

    <!-- <div class="container">
    <button class="btn btn-success" onclick="myFunction()">Try it</button>
</div> -->


    <div id="myDIV" class="py-5" style="display:none;">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <h1 style="font-family: b Biger Over;">
                                    <center><span class="text-success">Edits</span><br> <span class="text-secondary">Project</span> <i class="bi bi-pencil-square text-success"></i></center>
                                </h1>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="txt-b text-primary-emphasis ">
                                    Dashboard Management project
                                </h3>
                            </div>
                            <div class="col-lg-1">
                                <button class="btn btn-success" onclick="EditModal()"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>
                        <!-- <div class="row">
                    <div class="col-lg-3">
                        <h3 style="font-family: b Biger Over;" class="text-success">
                        Project : 
                        </h3>
                    </div>
                    <div class="col-lg-9">
                        <h3 class="txt-b text-secondary">
                            Dashboard Management
                        </h3>
                    </div>
                </div> -->
                        <div class="row py-4">
                            <div class="col-sm-2">
                                <span class="txt-b">Project Name</span>
                            </div>
                            <div class="col-sm-3">
                                <input type="taxt" id="edtProjetcName" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <span class="txt-b">Person in Charge</span>
                            </div>
                            <div class="col-sm-2">
                                <input type="taxt" id="edtProjetcName" class="form-control">
                            </div>
                            <div class="col-sm-1">
                                <span class="txt-b">Position</span>
                            </div>
                            <div class="col-sm-2">
                                <input type="taxt" id="edtProjetcName" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-lg-12">
                                <div class="row g-3">
                                    <div class="col-sm-2">
                                        <span class="txt-b">Project Name</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="taxt" id="edtProjetcName" class="form-control">
                                    </div>
                                    <div class="col-sm-1">
                                        <span class="txt-b">Task</span>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" placeholder="Enter project Task here..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-lg-12">
                                <div class="row g-3">
                                    <div class="col-sm-2">
                                        <span class="txt-b">Start Date</span>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="date" id="strDate" class="form-control">
                                    </div>
                                    <div class="col-sm-1">
                                        <span class="txt-b">Due Date</span>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="date" id="dueDate" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-success">Save Chang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <table class="table table-sm" id="table-master">
                                <thead>
                                    <tr>
                                        <th style="display:none;" scope="col">#</th>
                                        <th scope="col">Task Detail</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Assignee</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Position</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">

                                </tbody>
                            </table>
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
                    <h1 style="font-family: b Biger Over;" id="exampleModalLabel">
                        <center><span class="text-success">Create</span> <span class="text-secondary">Stap</span></center>
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
</script>

<script>
    $(document).ready(function() {
        $('#btnInsertFirst').on('click', function() {
            var projectname = $('#inpProjectName').val();
            var assignee = $('#selPerson2').val();
            var personCharge = $('#multiple-select-field').val();
            var position = $('#selPersonAdd').val();
            if (projectname != "" && assignee != "") {
                var url = API_URL + "Addproject/add_project?projectname=" + projectname.replaceAll(" ", "%20") + "&assignee=" + assignee + "&personCharge=" + personCharge + "&position=" + position;
                console.log(url);
                $.ajax({
                    url: base_url("Dashboard/callApiInsert"),
                    type: "GET",
                    data: {
                        url: url,
                        projectname: projectname,
                        assignee: assignee,
                        personCharge: personCharge,
                        position: position,
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
                            }).then(() => {
                                location.reload();
                            })
                        }
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill all the field !',
                })
            }

        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#btnInsertFirst").click(function() {
            var array = []
            var projectname = $('#inpProjectName').val();
            $('.chkMaster').each(function() {
                if ($(this).is(":checked")) {
                    let chkBox = $(this).val()
                    let strDate = $(this).closest('div').find('.strDateAdd').val()
                    let dueDate = $(this).closest('div').find('.dueDateAdd').val()
                    array.push({
                        projectname: projectname.replaceAll(" ", "%20"),
                        chkBox: chkBox,
                        strDate: strDate,
                        dueDate: dueDate,
                    })
                    // const arrayTest = [{projectname:projectname, chkBox: chkBox, strDate:strDate, dueDate: dueDate}]
                    // console.log(arrayTest);
                    // let strArray = array.toString()
                    // console.log(array);
                    var ids = [projectname, chkBox, strDate, dueDate],
                        formatted = `(${ids.map(v => JSON.stringify(v.toString())).join(', ')})`;
                    console.log(formatted);
                    var url = API_URL + "Addproject/add_project?projectName=" + projectname.replaceAll(" ", "%20") + "&chkBox=" + [chkBox] + "&strDate=" + [strDate] + "&dueDate=" + [dueDate];
                    // var url = API_URL + "Addproject/add_project?projectData=" + arrayTest ;
                    // console.log(url);
                    $.ajax({
                        url: base_url("Dashboard/callApiInsertStap"),
                        method: "GET",
                        data: {
                            format: 'json'
                        },
                        dataType: 'Json',
                        data: {
                            url: url,
                            // array: array,
                            projectname: projectname,
                            chkBox: chkBox,
                            strDate: strDate,
                            dueDate: dueDate,
                        },
                        success: function(data) {
                            $('#result').html(data);
                        }
                    });
                }
            });

        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#btnSaveAdd').on('click', function() {
            var selProject2 = $('#selProject2').val();
            var addTask = $('#addTask').val();
            var strDateAdd = $('#strDateAdd').val();
            var dueDateAdd = $('#dueDateAdd').val();
            var selPerson3 = $('#selPerson3').val();
            var selPosition3 = $('#selPosition3').val();

            if (selProject2 != "" && addTask != "" && strDateAdd != "" && dueDateAdd != "" && selPerson3 != "" && selPosition3 != "") {
                $("#butsave").attr("disabled", "disabled");
                var url = API_URL + "Addproject/add_project_step?selProject2=" + selProject2 + "&addTask=" + addTask + "&strDateAdd=" + strDateAdd +
                    "&dueDateAdd=" + dueDateAdd + "&selPerson3=" + selPerson3 + "&selPosition3=" + selPosition3;
                $.ajax({
                    url: base_url("Dashboard/callApiAddTask"),
                    type: "GET",
                    data: {
                        url: url,
                        selProject2: selProject2,
                        addTask: addTask,
                        strDateAdd: strDateAdd,
                        dueDateAdd: dueDateAdd,
                        selPerson3: selPerson3,
                        selPosition3: selPosition3,
                    },
                    cache: false,
                    success: function(res) {
                        if (res.result == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                html: res.message,
                                timer: 3000
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Save do not successfull!',
                                html: res.message,
                            })
                        }

                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill all the field !',
                })
            }
        });
    });
</script>