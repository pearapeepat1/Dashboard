<div class="container py-2">
	<div class="row py-2">
		<div class="col-lg-10">
			<h2 class="text-dark txt-b">Dashboard</h2>
		</div>
		<!--<div class="col-lg-6">
			<h6 class="text-right text-secondary"><span id="time"></span></h6>
		</div>-->
		<div class="col-lg-2">
			<select class="form-select" name="selDate" id="selDate">
				<option>Last 30 Day</option>
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
							<h4 class="my-1 text-info">25/100</h4>
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
							<h4 class="my-1 text-danger">85/90</h4>						</div>
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
							<h4 class="my-1 text-success">752 H</h4>
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
							<p class="mb-0 text-secondary"></p>
							<h4 class="my-1 text-warning"></h4>
							<p class="mb-0 font-13"></p>
						</div>
						<div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="bi bi-exclamation"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container py-2">
	<div class="row py-2">
		<div class="col-md-8">
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
							</select>
						</div>
					</div>
					<div class="py-3">
						<table id="example" class="display " style="width:100%">
							<thead>
								<tr>
									<th>Project Name</th>
									<th>Person in Charge</th>
									<th>Due Date</th>
									<th>Status </th>
									<th>Progress</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Project A</td>
									<td>Rapeepat Jaiboon</td>
									<td>16 may 2023</td>
									<td class="text-danger">Delayed</td>
									<td>
										<div class="pie animate no-round" style="--p:50;--c:red;--b:5px"> 50%</div>
									</td>
									<td><button type="button" class="btn btn-secondary"><i class="bi bi-info-circle"></i> Detail</button></td>
								</tr>
								<tr>
									<td>ProjectB</td>
									<td>Rapeepat Jaiboon</td>
									<td>16 may 2023</td>
									<td class="text-success">Completed</td>
									<td>
										<div class="pie animate no-round" style="--p:100;--c:lightgreen;--b:5px"> 100%</div>
									</td>
									<td><button type="button" class="btn btn-secondary"><i class="bi bi-info-circle"></i> Detail</button></td>
								</tr>
								<tr>
									<td>ProjectC</td>
									<td>Rapeepat Jaiboon</td>
									<td>16 may 2023</td>
									<td class="text-warning">In progress</td>
									<td>
										<div class="pie animate no-round" style="--p:30;--c:yellow;--b:5px">30%</div>
									</td>
									<td><button type="button" class="btn btn-secondary"><i class="bi bi-info-circle"></i> Detail</button></td>
								</tr>
								<tr>
									<td>ProjectD</td>
									<td>Rapeepat Jaiboon</td>
									<td>16 may 2023</td>
									<td class="text-success">Completed</td>
									<td>
										<div class="pie animate no-round" style="--p:100;--c:lightgreen;--b:5px"> 100%</div>
									</td>
									<td><button type="button" class="btn btn-secondary"><i class="bi bi-info-circle"></i> Detail</button></td>
								</tr>
								<tr>
									<td>ProjectE</td>
									<td>Rapeepat Jaiboon</td>
									<td>16 may 2023</td>
									<td class="text-danger">Delayed</td>
									<td>
										<div class="pie animate no-round" style="--p:50;--c:red;--b:5px"> 50%</div>
									</td>
									<td><button type="button" class="btn btn-secondary"><i class="bi bi-info-circle"></i> Detail</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h3 class="title txt-b text-secondary">Overall Progress</h3>
					<div class="chart chart-sm py-3">
						<canvas id="pieOverall" height="300" width="300"></canvas>
					</div>
					<div class="row py-3">
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