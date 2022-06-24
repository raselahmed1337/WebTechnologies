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
      <li><a href="account.php">Dashboard</a></li>
      <li><a href="#">View Profile</a></li>
      <li><a href="">Edit Profile</a></li>
	  <li><a href="../File_Upload/form.php">Change Profile Picture</a></li>
	  <li><a href="../Change password/New_Pass.php">Change Password</a></li>
	  <li><a href="#">Logout</a></li>
    </ul>
  </nav>
  
  <article>
    <h2>Welcome <?php echo $_SESSION['user']; ?><h2>
		  </article>
</section>

<footer>
<p>Copyright &copy; 2022</p>
</footer>


</body>
</html>