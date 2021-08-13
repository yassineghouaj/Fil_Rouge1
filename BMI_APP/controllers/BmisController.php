<?php 



class BmisController{

	public function getAllBmis(){
		$bmis = Bmi::getAll();
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
	
				'age' => $_POST['age'],
				'weight' => $_POST['weight'],
				
			
				
			);
			$result = Bmi::update($data);
			if($result === 'ok'){
				Session::set('success', 'Bmi modified !!');
				Redirect::to('dashboard');
			}else{
				echo $result;
			}
		}
	}


	public function addBMI(){

		if(isset($_POST['add'])){
			$heightmeter = $_POST['height'] * 0.01;
			$result = $_POST['weight'] / ($heightmeter * $heightmeter);
			
			 $age = $_POST['age'];
			 $weight =  $_POST['weight']; 
			 $height =  $_POST['height'];

             $_SESSION['age'] = $age;  
			 $_SESSION['weight'] = $weight;
			 $_SESSION['height'] = $height;
		
		
			$data = array(
				'gender' => $_POST['gender'],
                'age' => $_POST['age'],
				'height' => $heightmeter,
				'weight' => $_POST['weight'],
				'user_id' => $_SESSION['idc'],
				'result' => $result,
				
                	
			);
			    

                // $age = $_POST['age'];
			if($age > 20){
					if ($result < 18.5){
						
						

					    $_SESSION['result'] = substr($result, 0, 5). "<p style ='color: #bd8600;font-size:20px;'>Underweight</p><br>
                        
						<div class='container' style = 'text-align:left;'>
						<h1 style = 'font-size:30px'>Risks of being underweight</h1><br>
                        
						
						<h4><b>Being underweight can cause health problems, just as being overweight can.</b></h4><br>

						<h5 style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>Not all people who are underweight experience
					   adverse side effects or symptoms from being underweight. However, some people, experience<br><br> the following symptoms related to being <br><br>underweight:</h5><br>

					  <ul style ='font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>
						<li><b>Osteoporosis</b> According to a 2016 studyTrusted Source, being underweight increases a woman’s risk of osteoporosis, which is where the<br><br> bones are brittle and more prone to breaking.</li><br><br>
						<li><b>Skin, hair, or teeth problems</b> If a person does not get enough nutrients in their daily diet, they may display physical symptoms, such as <br><br>thinning skin, hair loss, dry skin, or poor dental health.</li><br><br>
						<li><b>Getting sick frequently</b> If a person does not get enough energy from their diet to maintain a healthy body weight, they may also not be<br><br> getting enough nutrients to fight off infections. As a result, a person may get sick more frequently, and common illnesses, such as a<br><br> cold, can last longer than they usually would.</li><br><br>
					    <li><b>Feeling tired all the time</b> Calories are a measurement of the energy a particular food can give a person. Not getting enough calories to<br><br> maintain a healthy weight can make a person feel fatigued.</li><br><br>
					    <li><b>Impaired Immunity</b> A weakened immune system is another top health risk associated with an underweight condition.<br><br> When you don't get enough nourishment, you'll lack energy for everyday activities, and your body won't have enough<br><br> of certain nutrients, such as protein and antioxidants, that strengthen your immune function.<br><br> Protein is needed to make hormones and enzymes, and it's critical for healing wounds and <br><br>synthesizing cells that fight infection.</li>
					  </ul><br><br>

					        <div id = 'Tips' style = 'display : none;'>
							    <h4><b>How to Gain Weight the Healthy Way</b></h4></br>

								<h5>1.Eat More Calories Than Your Body Burns</h5></br>

								<p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>
								The most important thing you can do to gain weight is to create a calorie surplus, meaning you eat more calories than your body needs.<br><br>
								
								You can determine your calorie needs using this calorie calculator.<br><br>
								
								If you want to gain weight slowly and steadily, aim for 300–500 calories more than you burn each day according to the calculator.<br><br>
								
								If you want to gain weight fast, aim for around 700–1,000 calories above your maintenance level.<br><br>
								
								Keep in mind that calorie calculators only provide estimates. Your needs may vary by several hundred calories per day, give or take.<br><br>
								
								You don’t need to count calories for the rest of your life, but it helps to do it for the first few days or weeks to get a feel for how many calories<br><br> you’re eating. There are many great tools out there to help you.</p><br><br>


								<h5>2.Eat Plenty of Protein</h5></br>

								<p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'> 
								
								The single most important nutrient for gaining healthy weight is protein.<br><br>

                                 Muscle is made of protein and without it most of those extra calories may end up as body fat.<br><br>

                                 Studies show that during periods of overfeeding, a high-protein diet causes many of the extra calories to be turned into muscle.<br><br>

                                 However, keep in mind that protein is a double-edged sword. It’s also highly filling, which may reduce your hunger and appetite significantly,<br><br> making it harder to get in enough calories (13Trusted Source, 14Trusted Source).<br><br>

                                 If you’re trying to gain weight, aim for 0.7–1 grams of protein per pound of body weight (1.5–2.2 grams of protein per kilogram).<br><br> You can even go above that if your calorie intake is very high.<br><br>

                                 High-protein foods include meats, fish, eggs, many dairy products, legumes, nuts and others. Protein supplements like whey protein can also be <br><br>useful if you struggle to get enough protein in your diet.
								 </p><br><br>
								
								

								<h5>3.Try smoothies and shakes.</h5></br>

								<p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'> 
								
								Don't fill up on diet soda, coffee and other drinks with few calories and little nutritional value. Instead, drink smoothies or healthy shakes <br><br>made with milk and fresh or frozen fruit, and sprinkle in some ground flaxseed. <br><br>In some cases, a liquid meal replacement may be recommended
								 </p><br><br>
                                
								 <h5>4.Watch when you drink</h5></br>
                                 
								 <p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'> 
								
								 Some people find that drinking fluids before meals blunts their appetite. In that case, it may be better to sip higher calorie beverages along <br><br>with a meal or snack.<br><br> For others, drinking 30 minutes after a meal, not with it, may work.
								 </p><br><br>

							<div>
					 
							//www.medicalnewstoday.com//
							//www.healthline.com//
							//www.niddk.nih.gov//
							//www.mayoclinic.org//
							//www.nerdfitness.com
							//www.nytimes.com//
							//https://docs.google.com/document/d/1teKjJm-sGM3lLiTWsdgDhRhHfvKCi3Ka/edit//

                       </div>";


					}elseif ($result >= 18.5 && $result <= 24.10){

						$_SESSION['result'] = substr($result, 0, 4). "<p style ='color: green;'>Healthy weight</p>
						<div class='container' style = 'text-align:left;'><br><br>

						   <h1 style = 'font-size:30px;'>Do you want To Build Your Own Workout Routine:</h1><br>

						   <div id = 'Tips' style = 'display : none;'>
                           <h5> OKAY! Are you ready to start building your own routine and want to know how it’s done?
						    </h5><br><br>

							<ul style ='font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>
							   <li>Step #1: Determine your “Shape goal” situation!</li><br><br>
							   <li>Step #2: “What exercises should I do to lose weight (or build muscle)?”</li><br><br>
							   <li>Step #3: “How many sets and push ups should I do per exercise?”</li><br><br>
							   <li>Step #4: “How many days per week should I train?”</li><br><br>
							   <li>Step #5: “How much weight should I lift?”</li>
							</ul><br><br>
							<h4><b>How do I determine my goal weight?</b></h4><br><br>

							<p style ='font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>
							There are many factors to consider when trying to determine your “goal weight” or “Bright Body.” In no particular order, here are some things<br><br>
							to keep in mind…

When just starting out, especially if coming from bigger numbers, many people pick an initial goal weight that they know is <br><br>
preliminary, but it’s the lowest number <br><br>
they can currently wrap their mind around. They suspect that they’ll reassess when they get closer. That is very typical. A long weight-loss<br><br> journey can be successfully<br><br>
 traversed with no firm goal weight in mind or with a series of successively lowered goal weights.<br><br>

Many people target a specific number and find, as they close in on that number, that it’s advantageous to switch to a goal weight range.<br><br>
 For example, if your specific goal weight is 130 pounds, your range might be between 128 and 132 pounds. That takes into account the normal <br><br>
 fluctuations in weight that often occur day to day and week to week.

People tend to find, over years and years of maintenance, that their goal<br><br>
 weight range trends up or down and rarely stays perfectly static. Flexibility with the notion of “goal weight” is key.<br><br>
 The body is a living, breathing system, and its needs and state flex and flux over the years based on myriad factors. Many of us find that we<br><br>
  need to let go of “that number” and stay fluid with our bodies, prioritizing <br><br>
 feeling happy, free, and neutral with our food above any particular number on the scale.
							</p><br><br>

						<h4><b>What exercises should I do to lose weight (or build muscle)?</b></h4><br><br>

						<p style ='font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>
						
						Everyone knows that exercise is one of the best things you can do for your health.<br><br>
						 But most people ignore one crucial component of it: resistance training. According to federal researchers, only 6 <br><br>
						 percent of adults do the recommended minimum amount of at least two muscle-strengthening workouts each week. Neglecting resistance<br><br> 
						 training – any type of workout <br><br>
						 that builds strength and muscle – is a big mistake. It increases your metabolism, lowers your body fat and protects you from some of the<br><br>
						  leading causes of early death and disability.<br><br>
						  You don’t have to lift like a bodybuilder (or look like one) to benefit from resistance training. And it’s never too late to get started. Here is<br><br>
						   everything you need to know about resistance training,<br><br>
						   along with some simple, expert-approved workouts you can do at the gym or at home with minimal equipment.
						</p><br><br>
                        <h4><b>How many sets and push ups should I do per exercise?</b></h4><br><br>

						<p style ='font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>
						It is important to keep increasing the number to challenge your body. If you keep on doing 20 push-ups for <br><br>three months then your muscles will become familiar with 20 push-ups a day routine and will stop growing.<br><br> Ideally, you should try to do 3 sets of 12 reps each day.<br><br> This will help you gain muscle strength.
						</p><br><br>

						<h4><b>How many days per week should I train?</b></h4><br><br>

						<p style ='font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>
					     
 You should train at least three times a week if you want to achieve your health and fitness goals in a reasonable amount of time, and stay<br><br>
 fit and healthy,” Mans explains.
						</p><br><br>
 
						<h4><b>How much weight should I lift?</b></h4><br><br>
                         
						<p style ='font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>

						If you want to get stronger or build muscle, at some point you’re going to need to lift heavier weights.

						After all, strength results hinge on your<br><br> ability.
						to progressively overload your muscles, meaning you need<br><br>
						to gradually increase the physical stress you put on a muscle to keep challenging<br><br>
						it so that it can always be adapting and getting stronger.<br><br>
						
						In strength training, there are myriad ways to make that happen. “You can achieve progressive overload by adding sets and reps, taking less<br><br>
						 rest, using better form, or performing more challenging exercise variations,” certified personal trainer Caroline Juster, elite trainer at Fitness<br><br>
						  Formula Clubs<br><br> Union Station in Chicago and online coach, tells SELF.<br><br> “The most effective way to achieve progressive<br><br>
						  overload, however, is just to lift heavier weights.”

						</p><br><br>

            </div>";
   


					}elseif ($result >= 25 && $result <= 29.9){

						$_SESSION['result'] = substr($result, 0, 4). "<p style ='color: #e65054;'>Overweight</p><br><br>
						<div class='container' style = 'text-align:left;'>

						<h2>Health Risks of Overweight & Obesity</h2><br><br>

						<h5>1.High blood pressure<h5>
                         
						<p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'><br><br>
                         High blood pressure, also called hypertension, is a condition in which blood flows through your blood vessels with a force greater than normal.<br><br>
                         High blood pressure can strain your heart, damage blood vessels, and raise your risk of heart attack, stroke, kidney disease, and death.
                        </p><br><br>

						<h5>2.Heart disease<h5>

						<p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'><br><br>
						Heart disease is a term used to describe several problems that may affect your heart. If you have heart disease, you may have a heart attack, <br><br>heart failure, sudden cardiac death, angina NIH <br><br>external link, or an abnormal heart rhythm. <br><br>
						High blood pressure, abnormal levels of blood fats, and high blood glucose levels may raise your risk for heart disease.<br><br>
						 Blood fats, also called blood lipids, include HDL cholesterol, LDL cholesterol, and triglycerides.
                        </p><br><br>

						<h5>3.Stroke<h5>

						<p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'><br><br>
						Stroke is a condition in which the blood supply to your brain is suddenly cut off, caused by a blockage or the bursting of <br><br>
						a blood vessel in your brain or neck. A stroke can damage brain tissue and make you unable to speak or move parts of your body.<br><br>
						High blood pressure is the leading cause of strokes.
                        </p><br><br>

						<h5>3.Sleep apnea</h5>

                        <p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'><br><br>
						Sleep apnea is a common disorder in which you do not breathe regularly while sleeping. <br><br>
						You may stop breathing altogether for short periods of time.<br><br>
						Untreated sleep apnea may raise your risk of other health problems, such as type 2 diabetes and heart disease.
                        </p><br><br>




						<div id = 'Tips' style = 'display : none;'>
						<h5><b>Tips for losing weight in healthy way</h5><b><br>

						<p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>Many eating plans leave you feeling hungry or unsatisfied. These are major reasons why you might find it hard to stick to a healthier <br><br>
						eating plan.<br><br>
						However, not all diets have this effect. Low carb diets and whole food, lower calorie diets are effective for weight loss and may be easier<br><br> to stick to than other diets.</p><br><br><br>


						<h5>1. Cut back on refined carbs</h5><br>

						<p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>One way to lose weight quickly is to cut back on sugars and starches, or carbohydrates. This could be with a low carb eating plan or by<br><br> reducing refined carbs and replacing them with whole grains.<br><br>

                        When you do that, your hunger levels go down, and you generally end up eating fewer calories.<br><br>

                        With a low carb eating plan, you’ll utilize burning stored fat for energy instead of carbs.</p><br><br>

						<h5>2. Eat protein, fat, and vegetables </h5><br>

						<p style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>Each one of your meals should include:</p>

						  <ul style ='font-size:15px; font-weight:normal;'><br>
						     <li>a protein source</li><br>
							 <li>fat source</li><br>
							 <li>vegetables</li><br>
							 <li>a small portion of complex carbohydrates, such as whole grains</li>
						  </ul>
						</p>
						</div>
					  </div>";






					
					}elseif ($result > 31){
						$_SESSION['result'] = substr($result, 0, 4). "<p style ='color: #b32d2e;'> Obese</p><br><br>
                        

						
						<div class='container' style = 'text-align:left;'>
                            
						<h2>Consequences of Obesity</h2><br><br>
						<ul style = 'font-size:15px; font-weight:normal; font-family: verdana; word-spacing: 1px;'>
						   <li>All-causes of death (mortality)</li><br><br>
						   <li>High blood pressure (hypertension)
						   </li><br><br>
						   <li>High LDL cholesterol, low HDL cholesterol, or high levels of triglycerides (Dyslipidemia)
						   </li><br><br>
						   <li>Type 2 diabetes</li><br><br>
						   <li>Coronary heart disease</li><br><br>
						   <li>Stroke</li>
						</ul><br><br>

						<div id = 'Tips' style = 'display : none;'>
						       <h5><b>Tips for losing weight in healthy way</h5><b><br>
						</div>


						</div>";

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



    public function deleteBmi(){
		if(isset($_POST['idb'])){
			$data['idb'] = $_POST['idb'];
			$result = Bmi::delete($data);
			if($result === 'ok'){
				Session::set('success','bmi deleted !!');
				Redirect::to('dashboard');
			}else{
				echo $result;
			}
		}
	}




	}



?>