<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />

<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>

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
          <a class="nav-link active" href="../FinalProject/home.php"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->

<form class="container" >
<select name="users" onchange="showUser(this.value)">
<option style="padding:10px" value="">Select a user:</option>
  <option value="1">ahmed</option>
</select>
</form>
<br>

<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>