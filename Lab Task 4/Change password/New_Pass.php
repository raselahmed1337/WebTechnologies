<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: login.php");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: login.php");	exit();
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

	<div class="content">

			<p>Welcome <?php echo $_SESSION['user']; ?><p>
			<a href="?logout">Log out</a>	

	</div>

<section>
  <nav>
    <ul>
      <li><a href="../Login_Registration/account.php">Dashboard</a></li>
      <li><a href="#">View Profile</a></li>
      <li><a href="">Edit Profile</a></li>
	  <li><a href="../File_Upload/form.php">Change Profile Picture</a></li>
	  <li><a href="../Change password/New pass.php">Change Password</a></li>
	  <li><a href="../Login_Registration/login.php">Logout</a></li>
    </ul>
  </nav>
  
  <article>
    
<?php
// define variables and set to empty values
$nameErr = $passErr = $passwerdErr = "";
$name = $pass = $passwerd = "";

if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check Password must be 8 Digits
    if (!preg_match("/^[0-9_a-zA-Z]{8,}$/",$pass))
    {
        $passErr = "Password Is Not Same";
    }
  }

  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check Password must be 8 Digits
    if (!preg_match("/^[0-9_a-zA-Z]{8,}$/",$pass))
    {
        $passErr = "Password Is Not Same";
    }
  }

  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check Password must be 8 Digits
    if (!preg_match("/^[0-9_a-zA-Z]{8,}$/",$pass))
    {
        $passErr = "Password Is Not Same";
    }
  }

  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Change your Password</h2>
<p><span class="error">* Password required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

Old Password: <input type="text" name="pass">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  New Password: <input type="text" name="pass">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  Conform Password: <input type="text" name="pass">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Reset Password</button>

  <input type="submit" name="submit" value="Conform Passwrod">  
</form>
		  </article>
</section>

<footer>
<p>Copyright &copy; 2022</p>
</footer>


</body>
</html>