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
	<title>PANEL DE CLIENTE - CITAS</title>
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

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Citas</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="../user/user.php">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>


							<li class="nav-item">
								<a href="#">Mostrar</a>
							</li>
						</ul>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Mis citas</h4>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>EXPEDIENTE</th>
													<th>Paciente</th>
													<th>Fecha</th>
													<th>Hora</th>
													<th>Medico</th>
													<th>Area Medica</th>
													<th style="width: 10%">Estado</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>#</th>
													<th>EXPEDIENTE</th>
													<th>Paciente</th>
													<th>Fecha</th>
													<th>Hora</th>
													<th>Medico</th>
													<th>Area Medica</th>
													<th>Estado</th>
												</tr>
											</tfoot>


											<tbody>
												<?php

												if (isset($_SESSION['id'])) {

													include "../config/conex.php";

													$sql = "SELECT appointment.codcit, appointment.dates, appointment.hour, customers.codpaci, 
															customers.dnipa, customers.nombre, doctor.coddoc, doctor.dnidoc, doctor.nomdoc, 
															doctor.apedoc, specialty.codespe, specialty.nombrees, appointment.estado FROM appointment INNER JOIN customers ON 
															appointment.codpaci=customers.codpaci INNER JOIN doctor ON appointment.coddoc=doctor.coddoc INNER JOIN specialty ON 
															appointment.codespe=specialty.codespe WHERE customers.codpaci='$id'";

													$query = mysqli_query($conex, $sql);
												?>

													<?php
													if (mysqli_num_rows($query) > 0) {
														while ($row = mysqli_fetch_assoc($query)) {
															?>
																<tr>
																	<td><?php echo $row['codcit']; ?></td>
																	<td><?php echo $row['dnipa']; ?></td>
																	<td><?php echo $row['nombre']; ?></td>

																	<td><?php echo $row['dates']; ?></td>
																	<td><?php echo $row['hour']; ?></td>

																	<td><?php echo $row['nombrees']; ?>&nbsp;<?php echo $row['apedoc']; ?></td>
																	<td><?php echo $row['nombrees']; ?></td>
																	<td>
																		<?php if ($row['estado'] == 1) { ?>
																			<form method="get" action="javascript:activo('<?php echo $row['codcit']; ?>')">
																				<span class="badge badge-success">Atendido</span>

																			</form>
																		<?php  } else { ?>

																			<form method="get" action="javascript:inactivo('<?php echo $row['codcit']; ?>')">

																				<span class="badge badge-danger">Pendiente</span>
																			</form>
																		<?php  } ?>
																	</td>
																</tr>
															<?php
														}
													} else {
														?>
															<div class="message">
																<p class="alert alert-warning">Por el momento, no cuenta con ninguna cita. Pronto su medico agendara una por usted.</p>
															</div>
														<?php
													}
													?>

												<?php
												} else {
													header('location:mostrar.php');
												}
												?>

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
		<!--   Core JS Files   -->

		<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
		<script src="../../assets/js/core/popper.min.js"></script>
		<script src="../../assets/js/core/bootstrap.min.js"></script>
		<!-- jQuery UI -->
		<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
		<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

		<!-- jQuery Scrollbar -->
		<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
		<!-- Datatables -->
		<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
		<!-- Atlantis JS -->
		<script src="../../assets/js/atlantis.min.js"></script>
		<!-- Atlantis DEMO methods, don't include it in your project! -->
		<script src="../../assets/js/setting-demo2.js"></script>



</body>

</html>