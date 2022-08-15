<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Medicine Store</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <style>
    body{
      margin: 0;
      background-image: url(../FinalProject/img/tabletCover.jpg);
      background-size:cover; 
    }
  </style>
</head>


<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="home.php"><i class="fas fa-clinic-medical"></i>&nbsp;&nbsp;Medicine Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link active" href="../FinalProject/home.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fas fa-user-md"></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php"><i class="fas fa-user-plus"></i> Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./ContactUs/contact.php"><i class="fas fa-phone" ></i> Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->
  
  
<!-- Set timer start -->
  <h6 style="padding:5px; text-align:right;">CURRENT TIME: <a style="color:red"id="timer"></a></h6>
<script>
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("timer").innerHTML = d.toLocaleTimeString();
}
</script>
<!-- Set timer end -->

<?php include 'footer.php'?>

</body>

</html>