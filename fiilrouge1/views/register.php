<?php 
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->register();
	}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <!--<link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">-->
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body style = 'background-color:#444;'>
      <div class="row">
    <div class="col-md-12">
        <h1 style = "color: white; font-weight: bold">MYHBMI</h1><br>
      <form action="" method="post">
        <h1> sign up  </h1>
        
        <fieldset>
            <h1 style = "color :green  ; font-weight : bold; text-align : center ; margin-top : 50px">Welcome to MYHBMI</h1>
               <h3 style = "color: green">“A good laugh and a long sleep are the best cures in the doctor’s book.”</h3><br><br>
          
          <legend><span class="number">1</span> Your Basic Info</legend>
        
          <label for="name">first name:</label>
          <input type="text" id="name" name="first_name" placeholder="enter your firstname">

          
          <label for="name">last name:</label>
          <input type="text" id="name" name="last_name" placeholder="enter your lastname">
        
          <label for="email">Email:</label>
          <input type="email" id="mail" name="email" placeholder="enter your email">
       
          <label for="password">Password:</label>
          <input type="password" id="password"  name="pass" placeholder ="enter your password">

          <label for="phone">Phone:</label>
          <input type="phone" id="phone"  name="phone" placeholder = "enter your phone">
        
          
        </fieldset>
        <fieldset>  
        
          <legend><span class="number">2</span> Your Profile</legend>
          
         <label for="bio">Bio:</label>
          <textarea id="bio" name="bio" placeholder="a little about your self "></textarea>
        
         
         <label for="job">current weight:</label>
         <input type="number" id="number"  name="cweight" placeholder = "enter your current weight">
         
          
             
         </fieldset>
       
        <button name="submit" class="btn btn-outline-light">Inscription</button>
        <a href="login" class=" text-blue"> already have acount ! login here</a>
        
       </form>
        </div>
      </div>
      
    </body>
</html>