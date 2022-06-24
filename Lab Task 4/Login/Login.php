<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $passErr = "";
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9_a-zA-Z]{2,}$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9_a-zA-Z]{8,}$/",$pass))
    {
        $passErr = "Password must be 8 Digits";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>LOGIN</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="text" name="pass">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Reset</button>
  

    <button class="btnn"><a href="../Dashboard/Dashboard.php">Login</a></button>
</form>
</div>

<div class="container" style="background-color:#f1f1f1">
<span class="psw"><a href="../ForgetPassowrd.php">Forget password?</a> </span>
</div>

</body>
</html> 