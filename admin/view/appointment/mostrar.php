<?php
// Se prendio esta mrd :v
session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1) {
	/*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
	header('location: ../login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>PANEL ADMINISTRATIVO - CITAS</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/logo2.png" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../assets/css/fonts.min.css']
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
			$('#menu').load("../view/global/adminHeader.php");
		})
	</script>
	<!-- Segmentos de codigo universales -->

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>

	<div class="wrapper">

		<!-- Menu Area -->
		<div id="menu"></div>
		<!-- Menu Area -->

		<div class="main-panel" style="background-color:rgb(235,235,235);">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Citas</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="../view/admin/admin.php">
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
									<div class="d-flex align-items-center">
										<h4 class="card-title">Mostrar</h4>

										<a href="#addRowModal" class="btn btn-round ml-auto" data-toggle="modal" style="background-color: rgb(227, 6, 19); color:white;">Nuevo</a>
										<?php include('AgregarModal.php'); ?>
									</div>
									<!--
									<div class="card-tools">
										<a href="../view/appointment/reporte.php" class="btn btn-info btn-border btn-round btn-sm mr-2">
											<span class="btn-label">
												<i class="fa fa-pencil"></i>
											</span>
											Export
										</a>
									</div>
									-->
									<div class="card-body">


										<div class="table-responsive">
											<table id="add-row" class="display table table-striped table-hover">
												<thead>
													<tr>
														<th>#</th>
														<th>Fecha</th>
														<th>Hora</th>
														<th>Paciente</th>
														<th>Medico</th>
														<th>Consultorio</th>
														<th>Estado</th>

														<th style="width: 2%">Action</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>#</th>
														<th>Fecha</th>
														<th>Hora</th>
														<th>Paciente</th>
														<th>Medico</th>
														<th>Consultorio</th>
														<th>Estado</th>
														<th>Action</th>
													</tr>
												</tfoot>


												<tbody>
													<?php
													foreach ($dato as $key => $value) {
														foreach ($value as $va) { ?>
															<tr>
																<td><?php echo $va['codcit']; ?></td>
																<td><?php echo $va['dates']; ?></td>
																<td><?php echo $va['hour']; ?></td>
																<td><?php echo $va['nombre']; ?></td>
																<td><?php echo $va['nomdoc']; ?></td>
																<td><?php echo $va['nombrees']; ?></td>


																<td>
																	<?php if ($va['estado'] == 1) { ?>
																		<form method="get" action="javascript:activo('<?php echo $va['codcit']; ?>')">

																			<span class="text-success pl-3">Atendido</span>
																		</form>
																	<?php  } else { ?>

																		<form method="get" action="javascript:inactivo('<?php echo $va['codcit']; ?>')">
																			<button type="submit" class="btn btn-danger btn-xs">Pendiente</button>
																		</form>
																	<?php  } ?>
																</td>

																<td>
																	<div class="form-button-action">

																		<button href="#deleteRowModal=<?php echo $va['codcit']; ?>" class="btn btn-link btn-danger btn-lg" data-toggle="modal" title="" data-original-title="Delete Task" data-target="#deleteRowModal<?php echo $va['codcit']; ?>">
																			<i class="fa fa-trash"></i>

																		</button>

																	</div>
																</td>

																<?php include('editar.php'); ?>

															</tr>
													<?php
														}
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

		</div>

	</div>
	<!--   Core JS Files   -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="../assets/js/functions4.js"></script>
	<script src="../assets/js/functions5.js"></script>
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo2.js"></script>
	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>

	<script>
		function activo(codcit) {
			var id = codcit;
			$.ajax({
				type: "GET",
				url: "../assets/ajax/editar_estado_activo_cita.php?id=" + id,
			}).done(function(data) {
				window.location.href = '../folder/appointment.php';
			})

		}

		// Editar estado inactivo
		function inactivo(codcit) {
			var id = codcit;
			$.ajax({
				type: "GET",
				url: "../assets/ajax/editar_estado_inactivo_cita.php?id=" + id,
			}).done(function(data) {
				window.location.href = '../folder/appointment.php';
			})
		}
	</script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	<!--------------------------------script nuevo--------------------------------------------------->

	<?php
	if (isset($_POST["agregar"])) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "proyecto_final";

		// Creamos la conexión
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Revisamos la conexión
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$dates = $_POST['dates'];
		$hour = $_POST['hour'];
		$codpaci = $_POST['codpaci'];
		$coddoc = $_POST['coddoc'];
		$codespe = $_POST['codespe'];

		// Realizamos la consulta para saber si coincide con uno de esos criterios
		$sql = "select * from appointment where codcit='$codcit'";
		$result = mysqli_query($conn, $sql);
	?>


		<?php
		// Validamos si hay resultados
		if (mysqli_num_rows($result) > 0) {
			// Si es mayor a cero imprimimos que ya existe el usuario

			if ($result) {
		?>

				<script type="text/javascript">
					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Ya existe el registro a agregar!'

					})
				</script>

				<?php
			}
		} else {
			// Si no hay resultados, ingresamos el registro a la base de datos
			$sql2 = "INSERT INTO appointment(dates,hour,codpaci,coddoc,codespe,estado)VALUES ('$dates','$hour','$codpaci','$coddoc','$codespe','0')";


			if (mysqli_query($conn, $sql2)) {

				if ($sql2) {
				?>

					<script type="text/javascript">
						Swal.fire({
							position: 'top-end',
							icon: 'success',
							title: 'Agregado correctamente',
							showConfirmButton: false,
							timer: 1500
						}).then(function() {
							window.location = "../folder/appointment.php";
						});
					</script>

				<?php
				} else {
				?>
					<script type="text/javascript">
						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							text: 'No se pudo guardar!'

						})
					</script>
	<?php

				}
			} else {

				echo "Error: " . $sql2 . "" . mysqli_error($conn);
			}
		}
		// Cerramos la conexión
		$conn->close();
	}
	?>
</body>

</html>