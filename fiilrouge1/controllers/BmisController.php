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
				'user_id' => $_SESSION['idc'],
				'result' => $result,
				$_SESSION['result'] = $result,
                	
			);
			    

                $age = $_POST['age'];
			if($age > 20){
					if ($result < 18.5){
						
					    $_SESSION['result'] = $result. "<p style ='color: #bd8600;font-size:20px;'>Underweight</p><br>

						<div class='container' style = 'text-align:left;'>
						<h1 style = 'font-size:30px'>Risks of being underweight</h1><br>
                        
						
						<h4>Being underweight can cause health problems, just as being overweight can.</h4><br>
						<h5>Not all people who are underweight experience adverse side effects or symptoms from being underweight. However, some people, experience the following symptoms related to being underweight:</h5><br>
					  <ul style ='font-size:20px; font-weight:normal;'>
						<li><b>Osteoporosis</b> According to a 2016 studyTrusted Source, being underweight increases a woman’s risk of osteoporosis, which is where the bones are brittle and more prone to breaking.</li><br>
						<li><b>Skin, hair, or teeth problems</b> If a person does not get enough nutrients in their daily diet, they may display physical symptoms, such as thinning skin, hair loss, dry skin, or poor dental health.</li><br>
						<li><b>Getting sick frequently</b> If a person does not get enough energy from their diet to maintain a healthy body weight, they may also not be getting enough nutrients to fight off infections. As a result, a person may get sick more frequently, and common illnesses, such as a cold, can last longer than they usually would.</li>
					  </ul>
					 
							//www.medicalnewstoday.com//
                       </div>";


					}elseif ($result >= 18.5 && $result <= 24.9){
						$_SESSION['result'] = $result. "<p style ='color: green;'>Healthy weight</p>
						<div class='container'>
  <p> healthy weight</p>
  <blockquote class='blockquote'>
    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
    
  </blockquote>
</div>";
   


					}elseif ($result >= 25 && $result <= 29.9){
						$_SESSION['result'] = $result. " <p style ='color: #e65054;'>Overweight</p>
						<div class='container'>
						<p>Health Risks of Overweight & Obesity</p>
						<blockquote class='blockquote'>
						  <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						  <footer class='blockquote-footer'>From WWF's website</footer>
						</blockquote>
					  </div>";






						
					}elseif ($result >= 30 && $result <= 34.9){
						$_SESSION['result'] = $result. " <p style ='color: #e63638;'>Obese</p>";

					}else {
						$_SESSION['result'] = $result. "<p style ='color: #b32d2e;'>Extremely obese</p> ";
					}

			}else{

					switch ($age){

						case 2:  
							if ($result <= 14.55 ){
								$_SESSION['result'] = $result. " underweight";

							}else if($result > 14.55 && $result <= 18.00){
								$_SESSION['result'] = $result. " normal weight";

							}else if($result > 18.00 && $result <= 19.10){
								$_SESSION['result'] = $result. " overweight ";
							}else{
								$_SESSION['result'] = $result. " obese";
							}
							break;

						case 3: 

							if ($result <= 14.00 ){
								$_SESSION['result'] = $result. " underweight";

							}else if($result > 14.00 && $result <= 17.10){
								$_SESSION['result'] = $result. " normal weight";

							}else if($result > 17.10 && $result <= 18.20){
								$_SESSION['result'] = $result. " overweight ";
							}else{
								$_SESSION['result'] = $result. " obese";
							}
                            break;

                        case 4: 

							if ($result <= 13.90 ){
								$_SESSION['result'] = $result. " underweight";

							}else if($result > 13.90 && $result <= 16.95){
								$_SESSION['result'] = $result. " normal weight";

							}else if($result > 16.95 && $result <= 18.05){
								$_SESSION['result'] = $result. " overweight ";
							}else{
								$_SESSION['result'] = $result. " obese";
							}
                            break;

						case 5: 

								if ($result <= 13.75 ){
									$_SESSION['result'] = $result. " underweight";
	
								}else if($result > 13.75 && $result <= 16.95){
									$_SESSION['result'] = $result. " normal weight";
	
								}else if($result > 16.95 && $result <= 18.25){
									$_SESSION['result'] = $result. " overweight ";
								}else{
									$_SESSION['result'] = $result. " obese";
								}
                                break;

                        case 6: 

								if ($result <= 13.55 ){
									$_SESSION['result'] = $result. " underweight";
	
								}else if($result > 13.55 && $result <= 17.05){
									$_SESSION['result'] = $result. " normal weight";
	
								}else if($result > 17.05 && $result <= 18.85){
									$_SESSION['result'] = $result. " overweight";
								}else{
									$_SESSION['result'] = $result. " obese";
								}
                                break;

						case 7: 

								if ($result <= 13.50 ){
									$_SESSION['result'] = $result. " underweight";
	
								}else if($result > 13.50 && $result <= 17.65){
									$_SESSION['result'] = $result. " normal weight";
	
								}else if($result > 17.65 && $result <= 19.80){
									$_SESSION['result'] = $result. " overweight ";
								}else{
									$_SESSION['result'] = $result. " obese";
								}
								break;

					     case 8: 

								if ($result <= 13.65 ){
									$_SESSION['result'] = $result. " underweight";
	
								}else if($result > 13.65 && $result <= 18.25){
									$_SESSION['result'] = $result. " normal weight";
	
								}else if($result > 18.25 && $result <= 20.80){
									$_SESSION['result'] = $result. " overweight ";
								}else{
									$_SESSION['result'] = $result. " obese";
								}
                                break;

						case 9: 

								if ($result <= 14.55 ){
									$_SESSION['result'] = $result. " underweight";
	
								}else if($result > 14.55 && $result <= 18.00){
									$_SESSION['result'] = $result. " normal weight";
	
								}else if($result > 18.00 && $result <= 19.10){
									$_SESSION['result'] = $result. " overweight ";
								}else{
									$_SESSION['result'] = $result. " obese";
								}
							    break;

							case 10: 

									if ($result <= 14.15 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 14.15 && $result <= 20.00){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 20.00 && $result <= 23.10){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
                                    break;

							case 11: 

									if ($result <= 14.50 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 14.50 && $result <= 20.90){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 20.90 && $result <= 24.10){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
                                    break;

                            case 12: 

									if ($result <= 14.55 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 14.55 && $result <= 18.00){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 18.00 && $result <= 19.10){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
                                    break;

							case 13: 

									if ($result <= 14.55 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 14.55 && $result <= 18.00){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 18.00 && $result <= 19.10){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
                                    break;
									 
                            case 14: 
                                      
									if ($result <= 14.55 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 14.55 && $result <= 18.00){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 18.00 && $result <= 19.10){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
                                    break;

							case 15: 

									if ($result <= 16.35 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 16.35 && $result <= 24.15){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 24.15 && $result <= 28.10){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
                                    break;

                            case 16: 

									if ($result <= 14.55 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 14.55 && $result <= 18.00){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 18.00 && $result <= 19.10){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
									break;

							case 17: 

									if ($result <= 17.30 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 17.30 && $result <= 25.30){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 25.30 && $result <= 29.60){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
									break;

							case 18: 
                                    
									if ($result <= 17.50 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 17.70 && $result <= 25.75){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 25.75 && $result <= 30.40){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
									break;

							case 19: 

									if ($result <= 17.95 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 17.95 && $result <= 26.15){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 26.15 && $result <= 31.15){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
									break;

							case 20: 

									if ($result <= 17.98 ){
										$_SESSION['result'] = $result. " underweight";
		
									}else if($result > 17.98 && $result <= 26.50){
										$_SESSION['result'] = $result. " normal weight";
		
									}else if($result > 26.50 && $result <= 31.90){
										$_SESSION['result'] = $result. " overweight ";
									}else{
										$_SESSION['result'] = $result. " obese";
									}
								

				}




			$result = Bmi::add($data);
			if($result === 'ok'){
				Session::set('success','Bmi  added!!');
				Redirect::to('info');
			}else{
				echo $result;
			}
		}
	}
	}


	// // public function result(){
	// // 	if(isset($_POST['idb'])){
	// // 		$data = array(
	// // 			'idb' => $_POST['idb']
	// // 		);
	// // 		$bmi = Bmi::getResult($data);
	// // 		return $bmi;
	// // 	}
	//  }

	




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