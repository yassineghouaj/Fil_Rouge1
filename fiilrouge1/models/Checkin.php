<?php 

class Checkin {

static public function getAll(){
		
		$stmt = DB::connect()->prepare('SELECT r.id, u.fullname, v.depart, v.destination ,r.numplace, r.dater FROM checkin r, vol v ,users u where v.idv=r.idv and r.idc=u.idc');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}


	

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO Reservation (idc,idv,numplace,dater)
			VALUES (:idc,:idv,:numplace,:dater)');
		$stmt->bindParam(':idc',$data['idc']);
		$stmt->bindParam(':idv',$data['idv']);
		$stmt->bindParam(':numplace',$data['numplace']);
		$stmt->bindParam(':dater',$data['dater']);
	
		
		$stmt->execute();
	}

static public function getByUser($data){
	$idc = $data['idc'];
	$query = 'SELECT * FROM reservation,vol  WHERE reservation.idc=:idc AND reservation.idv=vol.idv';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idc" => $idc));
			$reservation = $stmt->fetchAll();
			return $reservation;


	}
	static public function new($data){
	$idc = $data['idc'];
	
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idc" => $idc));
			$reservation = $stmt->fetchAll();;
			return $reservation;


	}


static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM reservation WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	
}