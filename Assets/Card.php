<?php	
	
	function createCardActividad($titulo, $region, $idActividad){
		echo "<div class='item'>".
			"<div class='work_item'>".
				"<div class='work_img'>".
	  				"<center><img src='images/actividad1.png' width='130' height='130' alt=''></center>".
	  			"</div>".
				"<div class='card-block' id='".$idActividad."''>".
					"<h4 class='card-title'>".$titulo."</h4>".
					"<p class='card-text'>".$region."</p>".
				"</div>".
				"<div class='work_description'>".
					"<div class='work_descr_cont'>".
						"<a href'#' class='btn'>Ver detalles</a>".
					"</div>".
				"</div>".  						
			"</div>".
		"</div>";
	}		

	function createCardTarea($nombre, $idTarea, $detalle){
		echo "<div class='item'>".
			"<div class='work_item'>".
				"<div class='work_img'>".
	  				"<center><img src='images/actividad1.png' width='130' height='130' alt=''></center>".
	  			"</div>".
				"<div class='card-block' id='".$idTarea."''>".
					"<h4 class='card-title'>".$nombre."</h4>".
					"<p class='card-text'>".$detalle."</p>".
				"</div>".
				"<div class='work_description'>".
					"<div class='work_descr_cont'>".
						"<a href'#' class='btn btn-primary'>Ver detalles</a>".
					"</div>".
				"</div>".  						
			"</div>".
		"</div>";
	}

	function createCardSubtarea($nombre, $idSubTarea, $detalle){
		echo "<div class='item'>".
			"<div class='work_item'>".
				"<div class='work_img'>".
	  				"<center><img src='images/actividad1.png' width='130' height='130' alt=''></center>".
	  			"</div>".
				"<div class='card-block' id='".$idSubTarea."''>".
					"<h4 class='card-title'>".$nombre."</h4>".
					"<p class='card-text'>".$detalle."</p>".
				"</div>".
				"<div class='work_description'>".
					"<div class='work_descr_cont'>".
						"<a href'#' class='btn btn-primary'>Ver detalles</a>".
					"</div>".
				"</div>".  						
			"</div>".
		"</div>";
	}
?>
