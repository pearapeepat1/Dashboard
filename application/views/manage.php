<div class="container py-2">
    <div class="row py-2">
        <div class="col-lg-8">
            <h2 class="text-dark txt-b">Dashboard</h2>
        </div>
        <div class="col-lg-2">
            <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Create Project</button> -->
            <!-- Button trigger modal -->
            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-clipboard-plus"></i> Create </a>
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




    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" data-bs-backdrop="false" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalToggleLabel" style="font-family: b Biger Over;">
                        <center><span class="text-success">Create</span> <span class="text-danger">Project</span></center>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="" id="formInsertProject">
                            <div class="row g-3">
                                <div class="col-lg-3">
                                    Project Name :
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Project name" aria-label="Project name" id="inpProjectName">
                                </div>
                            </div>
                            <div class="row g-3 py-3">
                                <div class="col-lg-3">
                                    Assignee :
                                </div>
                                <div class="col-lg-9">
                                    <div class="row g-3">
                                        <div class="col-sm-5">
                                            <select class="form-select" name="selPerson2" id="selPerson2">
                                                <option value="">Select Assignee</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            Position :
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
                                    Priority :
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-select" name="selPriority" id="selPriority">

                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" id="btnInsertFirst" data-bs-toggle="modal" data-bs-dismiss="modal">Save and Next</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" data-bs-backdrop="false" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalToggleLabel2" style="font-family: b Biger Over;">
                        <center><span class="text-success">Add</span> <span class="text-danger">Task</span></center>
                    </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row g-3 py-2">
                            <div class="col-lg-12">
                                <div class="row g-3">
                                    <div class="col-sm-2">
                                        Project Name :
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-select" name="selProject2" id="selProject2">
                                            <option value="">Project Name</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1">
                                        Task :
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter project Task here..." aria-label="City">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-lg-12">
                                <div class="row g-3">
                                    <div class="col-sm-2">
                                        Start Date :
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="date" id="strDate" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        Due Date :
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
                                        Assignee :
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-select" name="selPerson3" id="selPerson3">
                                            <option value="">Assignee</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        Position :
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
                                    <span class="text-success">Project</span> <span class="text-danger">Task</span>
                                </h4>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary">Primary</button>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 py-2 container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                </div>
            </div>
        </div>
    </div>
</div>