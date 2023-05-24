<!-- <div class="spinner-wrapper">
	<div id="page-loading">
		<div class="three-balls">
			<div class="ball ball1"></div>
			<div class="ball ball2"></div>
			<div class="ball ball3"></div>
		</div>
	</div>
</div> -->
<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<div class="container bg-dashboard">
<div class="container py-2">
	<div class="row py-2 ">
		<div class="col-lg-8">
			<h3 class="text-success txt-b " style="font-family: b Biger Over;">D a s h b o a r d</h3>
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
							<h3 class="title txt-b text-secondary ">Project Summary</h3>
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