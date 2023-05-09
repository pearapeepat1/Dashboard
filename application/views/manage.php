<div class="container py-2">
    <div class="row py-2">
        <div class="col-lg-8">
            <h2 class="text-dark txt-b">Dashboard</h2>
        </div>
        <div class="col-lg-2">
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
                                <!--<div class="row">
                                    <div class="col-md-12">
                                        <label for="startdate" class="form-label">Position : </label>
                                        <select class="selectpicker col-lg-9"  multiple>
                                            <option>Toronto</option>
                                            <option>Bucharest</option>
                                            <option>Paris</option>
                                        </select>
                                        <button type="button" class="btn btn-primary">add</button>
                                    </div>
                                </div>-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="startdate" class="form-label">Name : </label>
                                        <select class="selectpicker col-lg-9 "  multiple>
                                            <option>Rapeepat</option>
                                            <option>Duangtawan</option>
                                            <option>Kittisak</option>
                                        </select>
                                        <!--<script src="../assets/js/js/jquery-1.8.2.min.js"></script>
                                        <script type="text/javascript" src="../assets/js/js/chosen.jquery.min.js"></script>
                                        <script>
                                            $(".chzn-select").chosen();
                                            $(".chzn-select-deselect").chosen({
                                                allow_single_deselect: true
                                            });
                                        </script>-->
                                         <!--<button type="button" class="btn btn-primary">add</button>-->
                                    </div>
                                    <!--<div class="col-md-5 ms-auto">
                                        <label for="duedate" class="form-label">Name</label>
                                        <form action="" method="post">
                                            <select data-placeholder="Select your Library" name="program[]" class="chzn-select form-label" multiple="multiple" tabindex="6" style="width:200px">
                                                <option value="html">Duangtawan</option>
                                                <option value="css">Phatcahrin</option>
                                                <option value="php">Kittisak</option>
                                                <option value="javascript">Rapeepat</option>
                                            </select>
                                        </form>
                                        <script src="../assets/js/js/jquery-1.8.2.min.js"></script>
                                        <script type="text/javascript" src="../assets/js/js/chosen.jquery.min.js"></script>
                                        <script>
                                            $(".chzn-select").chosen();
                                            $(".chzn-select-deselect").chosen({
                                                allow_single_deselect: true
                                            });
                                        </script>
                                    </div>-->
                                </div>
                            </div>
                            <!--<div class="mb-3">
                                <textarea class="form-control" id="myTextbox" disabled></textarea>
                            </div>-->
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
                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
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
							<h4 class="my-1 text-info txt-b"><div id="sumProject"></div></h4>
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
							<h4 class="my-1 text-danger txt-b"><div id="sumPerson"></div></h4>
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
							<h4 class="my-1 text-success txt-b"><div id="sumTime"></div></h4>
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
                                <option>Project Name</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" name="selPerson" id="selPerson">
                                <option>Person in charge</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" name="selStatus" id="selStatus">
                                <option>Status</option>
                                <option value="01">All Status</option>
                                <option value="00">In progress</option>
                                <option value="11">Completed</option>
                                <option value="22">Delayed</option>
                            </select>
                        </div>
                    </div>
                    <div class="py-3">
                        <table id="example" class="display " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Step</th>
                                    <th>Person in Charge</th>
                                    <th>Positon</th>
                                    <th>sweetalert2 Date</th>
                                    <th>Due Date</th>
                                    <th>Status </th>
                                    <th>Action</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Project A</td>
                                    <td>7</td>
                                    <td>Rapeepat Jaiboon</td>
                                    <td>Front-End</td>
                                    <td>16 may 2023</td>
                                    <td>26 may 2023</td>
                                    <td class="text-warning">In progress</td>
                                    <td>
                                        <form method="post" id="toggleForm">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name='machine_state'>
                                                        <label class="custom-control-label" id="statusText" for="customSwitch1"></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </td>
                                    <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Project B</td>
                                    <td>6</td>
                                    <td>Kittisak Buabanchong</td>
                                    <td>Back-End</td>
                                    <td>8 may 2023</td>
                                    <td>13 may 2023</td>
                                    <td class="text-danger">Delayed</td>
                                    <td>
                                        <form method="post" id="toggleForm">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name='machine_state'>
                                                        <label class="custom-control-label" id="statusText" for="customSwitch1"></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </td>
                                    <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Project C</td>
                                    <td>9</td>
                                    <td>Duangtawan Poodannguan</td>
                                    <td>Programer</td>
                                    <td>2 may 2023</td>
                                    <td>18 may 2023</td>
                                    <td class="text-success">Completed</td>
                                    <td>
                                        <form method="post" id="toggleForm">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name='machine_state'>
                                                        <label class="custom-control-label" id="statusText" for="customSwitch1"></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </td>
                                    <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Project D</td>
                                    <td>12</td>
                                    <td>Phatcharin Chantasin</td>
                                    <td>Programer</td>
                                    <td>10 may 2023</td>
                                    <td>23 may 2023</td>
                                    <td class="text-danger">Delayed</td>
                                    <td>
                                        <form method="post" id="toggleForm">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name='machine_state'>
                                                        <label class="custom-control-label" id="statusText" for="customSwitch1"></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </td>
                                    <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Project E</td>
                                    <td>4</td>
                                    <td>Rapeepat Jaiboon</td>
                                    <td>Front-End</td>
                                    <td>3 may 2023</td>
                                    <td>26 may 2023</td>
                                    <td class="text-success">Completed</td>
                                    <td>
                                        <form method="post" id="toggleForm">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name='machine_state'>
                                                        <label class="custom-control-label" id="statusText" for="customSwitch1"></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </td>
                                    <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>