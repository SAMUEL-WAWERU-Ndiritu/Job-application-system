<?php
	include 'includes/session.php';
	include  'apps/connect.php';

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email=?";
		$stmt=$conn->prepare($sql);
	    $stmt->bind_param('s',$email);
	    $stmt->execute();
		$result=mysqli_stmt_get_result($stmt);
			   if($row= mysqli_fetch_assoc($result)){
                  
				  $comparePass= password_verify($password,$row["password"]);
				  if($comparePass==false){
					$_SESSION['error'] = 'Incorrect Password';
				  }else{
					if($row['type']){
						$_SESSION['admin'] = 'id';
					}
					else{
						$_SESSION['user'] = $row['id'];
					}
				$_SESSION['error'] = 'Email not found';
			   }


	}
}
	else{
		$_SESSION['error'] = 'Input login credentails first';
	}

	exit();

	header('location: login.php');

?>