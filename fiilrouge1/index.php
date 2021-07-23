<?php 

require_once './autoload.php';
require_once './controllers/HomeController.php';


$home = new HomeController();  

$userpages = ['home','bmis', 'info', 'tips' ,'contact','acount' ,'about'];
$adminpages = ['home','bmis','dashboard', 'info', 'tips','acount' , 'contact', 'about', 'bmis'];


if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

	if(isset($_GET['page']) && $_SESSION['user_type'] === 'Customer'){
		require_once './views/includes/header.php';
		if(in_array($_GET['page'],$userpages)){
			$page = $_GET['page'];
			$home->index($page);
			require_once './views/includes/footer.php';
		

		}else{
			include('views/includes/404.php');
		}
	}

else if(isset($_GET['page']) && $_SESSION['user_type'] === 'Administrator'){
	require_once './views/includes/header.php';
		if(in_array($_GET['page'],$adminpages)){
			$page = $_GET['page'];
			$home->index($page);
		}else{
			include('views/includes/404.php');
		}
	}




	else{
		$home->index('bmis');
	}

}

else if(isset($_GET['page']) && $_GET['page'] === 'register'){
	$home->index('register');
}else{
	$home->index('login');
}