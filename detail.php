<?php include "./php/header.php" ?>
<?php include "./lib/database.php" ?>
<?php
    
      $id = $_POST['product'];
      $db = new Database();
      $query = "SELECT * FROM tbl_products WHERE prd_id = '$id'";
      $result = $db->select($query);
      
      $value = $result->fetch_assoc();    
?>    

<div class="container"> 
  
    
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
          
            <div class = "img-showcase"> 
              <img src = "../img/product/<?php echo $value['img']; ?>" alt = "watchs image">
              <img src = "../img/product/<?php echo $value['img1']; ?>" alt = "watchs image">
              <img src = "../img/product/<?php echo $value['img2']; ?>" alt = "watchs image">
              <img src = "../img/product/<?php echo $value['img3']; ?>" alt = "watchs image">
            </div>
          
          </div>

          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "../img/product/<?php echo $value['img']; ?>" alt = "watchs image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "../img/product/<?php echo $value['img1']; ?>" alt = "watchs image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "../img/product/<?php echo $value['img2']; ?>" alt = "watchs imagee">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "../img/product/<?php echo $value['img3']; ?>" alt = "watchs image">
              </a>
            </div>
          </div>
        </div>
        
        
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $value['prd_name']; ?></h2>

          <div class = "product-price">
           <p class = "last-price">Price: $ <?php echo $value['price']; ?></p>
          </div>

          <div class = "product-detail">
            <h2>About this watch: </h2>
            <p><?php echo $value['description']; ?></p>
            <ul>
            <li> Model: <span><?php echo $value['model']; ?></span></li>
              <li>Available: <span>in stock</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            
            <a class = "btn" href="./contact.php">
              Contact to buy
            </a>
            </div>
        </div>
      </div>

    </div>
  
  
    
</div>
       
<?php include "./php/footer.php" ?>