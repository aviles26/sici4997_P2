<div class="row">
    
			<div class="col-sm-1">
			&nbsp;
			</div>
            
        <div class="col-sm-10">

<div class="panel panel-default">
  <div class="panel-heading">
  <h2 class="panel-title">Recordatorio</h2>
  </div>
  
<?php

// Read from DB

$data = [];

$data[] = [''];

showSuccess('Recuerda: Confirma tu matrícula');
showSuccess('Recuerda: Turno de Matricula es: ');

foreach($data as $rec) {
    echo "<tr>
		<class>$rec[0]</class>
		</tr>";
}
?>

</div>

  </div>
</div>

<div class="col-sm-1">
			&nbsp;
			</div>

</div>


