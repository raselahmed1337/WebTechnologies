<!DOCTYPE html>
<html>
<head>
    <title>Search Here</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../darkmode.css">
</head>
<body>
    <!-- Navbar start -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="../dashboard.php"><i class="fas fa-clinic-medical"></i>&nbsp;&nbsp;Medicine Store</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        
      <li class="nav-item">
          <a class="nav-link" href="../dashboard.php"><i class="bi-speedometer2"></i> Dashboard</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="../shopping-cart/cartIndex.php"><i class="fas fa-cart-plus"></i> Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../ProductSearch/index.php"><i class="fas fa-search"></i> Search Product</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="../logout.php"><i class="fas fa-arrow-alt-circle-right"></i> Logout</a>
        </li>

      </ul>
      <a style="padding:5px; text-align:right; color:white" onclick="myFunction()"><i class="fas fa-toggle-on"></i> Dark Mode</a>
     <script>
          function myFunction() {
               var element = document.body;
               element.classList.toggle("dark-mode");
          }
     </script>
    </div>
  </nav>
  <!-- Navbar end -->
  
    <div class="container mt-5" style="max-width: 555px">
        <div class="card-header alert alert-warning text-center mb-3">
            <h2>Search Product</h2>
        </div>
        
        <input type="text" class="form-control" name="live_search" id="live_search" autocomplete="off" placeholder="Search ...">
        <div id="search_result"></div>
        
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
   <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: '../Controller/ajaxLiveSearch.php',
                        method: 'POST',
                        data: {query: query},

                        success: function (data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block');
                            $("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block');
                            });
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
        });
    </script>


</body>
</html>