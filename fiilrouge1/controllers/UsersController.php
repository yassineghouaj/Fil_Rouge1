<?php 

class UsersController {



public function getAllUsers(){
		$users = User::getAll();
		return $users;
	}



public function deleteUser(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = User::delete($data);
			if($result === 'ok'){
				Session::set('success','user deleted!!');
				Redirect::to('users');
			}else{
				echo $result;
			}
		}
	}


	public function auth(){
		if(isset($_POST['submit'])){
			$data['email'] = $_POST['email'];
			$data['pass'] = $_POST['pass'];
			$data['user_type']=$_POST['user_type'];
			$result = User::login($data);
			if($result->email === $_POST['email'] && $result->pass === $_POST['pass'] && $_POST['user_type']=='Customer'){

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['first_name'] = $result->first_name;
				$_SESSION['id'] = $result->id;
				$_SESSION['user_type'] ='Customer';
			
				
				Redirect::to('home');

			}
			else if($result->email === $_POST['email'] && $result->pass === $_POST['pass'] && $_POST['user_type']=='Administrator'){

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['first_name'] = $result->first_name;
				$_SESSION['id'] = $result->id;
				$_SESSION['user_type'] ='Administrator';
			
				
				Redirect::to('dashboard');

			}
			
			else{
				Session::set('error',' incorrect info!!');
				Redirect::to('login');
			}
		}
	}

	public function register(){
		if(isset($_POST['submit'])){
			
		
			$data = array(
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
                'email' => $_POST['email'],
                'pass' => $_POST['pass'],
				'phone' => $_POST['phone'],
                'bio' => $_POST['bio'],
                'cweight' => $_POST['cweight']
				
			);
			$result = User::createUser($data);
			if($result === 'ok'){
				Session::set('success','your account has been created!!');
				Redirect::to('login');
			}else{
				echo $result;
			}
		}
	}


	static public function logout(){
		session_destroy();
	}



public function updateUser(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_SESSION['id'] ,
				'firstname' => $_POST['firstname'],
				'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
				'phone' => $_POST['phone'],
                'bio' => $_POST['bio'],
                'cweight' => $_POST['cweight']
				
				
			);
			$result = User::update($data);
			if($result === 'ok'){
				Session::set('success','user modified!!');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

	
public function getOneUser(){
		
			$data = array(
				'id' => $_SESSION['id'] ,
			);
			$user = User::getUser($data);
			return $user;
		
	}



}