<div class="row">
    
			<div class="col-sm-1">
			&nbsp;
			</div>
            
        <div class="col-sm-10">
            
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Registro</h5>
    </div>
    
<?php

// Read from DB

$data = [];


$data[] = ['Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.'];

foreach($data as $rec) {
    echo "<tr>
		<td>$rec[0]</td>

		</tr>";
}

?>

  </a>
 
</div>
        </div>
    <div class="col-sm-1">
			&nbsp;
			</div>
</div>




