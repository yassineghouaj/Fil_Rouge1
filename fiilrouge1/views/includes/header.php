<!DOCTYPE html>
<html>
<head>
	<title>MYHBMI</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style/style.css">	



</head>

	    <nav id="navm" class="navbar navbar-expand-lg" style= "background-color:#444 ; color: white">
		<a class="navbar-brand" href="home" style =" color: white; margin-right:50px">MYHBMI</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="home" style = "color: white">Home</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="bmis" style = "color: white">BMI Calculator</a>
				</li>

			    <li class="nav-item">
					<a class="nav-link" href="acount" style = "color: white">My acount</a>
				</li>

				<!-- <li class="nav-item">
					<a class="nav-link" href="info"  style = "color: white">Info </a>
				</li> -->
                

				<li class="nav-item">
					<a class="nav-link" href="contact" style = "color: white">Contact</a>
				</li>

                <li class="nav-item">
					<a class="nav-link" href="about" style = "color: white">About</a>
				</li>


                <li class="nav-item">
					<a class="nav-link" href="logout" style = "color: white">logout</a>
				</li>
			
			</ul>
	 <?php
	
			echo " WELCOME" ," ".$_SESSION['first_name']."";
			
		
		?>
		</div>
	</nav>
	<p style = "margin-bottom:50px; background-color:white;"></p>