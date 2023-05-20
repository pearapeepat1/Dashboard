<div class="container">
    <div class="container">
        <!-- <div class="row py-5">
            <div class="col-lg-10">
                <h3 class="text-dark txt-b" style="font-family: b Biger Over;"><span class="text-success ">P r o j e c t</span>&nbsp; <span class="text-secondary text-opacity-85">S u m m a y</span>&nbsp; <span class="text-success text-opacity-75">D e t a i l</span></h3>
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-secondary"><i class="bi bi-house"></i> Home</button>
            </div>
        </div> -->
        <div class="row py-3">
            <div class="col-lg-3">
                <div class="card">
                    <div class="crad-body bg-success p-2 text-dark bg-opacity-25"">
                        <div class=" row fs-4 fw-bolder">
                        <center>Projected </center>
                    </div>
                    <div class="row fs-4 fw-semibold">
                        <center>Lunch Date</center>
                    </div>
                    <div class="row fs-1">
                        <center><i class="bi bi-flag-fill text-success"></i></center>
                    </div>
                    <div class="row fs-2 fw-bolder">
                        <center>107 Days</center>
                    </div>
                    <div class="row fs-5">
                        <center>Friday December 15</center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-lg-3">
                    <div class="row">
                        <span class="fs-3 fw-semibold text-secondary">Planning</span>
                    </div>
                    <div class="chart-container" style="position: relative; height:20vh; width:70vw">
                        <canvas id="chartPlane"></canvas>
                    </div>
                    <div class="row">
                        <center><span class="fs-5  text-secondary">Completed</span> </center>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <span class="fs-3 fw-semibold text-secondary">Design</span>
                    </div>
                    <div class="chart-container" style="position: relative; height:20vh; width:70vw">
                        <canvas id="chartDesign"></canvas>
                    </div>
                    <div class="row">
                        <center><span class="fs-5  text-secondary">Completed</span> </center>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <span class="fs-3 fw-semibold text-secondary">Development</span>
                    </div>
                    <div class="chart-container" style="position: relative; height:20vh; width:70vw">
                        <canvas id="chartDev"></canvas>
                    </div>
                    <div class="row">
                        <center><span class="fs-5  text-secondary">Completed</span> </center>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="crad-body bg-success p-2 text-dark bg-opacity-10">
                            <div class="row">
                                <span class="fs-5 txt-b text-dark">Person in charge</span>
                            </div>
                            <div class="col">
                            <div class="row">Rapeepat J.</div>
                            <div class="row">Kittisak B.</div>
                            <div class="row">Duangtawan P.</div>
                            <div class="row">Phatcharin C.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body bg-success p-2 text-dark bg-opacity-10">
                    <div class="row">
                        <span class="fs-3 txt-b text-dark">Progress</span>
                    </div>
                    <div>
                        <canvas id="horizontal-bar-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body bg-success p-2 text-dark bg-opacity-10">
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





<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartPlane');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                label: '# of Votes',
                data: [12, 50],
            }]
        },
    });
</script>


<script>
    const cta = document.getElementById('chartDesign');

    new Chart(cta, {
        type: 'doughnut',
        data: {
            datasets: [{
                label: '# of Votes',
                data: [2, 3],
                borderWidth: 1
            }]
        },

    });
</script>

<script>
    const ctb = document.getElementById('chartDev');

    new Chart(ctb, {
        type: 'doughnut',
        data: {
            datasets: [{
                label: '# of Votes',
                data: [3, 5],
            }]
        },

    });
</script>

<script>
    new Chart(document.getElementById("horizontal-bar-chart"), {
        type: 'bar',
        data: {
            labels: ["Elephant", "Horse", "Tiger", "Lion", "Jaguar"],
            datasets: [{
                label: "Animals count",
                backgroundColor: ["#196F3D", "#1E8449",
                    "#229954", "#27AE60", "#52BE80"
                ],
                data: [478, 267, 829, 1732, 1213]
            }]
        },
        options: {
            indexAxis: 'y',
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Chart JS Horizontal Bar Chart Example'
            }
        }
    });
</script>
</script>