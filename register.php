<?php
	include 'includes/session.php';
	$host = "localhost";
	$root = "root";
	$password = "";
	$dbname = "psb";
	
	$conn= new mysqli($host,$root,$password,$dbname);
	if(mysqli_connect_error()){
		die("Connection failed".$conn->mysqli_connect_error());
		exit();
	}
	

	if(isset($_POST['signup'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['email'] = $email;

		
		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: signup.php');
		}
		else{
			   
				$now = date('Y-m-d');
				$password = password_hash($password, PASSWORD_DEFAULT);

				//generate code
				$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$code=substr(str_shuffle($set), 0, 12);
                    $sql= "INSERT INTO users (email, password, firstname, lastname, activate_code, created_on) VALUES ('$email', '$password', '$firstname', '$lastname', '$code', '$now')";
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					header('location:Home.php');
					



				exit();

			}


	}
	else{
		$_SESSION['error'] = 'Fill up signup form first';
		header('location: signup.php');
	}

?>