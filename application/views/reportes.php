<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<?= $head ?>
	<body>
		<?= $nav ?>
		<div class="container">
			<div class='row'>
                <div class='col s12'>&nbsp</div>
                <div class='col s3'>&nbsp</div>
                <div class="input-field col s6">
                    <select onchange='reporte.generate(this,event)'>
                        <option disabled selected>Seleccione</option>
                        <?php foreach($select as $option) : ?>
                        <option><?=$option->c_grado?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="last_name">Grado</label>
                </div>
                <div class='col s3'>&nbsp</div>
                <div class='col s12'>
                    <div class='card'>
                        <div class='card-content'>
                            <div id='rp_title' class='card-title'>---</div>
                            <div class='row'>
                                <span class='col s4 center' id='rp_altas'>Altas : 0</span>
                                <span class='col s4 center' id='rp_bajas'>Bajas : 0</span>
                                <span class='col s4 center' id='rp_total'>Total : 0</span>
                                <div class='col s12'>
                                    <h6>Lista de alumnos</h6>
                                    <ul id='alumlist' class='collection'>
                                        <li class='collection-item'>Eliga un grado de la lista</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
        </div>
		<script src='/redefectiva/assets/home.js'></script>
	</body>
</html>