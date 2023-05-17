<div class="container py-2">
    <div class="row py-2">
        <div class="col-lg-8">
            <h2 class="text-dark txt-b">Dashboard</h2>
        </div>
        <div class="col-lg-2">
           
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


    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>

    
    