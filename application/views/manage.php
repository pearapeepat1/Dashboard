<div class="container py-2">
    <div class="row py-2">
        <div class="col-lg-8">
            <h2 class="text-dark txt-b">Dashboard</h2>
        </div>
        <div class="col-lg-2">
            <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Create Project</button> -->
            <!-- Button trigger modal -->
            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-clipboard-plus"></i> Create Project</a>
            <!-- <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="row g-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                </div>
            </div> -->
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
                        <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-users"></i>
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
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
                        <table id="tblManage" class="display " style="width:100%">
                            <thead>
                                <tr>
                                    <th style="display:none;">#</th>
                                    <th>Project Name</th>
                                    <th>Step</th>
                                    <th>Person in Charge</th>
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




    <div class="modal fade " id="exampleModalToggle" aria-hidden="true" data-bs-backdrop="false" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content border-start border-5 border-5 border-success ">
                <div class="modal-header ">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
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
                            <div class="row g-3 py-3">
                                <div class="col-lg-3">
                                    <span class="txt-b"><i class="bi bi-person-lines-fill text-success"></i> Assignee</span>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row g-3">
                                        <div class="col-sm-5">
                                            <select class="form-select" name="selPerson2" id="selPerson2">
                                                <option value="">Select Assignee</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <span class="txt-b">Position</span>
                                        </div>
                                        <div class="col-sm">
                                            <select class="form-select" name="selPosition" id="selPosition">
                                                <option value="">Position</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-lg-3">
                                    <span class="txt-b"><i class="bi bi-flag-fill text-success"></i> Priority</span>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-select" name="selPriority" id="selPriority">

                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-9">
                            </div>
                            <div class="col-lg-3">
                                <center><button class="btn btn-success " data-bs-target="#exampleModalToggle2" id="btnInsertFirst" data-bs-toggle="modal" data-bs-dismiss="modal">Save and Next</button></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" data-bs-backdrop="false" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog  modal-lg modal-dialog-scrollable parent">
            <div class="modal-content border-start border-5 border-5 border-success">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body child">
                    <div class="container">
                        <h1 style="font-family: b Biger Over;">
                            <center><span class="text-success">Add</span> <span class="text-secondary">Task</span></center>
                        </h1>
                        <div class="row g-3 py-2">
                            <div class="col-lg-12">
                                <div class="row g-3">
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
                                    <div class="col-sm-4">
                                        <input type="date" id="strDate" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="txt-b">Due Date</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="date" id="dueDate" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-lg-12">
                                <div class="row g-3">
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
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-sm-10">
                                <h4 style="font-family: b Biger Over;">
                                    <!-- <span class="text-dark">Project</span> <span class="text-secondary">Task</span> -->
                                </h4>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 py-2 container">
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
                <div class="modal-footer container">
                    <button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                </div>
            </div>
        </div>
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

<div class="container">
    <button class="btn btn-success" onclick="myFunction()">Try it</button>
</div>


<div id="myDIV">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 style="font-family: b Biger Over;">
                            <center><span class="text-success">Edits</span> <span class="text-secondary">Project</span> <i class="bi bi-pencil-square text-success"></i></center>
                        </h1>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-success" onclick="myFunction()">Close</button>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-sm-2">
                        <span class="txt-b">Project Name</span>
                    </div>
                    <div class="col-sm-4">
                        <input type="taxt" id="edtProjetcName" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <span class="txt-b">Person in Charge</span>
                    </div>
                    <div class="col-sm-4">
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
                            <div class="col-sm-1">
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
    </div>
</div>



<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>