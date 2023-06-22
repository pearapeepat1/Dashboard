<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<div class="container py-2 " id="detailDashboard">
	<div class="container bg-white raduis-div detailPage">
		<div class="row py-4">
			<div class="col-sm-2">
				<center><i class="bi bi-question-circle-fill fs-3 text-success" data-bs-toggle="modal" data-bs-target="#ModalWi"></i></center>
			</div>
			<div class="col-sm-8">
				<div class="row">
					<center>
						<h1 class="text-dark txt-b txt-shadow-head"><span class="text-success ">P&nbsp;R&nbsp;O&nbsp;J&nbsp;E&nbsp;C&nbsp;T</span>&nbsp;<span class="text-secondary txt-shadow-head">S&nbsp;U&nbsp;M&nbsp;M&nbsp;A&nbsp;R&nbsp;Y</span>&nbsp; <span class="text-success txt-shadow-head">D E T A I L</span></h1>
					</center>
				</div>
				<div class="row">
					<center>
						<h1 class="text-primary-emphasis txt-b txt-shadow-head"><span class="projectName text-primary-emphasis text-uppercase" id="ProjectName">Project Name</span></h1>
					</center>
				</div>
			</div>
			<div class="col-sm-2">
				<a href="dashboard"> <button type="button" class="btn btn-secondary"><i class="bi bi-house"></i> Home</button></a>
			</div>
		</div>
		
		<div class="row ">
			<div class="col-sm-4">
				<div class="row py-4">
					<center>
						<div class="text-uppercase txt-shadow-head fs-2"><span class="text-success">O v e r a l l</span></div>
					</center>
				</div>
				<div class="row py-3" id="Overall">

				</div>
				<div class="row py-3" id="projectStatus">

				</div>
			</div>
			<div class="col-sm-2">
				<ul class="showData">

				</ul>
			</div>
			<div class="col-sm-6">
				<ul class="step-progress">
					
				</ul>
			</div>

		</div>

	</div>


</div>


<!-- Modal -->
<div class="modal fade" id="ModalWi" data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content border-start border-5 border-5 border-success">
			<div class="modal-header">
					<center>
						<div class="text-uppercase txt-shadow-head fs-2"><span class="text-success text-uppercase">e x p l a i n</span></div>
					</center>
				<h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row py-2">
					<div class="col-sm-2">
						<img src="https://cdn-icons-png.flaticon.com/512/1828/1828231.png" width="50px">
					</div>
					<div class="col-sm">
						<h5 class="text-dark txt-b">This Step Development </h5>
					</div>
				</div>
				<div class="row py-2">
					<div class="col-sm-2">
						<img src="https://cdn-icons-png.flaticon.com/512/1027/1027650.png" width="50px">
					</div>
					<div class="col-sm">
						<h5 class="text-dark txt-b">This Step Waiting For Edit</h5>
					</div>
				</div>
				<div class="row py-2">
					<div class="col-sm-2">
						<img src="https://cdn0.iconfinder.com/data/icons/shift-free/32/Complete_Symbol-512.png" width="50px">
					</div>
					<div class="col-sm">
						<h5 class="text-dark txt-b">This Step Completed</h5>
					</div>
				</div>
				<div class="row py-2">
					<div class="col-sm-2">
						<img src="https://cdn-icons-png.flaticon.com/128/6814/6814082.png" width="50px">
					</div>
					<div class="col-sm">
						<h5 class="text-dark txt-b">This Step Delayed</h5>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>