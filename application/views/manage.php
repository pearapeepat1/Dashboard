<div class="container py-2">
    <div class="row py-2">
        <div class="col-lg-4">
            <h2 class="text-dark txt-b">Management</h2>
        </div>
        <div class="col-lg-8">
            <h6 class="text-right text-secondary"><span id="time"></span></h6>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-lg-3 box">
            <div class="card " style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title  text-success">Project</h5>
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="txt-b text-dark">25/100</h2>
                        </div>
                        <div class="col-lg-3">
                            <i class="bi bi-briefcase-fill fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 box ">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-danger">Tasks</h5>
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="txt-b text-dark">100/110</h2>
                        </div>
                        <div class="col-lg-3">
                            <i class="bi bi-bookmark-check-fill fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 box">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-primary">Resources</h5>
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="txt-b text-dark">85/90</h2>
                        </div>
                        <div class="col-lg-3">
                            <i class="bi bi-person-fill fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 box">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-warning">Time Spent</h5>
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="txt-b text-dark">752 H</h2>
                        </div>
                        <div class="col-lg-3">
                            <i class="bi bi-clock-fill fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-lg-8 box">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="title txt-b ">Project Summary</h3>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-plus-lg txt-b"></i> Add Project
                                </button>
                                <!-- Modal -->
                                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title txt-b" id="exampleModalLabel">Add Project</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Project Name</label>
                                                    <input type="text" class="form-control" id="inpName" placeholder="Project name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="manager" class="form-label">
                                                        <h6 class="txt-b">Person in charge :</h6>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-md-5"><label for="startdate" class="form-label">Position</label>
                                                        <select id="selPosition" class="form-select">
                                                                <option>Disabled select</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5 ms-auto"><label for="duedate" class="form-label">Name</label>
                                                            <select id="selUser" class="form-select">
                                                                <option>Disabled select</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2 ms-auto">
                                                            <br>
                                                            <button type="button" class="btn btn-primary">ADD</button>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="Duedate">
                                                </div>
                                                <div class="mb-3" class="form-label">
                                                    <label for="topic" class="form-label">Topic</label>
                                                    <div class="form-group">
                                                        <form name="add_name" id="add_name">
                                                            <table class="table table-bordered table-hover" id="dynamic_field">
                                                                <tr>
                                                                    <td><input type="text" name="topic[]" placeholder="Enter topic" class="form-control total_amount" /></td>
                                                                    <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>
                                                                </tr>
                                                            </table>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-3">
                        <table id="tblProjectList" class="display " style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Project Manager</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 box">
            <div class="card">
                <div class="card-body">
                    <h3 class="title txt-b ">Overall Progress</h3>
                    <div class="chart chart-sm py-3">
                        <canvas id="chartjs-doughnut">1</canvas>
                    </div>
                    <div class="row py-5">
                        <div class="col">
                            <div class="row">
                                <center>
                                    <h4 class="txt-b">24</h4>
                                </center>
                            </div>
                            <div class="row">
                                <center>Total Project</center>
                            </div>
                        </div>
                        <div class="col ">
                            <div class="row">
                                <center>
                                    <h4 class="txt-b text-success">15</h4>
                                </center>
                            </div>
                            <div class="row">
                                <center>Project Completed</center>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <center>
                                    <h4 class="txt-b text-warning">5</h4>
                                </center>
                            </div>
                            <div class="row">
                                <center>Project in Progres</center>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <center>
                                    <h4 class="txt-b text-danger">4</h4>
                                </center>
                            </div>
                            <div class="row ">
                                <center>Project Delayed</center>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>่