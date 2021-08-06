<?php
if (isset($_POST['add'])) {
  $newBmi = new BmisController();
  $newBmi->addBMI();

}
?>


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

    <button type="submit" value="submit" name="add" class="btn btn-dark">Calculate</button>



    </div>
  </form><br>

</body>

</html>