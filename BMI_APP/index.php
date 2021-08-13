<?php 

require_once './autoload.php';
require_once './controllers/HomeController.php';


$home = new HomeController();  


$userpages = ['home','bmis', 'info', 'contact','acount' ,'about','logout'];
$adminpages = ['home','bmis','dashboard', 'info', 'updatebmi','acount' , 'contact', 'about', 'bmis','delete', 'logout'];


if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

	if(isset($_GET['page']) && $_SESSION['email'] != 'admin@gmail.com'){
		require_once './views/includes/header.php';
		if(in_array($_GET['page'],$userpages)){
			$page = $_GET['page'];
			$home->index($page);
			require_once './views/includes/footer.php';
		

		}else{
			include('views/includes/404.php');
		}
	}

else if(isset($_GET['page']) && $_SESSION['email']){
	require_once './views/includes/adminheader.php';
		if(in_array($_GET['page'],$adminpages)){
			$page = $_GET['page'];
			$home->index($page);
			require_once './views/includes/footer.php';
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