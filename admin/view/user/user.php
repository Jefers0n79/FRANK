<?php
// Se prendio esta mrd :v
session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2) {
	/*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
	header('location: ../../login.php');
}
$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>PANEL DE CLIENTE</title>
	<link rel="icon" href="../../assets/img/logo2.png" type="image/x-icon" />
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- Segmentos de codigo universales -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script>
		$(function() {
			$('#menu').load("../../view/global/userHeader.php");
		})
	</script>
	<!-- Segmentos de codigo universales -->

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>

<body>

	<div class="wrapper">

		<!-- Menu Area -->
		<div id="menu"></div>
		<!-- Menu Area -->

		<div class="main-panel" style="background-color:rgb(235,235,235);">
			<div class="content">
				<div class="panel-header" style="background-color: rgb(42,42,42);">
					<div class="page-inner py-4">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white fw-bold">PERFIL DEL CLIENTE</h2>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8">
						<div class="card card-with-nav">
							<div class="card-header">
								<div class="row row-nav-line">
									<ul class="nav nav-tabs nav-line nav-color-secondary w-100 pl-3" role="tablist">


										<li class="nav-item submenu"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Perfil</a> </li>

									</ul>
								</div>
							</div>
							<?php
							function connect()
							{
								return new mysqli("localhost", "root", "", "proyecto_final");
							}
							$con = connect();

							$sql = "SELECT * FROM customers  WHERE codpaci= '$id'";

							$query  = $con->query($sql);
							$data =  array();
							if ($query) {
								while ($r = $query->fetch_object()) {
									$data[] = $r;
								}
							}

							?>
							<?php if (count($data) > 0) : ?>
								<?php foreach ($data as $d) : ?>
									<div class="card-body">
										<div class="row mt-3">
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>EXPEDIENTE</label>
													<input type="text" class="form-control" value="<?php echo $d->dnipa; ?>" name="dnipa" placeholder="EXPEDIENTE" placeholder="77764664" disabled>
												</div>
											</div>
											<div class="col-md-8">
												<div class="form-group form-group-default">
													<label>Nombre Completo</label>
													<input type="email" class="form-control" value="<?php echo $d->nombre; ?>" name="nombrep" placeholder="Nombre" disabled>
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Seguro</label>
													<select class="form-control" value="<?php echo $d->seguro; ?>" name="seguro" id="seguro" disabled>
														<option value="<?php echo $d->seguro; ?>"><?php echo $d->seguro; ?></option>
														<option value="Si">Si</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Sexo</label>
													<select class="form-control" value="<?php echo $d->sexo; ?>" name="sexo" id="sexo" disabled>
														<option value="<?php echo $d->sexo; ?>"><?php echo $d->sexo; ?></option>
														<option>Female</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Telefono</label>
													<input type="text" class="form-control" value="<?php echo $d->tele; ?>" name="tele" placeholder="Phone" disabled>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Usuario</label>
													<input type="text" class="form-control" value="<?php echo $d->usuario; ?>" name="usuario" placeholder="Usuario" disabled>
												</div>
											</div>
										</div>

										<div class="message">
											<p class="alert alert-warning">Para editar su informacion, acuda con su doctor y pidale actualizarlos.</p>
										</div>

									</div>

								<?php endforeach; ?>

							<?php else : ?>
								<p class="alert alert-warning">No hay datos</p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-profile">
							<div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
								<div class="profile-picture">
									<div class="avatar avatar-xl">
										<img src="../../assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
									</div>
								</div>
							</div>

							<div class="card-body">
								<div class="user-profile text-center">
									<div class="name"><?php echo $d->nombre; ?></div>
									<div class="job">Cliente</div>
									<!--
									<div class="social-media">
										<a class="btn btn-info btn-twitter btn-sm btn-link" href="#">
											<span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
										</a>
										<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
											<span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span>
										</a>
										<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#">
											<span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span>
										</a>
										<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
											<span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span>
										</a>
									</div>
									-->
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

		</div>

		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->


	<!-- jQuery Vector Maps -->
	<script src="../../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo.js"></script>
	<script src="../../assets/js/demo.js"></script>
	<script>
		Circles.create({
			id: 'circles-1',
			radius: 45,
			value: 60,
			maxValue: 100,
			width: 7,
			text: <?php echo  $total; ?>,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-2',
			radius: 45,
			value: 70,
			maxValue: 100,
			width: 7,
			text: <?php echo  $total2; ?>,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-3',
			radius: 45,
			value: 40,
			maxValue: 100,
			width: 7,
			text: <?php echo  $total3; ?>,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets: [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines: {
							drawBorder: false,
							display: false
						}
					}],
					xAxes: [{
						gridLines: {
							drawBorder: false,
							display: false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>

</html>