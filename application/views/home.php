<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<div class="container bg-dashboard " id="DashboardHome">
	<div class="container py-2">
		<div class="row py-2 ">
			<div class="col-lg-8">
				<h3 class="text-success txt-b txt-shadow-head " style="font-family: b Biger Over;">D a s h b o a r d</h3>
			</div>
			<div class="col-lg-2">
				<h1 class="text-right text-secondary">
					</p>
				</h1>
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
								<p class="mb-0 text-secondary txt-b">Time Spent/H</p>
								<h4 class="my-1 text-success txt-b" id="sumTime"></h4>
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
		<div class="row ">
			<div class="col-lg-8">
				<div class="bg-white raduis-div">
					<div class="card-body">
						<div class="container">
							<div class="row py-3">
								<div class="col-lg-4">
									<!-- <h3 class="title txt-b text-secondary">Project Summary</h3> -->
									<h3 class="txt-b text-secondary">Project&nbsp;Summary</h3>
								</div>
								<div class="col-lg-3">
									<select class="form-select " name="selName" id="selName">
										<option>All Project</option>
									</select>
								</div>
								<div class="col-lg-3">
									<select class="form-select" name="selPerson" id="selPerson">
										<option>All Person in charge</option>
									</select>
								</div>
								<div class="col-lg-2">
									<select class="form-select" name="selStatus" id="selStatus">
										<option value="01">All Status</option>
									</select>
								</div>
							</div>
							<div class="py-3">
								<table id="table-master" class="display table-borderless " style="width:100%">
									<thead>
										<tr>
											<th style="display:none;">#</th>
											<th>Project Name</th>
											<th>Project Leader</th>
											<th>Due Date</th>
											<th>Status </th>
											<th>Progress</th>
											<th>Detail</th>
										</tr>
									</thead>
									<tbody id="tbody">
										<!--<tr>
									<td>Project A</td>
									<td>Rapeepat Jaiboon</td>
									<td>16 may 2023</td>
									<td class="text-danger">Delayed</td>
									<td>
										<div class="pie animate no-round" style="--p:50;--c:red;--b:5px"> 50%</div>
									</td>
									<td><button type="button" class="btn btn-secondary"><i class="bi bi-info-circle"></i> Detail</button></td>
								</tr>-->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<h3 class="title txt-b text-secondary">Overall Progress</h3>
						<div class="chart-container" style="position: relative; ">
							<canvas id="pieOverall"></canvas>
						</div>
						<div class="row ">
							<div class="col">
								<div class="row">
									<center>
										<h4 class="txt-b" id="sumProjecT"></h4>
									</center>
								</div>
								<div class="row">
									<center>Total Project</center>
								</div>
							</div>
							<div class="col ">
								<div class="row">
									<center>
										<h4 class="txt-b text-success" id="pjCompleted"></h4>
									</center>
								</div>
								<div class="row">
									<center>Project Completed</center>
								</div>
							</div>
							<div class="col">
								<div class="row">
									<center>
										<h4 class="txt-b text-warning" id="pjinProgres"></h4>
									</center>
								</div>
								<div class="row">
									<center>Project in Progres</center>
								</div>
							</div>
							<div class="col">
								<div class="row">
									<center>
										<h4 class="txt-b text-danger" id="pjDelayed"></h4>
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
	</div>
</div>


<div class="container py-2 " id="detailDashboard">
	<div class="container bg-dashboard">
		<div class="row py-4">
			<div class="col-lg-2">
				<center>
					<h2 class="my-1 text-success txt-b"><span id="ralTime"></span></h2>
				</center>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<center>
						<h3 class="text-dark txt-b txt-shadow-head" style="font-family: b Biger Over;"><span class="text-success ">P r o j e c t</span>&nbsp; <span class="text-secondary txt-shadow-head">S u m m a y</span>&nbsp; <span class="text-success txt-shadow-head">D e t a i l</span></h3>
					</center>
				</div>
				<div class="row">
					<center>
						<h3 class="text-dark txt-b txt-shadow-head"><span class="projectName text-dark">Dashboard management</span></h3>
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
					<div class="col-lg-2 text-success txt-b txt-shadow-head">
						<i class="bi bi-flag-fill"></i> Completed
					</div>
				</div>
				<div class="row py-3  ">
					<div class="col-lg-3 card bg-white set-pading"><br>
						<center>
							<h5 class="text-success  txt-b txt-shadow-head" style="font-family: b Biger Over;">P l a n n i n g </h5>
						</center>
						<div id="chartPlane"></div>
						<div class=" badge text-bg-success "><i class="bi bi-check-circle-fill"></i> Completed</div>
					</div>
					<div class="col-lg-3 card bg-white set-pading-crad"><br>
						<center>
							<h5 class="text-success txt-b txt-shadow-head" style="font-family: b Biger Over;">D e s i g n</h5>
						</center>
						<div id="chartDesign"></div>
						<div class=" badge text-bg-warning "><i class="bi bi-patch-exclamation-fill"></i> in progess</div>
					</div>
					<div class="col-lg-3 bg-white card set-pading-crad"><br>
						<center>
							<h5 class="text-success txt-b txt-shadow-head" style="font-family: b Biger Over;">D e v e l o p</h5>
						</center>
						<div id="chartDev"></div>
						<div class=" badge text-bg-warning "><i class="bi bi-patch-exclamation-fill"></i> in progess</div>
					</div>
					<div class="col-lg-2 bg-white card set-pading-crad"><br>
						<center>
							<h5 class="text-success txt-b txt-shadow-head" style="font-family: b Biger Over;">T e s t</h5>
						</center>
						<div id="chartTest"></div>
						<div class=" badge text-bg-warning  set-test-top"><i class="bi bi-patch-exclamation-fill"></i> in progess</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<center><br>
						<h5 class="text-success  txt-b txt-shadow-head" style="font-family: b Biger Over;">O v e r a l l</h5>
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
						<table id="tblStap" class="display" style="width:100%">
							<thead>
								<tr>
									<th>code</th>
									<th>Stap project</th>
									<th>Name</th>
									<th>Name</th>
									<th>Name</th>
								</tr>
							</thead>
							<tbody id="tbodyStap">

							</tbody>
						</table>

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
<script>
	var y = document.getElementById("detailDashboard");
	y.style.display = "none";
	$(document).on('click', '.btnDetail', function() {
		let timerInterval
		Swal.fire({
			title: 'Plese wait!',
			html: '<div class="spinner-grow text-primary" role="status"> <span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-secondary" role="status"> <span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-success" role="status"> <span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-danger" role="status"> <span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-warning" role="status"> <span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-info" role="status"> <span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-light" role="status"> <span class="visually-hidden">Loading...</span></div><div class="spinner-grow text-dark" role="status"> <span class="visually-hidden">Loading...</span></div><br>I will close in <b></b> milliseconds.',
			timer: 2000,
			timerProgressBar: true,
			didOpen: () => {
				Swal.showLoading()
				const b = Swal.getHtmlContainer().querySelector('b')
				timerInterval = setInterval(() => {
					b.textContent = Swal.getTimerLeft()
				}, 200)
			},
			willClose: () => {
				clearInterval(timerInterval)
			}
		}).then((result) => {
			/* Read more about handling dismissals below */
			var x = document.getElementById("DashboardHome");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
				y.style.display = "block";
			}
			if (result.dismiss === Swal.DismissReason.timer) {

			}
		})


	})
</script>
<!-- <script>
    function hideDetail() {
        var x = document.getElementById("detailDashboard");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script> -->
<!-- <?php
		$value = 1;
		if ($value == 00) {
			$color = 'yellow';
		} elseif ($value == 11) {
			$color = 'green';
		} else {
			$color = 'red';
		}
		?>
<div style="color:<?= $color ?>;">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.
</div> -->

<!--<div class="pie" style="--p:20"> 20%</div>
<div class="pie" style="--p:50;--c:lightgreen;--b:10px"> 50%</div>
<div class="pie no-round" style="--p:60;--c:purple;--b:15px"> 60%</div>
<div class="pie animate" style="--p:80;--c:orange;"> 80%</div>
<div class="pie animate no-round" style="--p:90;--c:lightgreen"> 90%</div>-->


<!--<div class="row py-3" >

		<div class="col-md-3 ">
			<div class="card " id="sumProject" style="width: 18rem;">
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
		<div class="col-md-3 ">
			<div class="card" id="sumPerson" style="width: 18rem;">
				<div class="card-body" >
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
		<div class="col-md-3 ">
			<div class="card" id="sumTimes" style="width: 18rem;">
				<div class="card-body" >
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
		<div class="col-md-3 ">
			<div class="card" style="width: 18rem;">
				<div class="card-body" tabindex="3">
					<h5 class="card-title text-white">Tasks</h5>
					<div class="row">
						<div class="col-lg-9">
							<h2 class="txt-b text-white">100/110</h2>
						</div>
						<div class="col-lg-3">
							<i class="bi bi-bookmark-check-fill fa-2x text-white"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->


<!--<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Multiselect #04</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
					<select class="selectpicker" multiple>
	          <option>Toronto</option>
	          <option>Bucharest</option>
	          <option>Paris</option>
	        </select>
				</div>
			</div>
		</div>
	</section>-->