<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<?= $head ?>
	<body>
		<?= $nav ?>
		<div class="container">
			<div class='row'>
				<div class='col s12'>
				<div class="card">
					<div class="card-content">
						<span class="card-title"><?= $title ?></span>
						<form class='row' action='<?= $action ?>' method='POST'>
							<?php if( isset($alumno) AND isset($alumno->matricula) ) : ?>
							<input name='matricula' type='hidden' value='<?= $alumno->matricula ?>'>
							<?php endif; ?>
							<div class="input-field col s12">
								<input id="nombre" type="text" class="validate" name='nombre' <?= ( isset($alumno) AND isset($alumno->nombre) ) ? "value='{$alumno->nombre}'" : ""  ?> >
								<label for="nombre">Nombre</label>
							</div>
							<div class="input-field col s6">
								<input id="apat" type="text" class="validate" name='apat' <?= ( isset($alumno) AND isset($alumno->apat) ) ? "value='{$alumno->apat}'" : ""  ?> >
								<label for="apat">Ap. Paterno</label>
							</div>
							<div class="input-field col s6">
								<input id="amat" type="text" class="validate" name='amat' <?= ( isset($alumno) AND isset($alumno->amat) ) ? "value='{$alumno->amat}'" : ""  ?> >
								<label for="amat">Ap. Materno</label>
							</div>
							<div class="input-field col s4">
								<select name='genero'>
									<option disabled selected>Elija una opcion</option>
									<option value="M" <?= ( isset($alumno) AND isset($alumno->genero) AND $alumno->genero == 'M') ? "selected" : ""  ?> >Hombre</option>
									<option value="F" <?= ( isset($alumno) AND isset($alumno->genero) AND $alumno->genero == 'F') ? "selected" : ""  ?> >Mujer</option>
								</select>
								<label>Genero</label>
							</div>
							<div class="input-field col s4">
								<input type="date" name='fnacimiento' <?= ( isset($alumno) AND isset($alumno->fnacimiento) ) ? "value='{$alumno->fnacimiento}'" : ""  ?> >
								<label for="fnacimiento">Fecha de nacimiento</label>
							</div>
							<div class="input-field col s4">
								<input id="grado" type="number" class="validate" name='grado' <?= ( isset($alumno) AND isset($alumno->grado) ) ? "value='{$alumno->grado}'" : ""  ?> >
								<label for="grado">Grado</label>
							</div>
							<div class='col s12'>
								<button class="btn waves-effect waves-light" type="submit">Guardar
    								<i class="material-icons right">person_add</i>
 	 							</button>
								<a href='<?= base_url() ?>'>Regresar</a>
							</div>
						</form>
        			</div>
      			</div>
			</div>
		</div>
			<span class='card'></span>
		</div>
		<script src='/redefectiva/assets/home.js'></script>
	</body>
</html>