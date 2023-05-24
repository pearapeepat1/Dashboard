<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/js/css/app.css">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<meta charset="utf-8">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="../assets/js/css/argon-dashboard.css">
	<link rel="stylesheet" href="../assets/js/css/app.css">
	<link rel="stylesheet" href="../assets/js/css/app.scss">
	<link rel="stylesheet" href="../assets/js/css/style.css">
	<link rel="shortcut icon" href="../assets/js/img/icons/icon-48x48.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

	<title>Project Dashboard</title>

</head>

<body onload="pageLoad()">

	<div class="wrapper">
		{slide_bar}
		<div class="main bg">

			{page_content}
			{footer}
		</div>
	</div>
	<script>
		const API_URL = 'http://172.21.64.115/APIDashboardProject/';

		function base_url(url) {
			return '<?php echo $base_url; ?>' + url;
		}
	</script>
	<script>
		function pageLoad() {
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
				if (result.dismiss === Swal.DismissReason.timer) {
					console.log('I was closed by the timer')
				}
			})
		}
	</script>
	<script src="../assets/js/js/app.js"></script>
	<script src="../assets/js/js/table.js"></script>
	<script src="../assets/js/js/chart.js"></script>
	<script src="../assets/js/js/pieChart.js"></script>
	<script src="../assets/js/js/barChart.js"></script>
	<script src="../assets/js/js/login.js"></script>
	<script src="../assets/js/js/calender.js"></script>
	<script src="../assets/js/js/btnSwitch.js"></script>
	<script src="../assets/js/js/mulSelect.js"></script>
	<script src="../assets/js/js/jquery.min.js"></script>
	<script src="../assets/js/js/popper.js"></script>
	<script src="../assets/js/js/bootstrap.min.js"></script>
	<script src="../assets/js/js/main.js"></script>
	<script src="../assets/js/js/getData.js"></script>
	<script src="../assets/js/js/insertData.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js" integrity="sha512-mlz/Fs1VtBou2TrUkGzX4VoGvybkD9nkeXWJm3rle0DPHssYYx4j+8kIS15T78ttGfmOjH0lLaBXGcShaVkdkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


	{another_js}
</body>

</html>