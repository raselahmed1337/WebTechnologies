<?php 
include './Model/Loginconfig.php';

session_start();
error_reporting(0);

if (isset($_SESSION['username']) or isset($_SESSION['id'])) {
	header("Location: ../FinalProject/dashboard.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];

		if(isset($_POST['remember']))
		{
			setcookie('email',$email, time()+3600);
			setcookie('password',$password, time()+3600);

			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			header("Location: ../FinalProject/dashboard.php");
	}
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>



<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
	<link rel="stylesheet" type="text/css" href="style.css">


	<title>Login - Medicine Store</title>
</head>
<body>
	<div id="error"></div>
	<div class="container">
		<form action="" method="POST" class="login-email">
		<div style="text-align:left; text-decoration:none;" >
			<a class="btn" style="text-decoration:none;" href="/FinalProject/home.php"><i class="fas fa-home"></i> </a>
		</div>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			
			
			<div class="input-group">
				<input type="email" autofocus placeholder="Email" name="email" id="email" autocomplete="off" value="<?php echo $_POST['email']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" autofocus placeholder="Password" name="password" id="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div style="text-align:left;">
				<label><input type="checkbox" name="remember" value="1"> Remember Me</label>
			</div>
			<br>
			<div class="input-group">
				<button type="submit" name="submit" class="btn" onclick='Javascript:checkEmail();'>Login</button>
			</div>
			
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>

		</form>
</div>
<script src="validation.js"></script>
<?php 
if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
{
	$email = $_COOKIE['email'];
	$password = $_COOKIE['password'];

	echo "<script>
	document.getElementById('email').value = '$email';
	document.getElementById('password').value = '$password';
	</script>";
}
?>
<script> 
const email = document.getElementById('email')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e)=>
{
    let messages = []
    if(email.value === '' || email.value == null)
    {
        if(password.vlaue.length <= 6)
        {
            messages.push('Password must be longer than 6 characters')
        }
        if(password.vlaue.length >= 20)
        {
            messages.push('Password must be less than 20 characters')
        }
        if(password.vlaue === 'password')
        {
            messages.push('Password cannot be password')
        }
        if(messages.length > 0)
        {
            e.preventDefault();
            errorElement.innerText = messages.join(',')
        }
    }
})    
<script>
function checkEmail() {

var email = document.getElementById('email');
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

if (!filter.test(email.value)) {
alert('Please provide a valid email address');
email.focus;
return false;
}
}
</script>
<script src="validation.js"></script>
<?php include 'footer.php'?>
</body>
</html>