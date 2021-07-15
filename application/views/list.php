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
                            <span class="card-title">Listado de alumnos</span>
                            <ul class='collection'>
                                <?php foreach($alumnos as $alumno) : ?>
                                <li class='collection-item'>
                                    <div><small><?= $alumno->grado ?>°</small> <?= "{$alumno->apat} {$alumno->amat} {$alumno->nombre}" ?>
                                        <a href='#' onclick='list.drop(this,event,<?=$alumno->matricula?>)' class='secondary-content red-text red-darken-4'>
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href='<?= base_url('home/edit/'.$alumno->matricula) ?>' class='secondary-content'>
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
        			    </div>
      			    </div>
			    </div>
		    </div>
        </div>
		<script src='/redefectiva/assets/home.js'></script>
	</body>
</html>