<?php 



class BMIController{

	public function getAllMBI(){
		$BMIS = Bmi::getAll();
		return $BMIS;
	}
 

public function updateBMI(){
		if(isset($_POST['update'])){
			$data = array(
				'idb' => $_POST['idb'],
				'currentWeight' => $_POST['currentWeight'],
				
			
				
			);
			$result = Bmi::update($data);
			if($result === 'ok'){
				Session::set('success','Bmi modified !!');
				Redirect::to('bmis');
			}else{
				echo $result;
			}
		}
	}

	public function addBMI(){
		if(isset($_POST['add'])){
			$data = array(

				
				'age' => $_POST['age'],
				
				'gender' => $_POST['gender'],
				'weight' => $_POST['weight'],
				'height' => $_POST['height'],
			);
			$result = Bmi::add($data);
			if($result === 'ok'){
				Session::set('success','Bmi  added!!');
				Redirect::to('bmis');
			}else{
				echo $result;
			}
		}
	}

	

public function deleteBMI(){
		if(isset($_POST['idb'])){
			$data['idb'] = $_POST['idb'];
			$result = Bmi::delete($data);
			if($result === 'ok'){
				Session::set('success','bmi deleted !!');
				Redirect::to('bmis');
			}else{
				echo $result;
			}
		}
	}



	}



?>