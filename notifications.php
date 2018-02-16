<!--Tabla de cursos seleccionados -->
    	<div class="row">
			<div class="col-sm-1">
			&nbsp;
			</div>
			<div class="col-sm-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">NOTIFICACIONES </h2>
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
							</tr>
						</thead>
						<tbody>
    
<?php
// Read from DB
$records = getResultFromSQL("SELECT * FROM notifications"); //INSERT my_courses

foreach($records as $rec) {
    echo "<tr>
		<td>{$rec['notifications']}</td>
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




