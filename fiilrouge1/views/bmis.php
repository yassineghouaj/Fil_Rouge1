<?php
if (isset($_POST['add'])) {
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
  <form method="post" >
    <label for="email">Select Gender :</label>
    <div>
      <select id="gender" name="gender" required>

        <option>Male</option>
        <option>Female</option>
      </select>
    </div><br>
    <fieldset>

      <label for="age">Enter your Age:</label>ages: 2 - 120
      <input type="number" id="age" name="age" placeholder="enter your age" min="2" max="120" required>

      <label for="height">Enter your Height:</label>
      <input type="number" id="password" name="height" placeholder="enter your height in CM" min="2" required>

      <label for="weight">Enter your Weight:</label>
      <input type="number" id="password" name="weight" placeholder="enter your weight in KG" min="2" required>

    </fieldset>

    <button type="submit" value="submit" name="add" style="background-color: blue">Calculate</button>



    </div>
  </form>
  <button onclick="result()">add</button>
  <?php
       //echo " you weight is" ," ".$_SESSION['result']."";
  ?>
  <div id="result">
    <label for="weight">result</label>
    
  </div>



  <script>
    
    //document.getElementById('result').style.display = "none";

    function result() {
      
      var age = document.getElementById('age').value;
      var height = document.getElementById('height').value;
      var weight = document.getElementById('weight').value;

     

         console.log(age);
      



    }





    /*var choice = document.getElementById("gender");
    var selectedgender = choice.options[choice.selectedgender].text;*/

   /* function goBack() {
      console.log('stay here!!')
  history.back();
}


    /*var male = "male";

       function g(){
         if (selectedgender == 'Male'){
             console.log('gender selected');
         }
         else {
             alert("no");
         }

        }*/
  </script>
</body>

</html>