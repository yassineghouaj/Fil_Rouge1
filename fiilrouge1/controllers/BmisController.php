<?php 



class BmisController{

	public function getAllBmis(){
		$bmis = Bmi::getAll();
		return $bmis;
	}


	public function findBmi(){ 
		if(isset($_POST['Search'])){
			$data = array(
				'height' => $_POST['height'],
				'weight' => $_POST['weight']
				
			);
		}
		$bmis = Bmi::getBySearch($data);
		return $bmis;
	} 


	public function getOneBmi(){
		if(isset($_POST['idb'])){
			$data = array(
				'idb' => $_POST['idb']
			);
			$bmi = Bmi::getBmi($data);
			return $bmi;
		}
	}



public function updateBMI(){
		if(isset($_POST['update'])){
			$data = array(
				'idb' => $_POST['idb'],
				'gender' => $_POST['gender'],
				'age' => $_POST['age'],
				'height' => $_POST['height'],
				'weight' => $_POST['weight'],
				
			
				
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
			$heightmeter = $_POST['height'] * 0.01;
			$result = $_POST['weight'] / ($heightmeter * $heightmeter);
			$data = array(
				'gender' => $_POST['gender'],
                'age' => $_POST['age'],
				'height' => $heightmeter,
				'weight' => $_POST['weight'],
				'user_id' => $_SESSION['first_name'],
				'result' => $result,
				$_SESSION['result'] = $result

				
			);
			$result = Bmi::add($data);
			if($result === 'ok'){
				Session::set('success','Bmi  added!!');
				Redirect::to('info');
			}else{
				echo $result;
			}
		}
	}
	public function result(){
		if(isset($_POST['idb'])){
			$data = array(
				'idb' => $_POST['idb']
			);
			$bmi = Bmi::getResult($data);
			return $bmi;
		}
	}

	


public function deleteBmi(){
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