<?php
	require_once ('rootpath.php');
	require_once(ROOT_PATH."/apps/connect.php");
	session_start();

	if(isset($_SESSION['admin'])){
		header('location: admin/app.php');
	}

	if(isset($_SESSION['user'])){
		    $_SESSION['user'] = 'id';
	        $sql= "SELECT * FROM users WHERE id='id'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$user = $stmt->fetch();
	
	}
		

?>



