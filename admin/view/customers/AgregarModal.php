<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">

				<center>
					<h4 class="modal-title" id="myModalLabel">Nuevo Paciente</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="card-body">
						<form method="POST" autocomplete="off" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-group-default">
										<label>No. DE EXPEDIENTE</label>
										<input name="dnipa" type="text" required class="form-control" maxlength="8" placeholder="Ingrese No. de expediente" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group form-group-default">
										<label>Nombre Completo</label>
										<input name="nombre" type="text" class="form-control" required placeholder="Ingrese nombre">
									</div>
								</div>
								<!--
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Apellidos</label>
								<input name="apellidop" type="text" class="form-control" required placeholder="Ingrese apellidos">
							</div>
						</div>
						-->
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Seguro</label>
										<select class="form-control" name="seguro">
											<option value="Si">Si</option>
											<option value="No">No</option>

										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Telefono</label>
										<input name="tele" type="text" class="form-control" required maxlength="9" placeholder="Ingrese telefono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Sexo</label>
										<select class="form-control" name="sexo">
											<option value="Masculino">Masculino</option>
											<option value="Femenino">Femenino</option>

										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Usuario</label>
										<input name="usuario" type="text" class="form-control" required placeholder="Ingrese usuario">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Password</label>
										<input name="clave" type="password" class="form-control" required placeholder="Ingrese password">
									</div>
								</div>

							</div>

					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" name="agregar" class="btn" style="background-color: rgb(227, 6, 19); color:white;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
					</form>
				</div>

			</div>

		</div>

	</div>
</div>
</div>
<!-- -->