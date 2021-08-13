<?php 

class User{


static public function getAll(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM users ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}


	

static public function delete($data){
		$idc = $data['idc'];
		try{
			$query = 'DELETE FROM users WHERE idc=:idc';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idc" => $idc));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}




	static public function login($data){
		$email = $data['email'];
		
		// $user_type=$data['user_type'];
		
	   if($email== 'admin@gmail.com')
		 			{
		
		try{
			$query = 'SELECT * FROM users WHERE email=:email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":email" => $email,
		
		));
			
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	 }
	
	
      else{
					
		
		try{
			$query = 'SELECT * FROM users WHERE email=:email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":email" => $email,
		
		));
			
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

}


	
	static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO users (first_name, last_name, email ,pass ,phone, bio )
			VALUES (:first_name,:last_name,:email,:pass,:phone,:bio)');
		$stmt->bindParam(':first_name',$data['first_name']);
		$stmt->bindParam(':last_name',$data['last_name']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':pass',$data['pass']);
		$stmt->bindParam(':phone',$data['phone']);
		$stmt->bindParam(':bio',$data['bio']);


		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}


	

static public function update($data){
	$idc = $data['idc'];
		$stmt = DB::connect()->prepare('UPDATE users SET firstname= :firstname,lastname=:lastname,email=:email,password=:password, phone=:phone WHERE idc=:idc');
		$stmt->bindParam(':idc',$data['idc']);
		$stmt->bindParam(':firstname',$data['firstname']);
		$stmt->bindParam(':lastname',$data['lastname']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':password',$data['password']);
		$stmt->bindParam(':phone',$data['phone']);
		
			
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
		
	
	}


static public function getUser($data){
		$idc = $data['idc'];
		
			$query = 'SELECT * FROM users WHERE idc=:idc';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idc" => $idc));
			$user = $stmt->fetchAll();
			return $user;
	
	}


}


?>