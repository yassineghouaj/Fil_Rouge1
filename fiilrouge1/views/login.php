<?php 
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->auth();
	}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login Form</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body style = 'background-color:#444;'>
      <div class="row">
    <div class="col-md-12">
        <h1 style = "color: white; font-weight: bold">MYHBMI</h1><br>
      <form method="post">
        <h1> login </h1>
        
        <fieldset>
            <h1 style = "color :green  ; font-weight : bold; text-align : center ; margin-top : 50px">Welcome to MYHBMI</h1>
            <h3 style = "color: green">“You can’t control what goes on outside, but you CAN control what goes on inside.”</h3><br><br>
          
        
          <label for="email">Email:</label>
          <input type="email" id="mail" name="email" placeholder="enter your email">
       
          <label for="password">Password:</label>
          <input type="password" id="password"  name="pass" placeholder ="enter your password">
        
          
        </fieldset>
        Customer <input type='radio' name='user_type' value='Customer' checked/> 
        Administrator <input type='radio' name='user_type' value='Administrator'/>
        
       
        <button name="submit" class="btn btn-outline-light">Connexion</button>
        <div class="sho">
		

		</div>
        <a href="register" class=" text-blue">sign up here</a>
        
       </form>
        </div>
      </div>
      
    </body>
</html>