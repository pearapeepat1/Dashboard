<div class="container">
    <div class="container">
        <div class="row py-4">
            <div class="col-lg-2">
                <center>
                    <h2 class="my-1 text-success txt-b"><span id="ralTime"></span></h2>
                </center>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <center>
                        <h3 class="text-dark txt-b" style="font-family: b Biger Over;"><span class="text-success ">P r o j e c t</span>&nbsp; <span class="text-secondary">S u m m a y</span>&nbsp; <span class="text-success ">D e t a i l</span></h3>
                    </center>
                </div>
                <div class="row">
                    <center>
                        <h3 class="text-dark txt-b"><span class="projectName text-dark">Dashboard management</span></h3>
                    </center>
                </div>
            </div>
            <div class="col-lg-2">
               <a href="http://127.0.0.1/DashboardProject/Dashboard/dashboard"> <button type="button" class="btn btn-secondary"><i class="bi bi-house"></i> Home</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">67%</div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-success txt-b">
                        <i class="bi bi-flag-fill"></i> Completed
                    </div>
                </div>
                <div class="row py-3  ">
                    <div class="col-lg-3 card bg-white set-pading"><br>
                        <center>
                            <h5 class="text-success  txt-b " style="font-family: b Biger Over;">P l a n n i n g </h5>
                        </center>
                        <div id="chartPlane"></div>
                        <div class=" badge text-bg-success "><i class="bi bi-check-circle-fill"></i> Completed</div>
                    </div>
                    <div class="col-lg-3 card bg-white set-pading-crad"><br>
                        <center>
                            <h5 class="text-success txt-b" style="font-family: b Biger Over;">D e s i g n</h5>
                        </center>
                        <div id="chartDesign"></div>
                        <div class=" badge text-bg-warning "><i class="bi bi-patch-exclamation-fill"></i> in progess</div>
                    </div>
                    <div class="col-lg-3 bg-white card set-pading-crad"><br>
                        <center>
                            <h5 class="text-success txt-b " style="font-family: b Biger Over;">D e v e l o p</h5>
                        </center>
                        <div id="chartDev"></div>
                        <div class=" badge text-bg-warning "><i class="bi bi-patch-exclamation-fill"></i> in progess</div>
                    </div>
                    <div class="col-lg-2 bg-white card set-pading-crad"><br>
                        <center>
                            <h5 class="text-success txt-b " style="font-family: b Biger Over;">T e s t</h5>
                        </center>
                        <div id="chartTest"></div>
                        <div class=" badge text-bg-warning  set-test-top"><i class="bi bi-patch-exclamation-fill"></i> in progess</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <center><br>
                        <h5 class="text-success  txt-b " style="font-family: b Biger Over;">O v e r a l l</h5>
                    </center>
                    <div class="crad-body p-2 text-dark bg-opacity-25">
                        <div id="chartHalfOverall"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body ">
                        <div class="row">
                            <span class="fs-3 txt-b text-dark">Progress</span>
                        </div>
                        <div id="barStap">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <span class="fs-3 txt-b text-dark">Overdue Task</span>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Time left</th>
                                    <th scope="col">Stap</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Person in charge</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-warning"><i class="bi bi-circle-fill"></i> 3 Days </td>
                                    <td>Development</td>
                                    <td>23-05-22</td>
                                    <td>Rapeepat</td>
                                </tr>
                                <tr>
                                    <td class="text-success"><i class="bi bi-circle-fill"></i> 7 Days </td>
                                    <td>Design</td>
                                    <td>23-05-22</td>
                                    <td>Rapeepat</td>
                                </tr>
                                <tr>
                                    <td class="text-danger"><i class="bi bi-circle-fill"></i> 1 Days </td>
                                    <td>Planning</td>
                                    <td>23-05-22</td>
                                    <td>Rapeepat</td>
                                </tr>
                                <tr>
                                    <td class="text-warning"><i class="bi bi-circle-fill"></i> 4 Days </td>
                                    <td>Development</td>
                                    <td>23-05-22</td>
                                    <td>Rapeepat</td>
                                </tr>
                                <tr>
                                    <td class="text-success"><i class="bi bi-circle-fill"></i> 12 Days </td>
                                    <td>Planning</td>
                                    <td>23-05-22</td>
                                    <td>Rapeepat</td>
                                </tr>
                                <tr>
                                    <td class="text-danger"><i class="bi bi-circle-fill"></i> 1 Days </td>
                                    <td>Planning</td>
                                    <td>23-05-22</td>
                                    <td>Rapeepat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>
</div>