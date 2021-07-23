<?php 
	if(isset($_POST['add'])){
		$newBmi = new BmisController();
		$newBmi->addBMI();
	}
?>
<!DOCTYPE html>
<head>
  <title></title>

 
       <html lang="en">

        <link rel="stylesheet" href="">	
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body><br>
<form method="post">
<label for="email">Select Gender :</label>
<div>
  <select name = "gender">
      <option>Male</option>
      <option>Female</option>
  </select>
</div><br> 
        <fieldset>
          
          <label for="age">Enter your Age:</label>ages: 2 - 120
          <input type="number" id="age" name="age" placeholder="enter your age" min="2"  max="120">
       
          <label for="height">Enter your Height:</label>
          <input type="number" id="password"  name="height" placeholder ="enter your height in CM" min="2">

          <label for="weight">Enter your Weight:</label>
          <input type="number" id="password"  name="weight" placeholder ="enter your weight in KG" min="2">
             
        </fieldset>
           
        <button type="submit" value="submit" name="add" style= "background-color: blue" onclick="show()">Calculate</button>
        
		

		</div>   
       </form>
     
         <div id ="result">
             result
              
         </div>
        <script>
            document.getElementById('result').style.display = "none";


    function show(){
            document.getElementById('result').style.display = "block";
}
             
        </script>
</body>
</html>