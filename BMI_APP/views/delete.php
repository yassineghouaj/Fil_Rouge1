<?php 
	

if(isset($_POST['idb'])){
		$exitbmi = new BmisController();
		$exitbmi->deleteBmi();
	}


?>