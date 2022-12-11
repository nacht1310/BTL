<?php include "./header.php" ?>

<?
	$id = "";
  if (isset($_GET["id"]))
  {
    $id= $_GET["id"];
  }

  $sql_query = "SELECT * FROM tbl_products WHERE prd_id = $id"
?>

<div class="container"> 
  
    
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
          
            <div class = "img-showcase"> 
              <img src = "../images/product/<?php echo $row['img']; ?>" alt = "watchs image">
              <img src = "../images/product/<?php echo $row['img1']; ?>" alt = "watchs image">
              <img src = "../images/product/<?php echo $row['img2']; ?>" alt = "watchs image">
              <img src = "../images/product/<?php echo $row['img3']; ?>" alt = "watchs image">
            </div>
          
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "../images/product/<?php echo $row['img']; ?>" alt = "watchs image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "../images/product/<?php echo $row['img1']; ?>" alt = "watchs image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "../images/product/<?php echo $row['img2']; ?>" alt = "watchs imagee">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "../images/product/<?php echo $row['img3']; ?>" alt = "watchs image">
              </a>
            </div>
          </div>
        </div>
        
        
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">SKY-DWELLER</h2>
          <a href = "#" class = "product-link">visit Rolex store</a>

          <div class = "product-price">
           <p class = "last-price">Price: <?php $price =  $row['GIASP']; ?> </p>
          </div>

          <div class = "product-detail">
            <h2>About this watch: </h2>
            <p>Rolex presents an 18 kt yellow gold version of its Oyster Perpetual Sky-Dweller, fitted with an Oysterflex bracelet. The watch is the first in the Classic category to include this innovative bracelet made of high-performance elastomer. It also features a bright black, sunray-finish dial with hands and hour markers in 18 kt yellow gold. The light reflections on the case sides and lugs highlight the refined profile of the 42 mm Oyster case.</p>
            <ul>
            <li> Model: <span>Gold Yellow</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Classic Watch</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            
            <button type = "button" class = "btn">
              Contact to buy <i class = "fas fa-shopping-cart"></i>
            </button>
            </div>
        </div>
      </div>

    </div>
  
  
    
</div>
       
<?php include "./footer.php" ?>