<?php 

class CheckinController{


public function getAllCheckin(){
		$checkins = Checkin::getAll();
		return $checkins;
	}


	
	public function addCheckin(){
		if(isset($_POST["submit"])){
           
            $np=$_POST["np"];
            $data = array(
                "idc" =>  $_SESSION["idc"],
				"idv" => $_POST["idp"],
				"numplace" => $_POST["np"],
				"dater" => $_POST["dater"],
			
				
			
			);
			$result = Checkin::add($data);
			
if(isset($_POST["idvr"])){
           
            $np=$_POST["np"];
            $data = array(
                "idc" =>  $_SESSION["idc"] ,
				"idv" => $_POST["idvr"],
				"numplace" => $_POST["np"],
				"dater" => $_POST["dater"],
			
				
			
			);
			$result = Checkin::add($data);
			
		}

		}
	}


	public function getUserCheckin(){
		$data = array(
				'idc' => $_SESSION['idc']
			);
		$checkins = Checkin::getByUser($data);
		return $checkins;
	}
	public function deleteCheckin(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = Checkin::delete($data);
			if($result === 'ok'){
				Session::set('success','Reservation Supprimé');
				Redirect::to('checkins');
			}else{
				echo $result;
			}
		}
	}


}



?>