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




  <div>
        <div class="container p-5 "><br><br><br>
          <!-- Section: -->
          <section >
      
            <div class="row">
              
              <div class="col-lg-7 col-md-14 mb-4 mb-md-7">
             
                <div>
                  <img style="width:500px; height:300px; border-radius:5px" 
                    src = 'https://cdn5.vectorstock.com/i/1000x1000/45/39/body-mass-index-man-vector-36084539.jpg' alt="An illustration of bmi "/>
                </div>

              </div>


              <div class="col-lg-4 col-md-12 mb-4 mb-md-0">

                <div>
                  <img style="width:500px; height:300px; border-radius: 5px"
                   src="https://img.etimg.com/thumb/msid-83568194,width-650,imgsize-600755,,resizemode-4,quality-100/bmi-calculator-formula_istock.jpg" alt="An illustration of bmi"/>
                </div>

              </div>

            </div>
          </section>
         
      </div>
        



  </div>

</body>

</html>