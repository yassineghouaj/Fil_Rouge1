<?php 

class Bmi {

	static public function getAll(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM bmi ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}



	


}