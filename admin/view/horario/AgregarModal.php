<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">

				<center>
					<h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="card-body">

						<form method="POST" autocomplete="off" enctype="multipart/form-data">
							<div class="row">

								<div class="col-md-6 pr-0">
									<div class="form-group form-group-default">
										<label>Dias disponible</label>
										<input name="nomhor" required="" type="text" class="form-control" placeholder="Ingrese nombre">
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Medico</label>
										<select class="form-control" id="doctor" required="" name="coddoc">

										</select>
									</div>
								</div>

							</div>
							<div class="modal-footer">
								<button type="submit" name="agregar" class="btn" style="background-color: rgb(227, 6, 19); color:white;"><span class="glyphicon glyphicon-floppy-disk"></span> AGREGAR HORARIO</button>
								<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> CANCELAR</button>
							</div>
						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- -->