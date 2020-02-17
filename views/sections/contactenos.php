<section id="contact" class="bg-dark text-white">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<h2>Contactanos</h2>
				<form class="pt-4" method="post">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nombre">Nombre y apellido</label>
							<input type="text" class="form-control" required="" id="nombre" name="nombre">
						</div>
						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" class="form-control" required="" id="email" name="email">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="telefono">Numero de Telefono</label>
							<input type="tel" class="form-control" required="" id="telefono" name="telefono" pattern="[0-9]{10}">
						</div>
						<div class="form-group col-md-6">
							<label for="ciudad">Ciudad</label>
							<input type="text" class="form-control" required="" id="ciudad" name="ciudad">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="fechaInicial">Fecha de Inicio</label>
							<input type="date" class="form-control" required="" id="fechaInicial" name="fechaInicial">
						</div>
						<div class="form-group col-md-6">
							<label for="fechaFinal">Fecha de Finalización</label>
							<input type="date" class="form-control" required="" id="fechaFinal" name="fechaFinal">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="seleccion">¿En cual de nuestras cabañas estás interesado?</label>
							<select required="" id="seleccion" class="form-control" name="seleccion">
							    <option value="ELATE Azul (4 personas)">Elate Azul (4 personas)</option>
							    <option value="ELA del Mar (8 personas)">Ela del Mar (8 personas)</option>
							    <option value="Quisiera rentar las dos! (12 Personas)">Quisiera rentar las dos! (12 Personas)</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label for="transporte">¿Requieres transporte a nuestras cabañas?</label>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" id="transporteNo" name="transporte" value="NO" class="custom-control-input" checked="">
							  <label class="custom-control-label" for="transporteNo">No</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" id="transporteSi" name="transporte" value="SI" class="custom-control-input">
							  <label class="custom-control-label" for="transporteSi">Si</label>
							</div>
						</div>
					</div>
				    <div class="form-group">
				    	<label for="mensaje">Mensaje</label>
				    	<textarea class="form-control" id="mensaje" rows="3" required="" name="mensaje"></textarea>
				  	</div>

					<?php 


					$registro = ControladorFormularios::ctrSolicitud();

					if($registro == "ok"){

						echo '<script>
						if(window.history.replaceState){
							window.history.replaceState(null, null, window.location.href);
						}
						</script>';
						echo '<div class="alert alert-success"> EL usuario ha sido registrado</div>';
					}
					?>
					<button type="submit" class="btn btn-primary form-control">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</section>