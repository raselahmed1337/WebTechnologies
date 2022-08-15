<?php
  require_once "../Model/searchdbconfig.php";
  if (isset($_POST['query'])) 
  {
    $query = $_POST['query'];
    $query = "SELECT * FROM product WHERE product_name LIKE '{$_POST['query']}%' LIMIT 100";
    $result = mysqli_query($connection, $query);
    
      if (mysqli_num_rows($result) > 0){?>
      <table class="table table-bordered table-striped mt-10">
        <thead>
          <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price($)</th>
            <!--th>Product Image</th-->
          </tr>
        </thead>

        <tbody>
          <?php
          while ($res = mysqli_fetch_array($result)) {
            $id = $res['id'];
            $product_name = $res['product_name'];
            $product_price = $res['product_price'];
            $product_image = $res['product_image'];
            ?>

          <tr class=".text-align-md">
            <td><?php echo $id; ?></td>
            <td><?php echo $product_name; ?></td>
            <td><i class="fas fa-dollar-sign"></i> <?php echo $product_price; ?></td>
            <td><?php '<img height="30px" width="30px",'.$res['product_image'].'">' ?></td>
          </tr>
          
          
          <?php
      }
      ?>
        </tbody>
      </table>

    <?php 
    }else{ 
        echo " <div class='alert alert-danger mt-3 text-center' role='alert'>Not data found </div>";
      }
}
?>