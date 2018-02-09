<!--Tabla de Seleccion de seleccionados -->
    	<div class="row">
			<div class="col-sm-1">
			&nbsp;
			</div>
			<div class="col-sm-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">SELECCION DE CURSOS </h2>
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th></th>
								<th>CURSO</th>
								<th>TITULO</th>
								<th>GRADO</th>
								<th>CREDITOS</th>
								<th>DIAS</th>
								<th>HORA</th>
								<th>EDIFICIO</th>
								<th>SALON</th>
							</tr>
						</thead>
						<tbody>

<?php

// Read from DB
$records = getResultFromSQL("SELECT * FROM courses"); //INSERT my_courses

foreach($records as $rec) {
    echo "<tr>
		<td><a class=\"btn btn-default btn-sm\" href=\"mycourses.php?a=addCourse&id={$rec['id_courses']}\"><span class=\"glyphicon glyphicon-plus\"></span> Añadir</a></td>
		<td>{$rec['seccion']}</td>
		<td>{$rec['title']}</td>
		<td>{$rec['grade']}</td>
		<td>{$rec['credits']}</td>
		<td>{$rec['days']}</td>
		<td>{$rec['hours']}</td>
		<td>{$rec['place']}</td>
		<td>{$rec['room']}</td>
		</tr>"; 
}
?>				

						</tbody>
					</table>
				</div>
			</div>
			<div class="col-sm-1">
			&nbsp;
			</div>
	</div>  



