
<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<div class="container background-dashboard  " id="DashboardHome">
	<div class="py-2">
		<div class="row py-2 ">
			<div class="col-lg-8">
				<h1 class="text-success txt-b txt-shadow-head ">D A S H B O A R D</h1>
			</div>
			<div class="col-lg-2">
				<h1 class="text-right text-secondary">
					</p>
				</h1>
			</div>
			<div class="col-lg-2">
				<!-- <select class="form-select" name="selDate" id="selDate">
					<option value="24">All Day</option>
					<option value="30">Last 30 Day</option>
					<option value="15">Last 15 Day</option>
					<option value="7">Last 7 Day</option>
				</select> -->
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
	<div >
		<div class="row ">
			<div class="col-lg-8">
				<div class="bg-white raduis-div">
					<div class="card-body">
						<div class="">
							<div class="row py-3">
								<div class="col-lg-4">
									<!-- <h3 class="title txt-b text-secondary">Project Summary</h3> -->
									<h3 class="txt-b text-secondary">Project&nbsp;Summary</h3>
								</div>
								<div class="col-sm-3">
									<select class="form-select" name="selName" id="selName">
										<option value="">All Project</option>
									</select>
								</div>
								<div class="col-sm-3">
									<select class="form-select selPerson" name="selPerson" id="selPerson">
										<option value="">All Leader</option>
									</select>
								</div>
								<div class="col-sm-2">
									<select class="form-select" name="selStatus" id="selStatus">
										<option value="">All Status</option>
									</select>
								</div>
							</div>
							<div class="py-3">
								<table id="table-master" class="display table-borderless " style="width:100%">
									<thead>
										<tr>
											<th style="display:none;">#</th>
											<th class="text-center">Project Name</th>
											<th class="text-center">Leader</th>
											<th class="text-center">Deadline</th>
											<th class="text-center">Status </th>
											<th class="text-center">Progress</th>
											<th class="text-center">Detail</th>
										</tr>
									</thead>
									<tbody id="tbody">
										<!-- <tbody> -->

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-4">
				<div class="row ">
					<div class="bg-white raduis-div">
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
										<center class="fs-6">Total</center>
									</div>
								</div>
								<div class="col ">
									<div class="row">
										<center>
											<h4 class="txt-b text-success" id="pjCompleted"></h4>
										</center>
									</div>
									<div class="row">
										<center>Completed</center>
									</div>
								</div>
								<div class="col">
									<div class="row">
										<center>
											<h4 class="txt-b text-warning" id="pjinProgres"></h4>
										</center>
									</div>
									<div class="row">
										<center>In&nbsp;Progres</center>
									</div>
								</div>
								<div class="col">
									<div class="row">
										<center>
											<h4 class="txt-b text-danger" id="pjDelayed"></h4>
										</center>
									</div>
									<div class="row ">
										<center>Delayed</center>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div><br><br>
	</div>
</div>



</div>
</div>

</div>
</div>
<!-- <script>
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
</script> -->


