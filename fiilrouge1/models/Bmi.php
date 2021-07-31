<?php

class Bmi
{

	static public function getAll()
	{

		$stmt = DB::connect()->prepare('SELECT * FROM bmis ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}


	static public function getBySearch($data)
	{
		$height = $data['height'];
		$weight = $data['weight'];

		$query = 'SELECT * FROM bmi where height=:height AND weight=:weight ';

		$stmt = DB::connect()->prepare($query);
		$stmt->execute(array(
			":height" => $height,
			":weight" => $weight,


		));
		$bmi = $stmt->fetchAll();;
		return $bmi;
	}

	static public function update($data)
	{
		$idb = $data['idb'];
		$stmt = DB::connect()->prepare('UPDATE bmi SET gender=:gender, age=:age, height=:height, weight=:weight WHERE idb=:idb');
		$stmt->bindParam(':idb', $data['idb']);
		$stmt->bindParam(':gender', $data['gender']);
		$stmt->bindParam(':age', $data['age']);
		$stmt->bindParam(':height', $data['height']);
		$stmt->bindParam(':weight', $data['weight']);

		if ($stmt->execute()) {
			return 'ok';
		} else {
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

	static public function add($data)
	{
		$stmt = DB::connect()->prepare('INSERT INTO bmis (gender ,age, height, weight, user_id,  result)
				VALUES (:gender, :age,:height,:weight, :user_id, :result)');

		$stmt->bindParam(':gender', $data['gender']);
		$stmt->bindParam(':age', $data['age']);
		$stmt->bindParam(':height', $data['height']);
		$stmt->bindParam(':weight', $data['weight']);
		$stmt->bindParam(':user_id', $data['user_id']);
		$stmt->bindParam(':result', $data['result']);



		if ($stmt->execute()) {
			return 'ok';
		} else {
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}



	static public function getBmi($data)
	{
		$idb = $data['idb'];
		try {
			$query = 'SELECT * FROM bmi WHERE idb=:idb';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idb" => $idb));
			$bmi = $stmt->fetchAll();
			return $bmi;
		} catch (PDOException $ex) {
			echo 'erreur' . $ex->getMessage();
		}
	}
	static public function getResult($data)
	{
		$idb = $data['idb'];
		try {
			$query = 'SELECT (height*height)/weight as result FROM bmi WHERE idb=:idb';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idb" => $idb));
			$bmi = $stmt->fetchAll();
			return $bmi;
		} catch (PDOException $ex) {
			echo 'erreur' . $ex->getMessage();
		}
	}




	static public function delete($data)
	{
		$idb = $data['idb'];
		try {
			$query = 'DELETE FROM bmi WHERE idb=:idb';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idb" => $idb));
			if ($stmt->execute()) {
				return 'ok';
			}
		} catch (PDOException $ex) {
			echo 'erreur' . $ex->getMessage();
		}
	}
}
