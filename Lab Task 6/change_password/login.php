<?php
	session_start();

	if(isset($_POST['login'])){
		//connection
		$conn = new mysqli('localhost', 'root', '', 'loginsystemdb');

		//get the user with the email
		$sql = "SELECT * FROM users WHERE email = '".$_POST['email']."'";
		$query = $conn->query($sql);
		if($query->num_rows > 0){
			$row = $query->fetch_assoc();
			//verify password
			if(password_verify($_POST['password'], $row['password'])){
				$_SESSION['user'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Password incorrect';
			}
		}
		else{
			$_SESSION['error'] = 'No account with that email';
		}

	}
	else{
		$_SESSION['error'] = 'Fill up login form first';
	}

	header('location: index.php');

?>