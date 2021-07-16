<!DOCTYPE html>
<html>
<head>
	<title>MYHBMI</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<link rel="stylesheet" href="style/style.css">	
<link rel="stylesheet" href="style/main.js">	

</head>
<body >
	    <nav id="navm" class="navbar navbar-expand-lg" style= "background-color: blue; color: white">
		<a class="navbar-brand" href="#" style =" color: white">MYHBMI</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="dashbord" style = "color: white">Home</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="vols" style = "color: white">BMI Calculator</a>
				</li>
			
				<li class="nav-item">
					<a class="nav-link" href="users"  style = "color: white">Info </a>
				</li>
                
                <li class="nav-item">
					<a class="nav-link" href="vols" style = "color: white">Contact</a>
				</li>

                <li class="nav-item">
					<a class="nav-link" href="vols" style = "color: white">About</a>
				</li>


                <li class="nav-item">
					<a class="nav-link" href="logout" style = "color: white">logout</a>
				</li>
			
			</ul>
	 <?php
	
			echo " WELCOME" ," ".$_SESSION['fullname']."";
			
		
		?>
		</div>
	</nav>