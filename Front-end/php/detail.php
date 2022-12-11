<?php include "./header.php" ?>
<div class="container"> 
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "img/m326238-0009.webp" alt = "sky-dwell image">
              <img src = "img/m326934-0003.webp" alt = "sky-dwell image">
              <img src = "img/m326935-0005.webp" alt = "sky-dwell image">
              <img src = "img/m326938-0005.webp" alt = "sky-dwell image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "img/m326238-0009.webp" alt = "sky-dwell image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "img/m326934-0003.webp" alt = "sky-dwell image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "img/m326935-0005.webp" alt = "sky-dwell imagee">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "img/m326938-0005.webp" alt = "sky-dwell image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">SKY-DWELLER</h2>
          <a href = "#" class = "product-link">visit Rolex store</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Price: $25.700</p>
          </div>

          <div class = "product-detail">
            <h2>About this watch: </h2>
            <p>Rolex presents an 18 kt yellow gold version of its Oyster Perpetual Sky-Dweller, fitted with an Oysterflex bracelet. The watch is the first in the Classic category to include this innovative bracelet made of high-performance elastomer. It also features a bright black, sunray-finish dial with hands and hour markers in 18 kt yellow gold. The light reflections on the case sides and lugs highlight the refined profile of the 42 mm Oyster case.</p>
            <ul>
            <li>  <label for="watch">Choose a Model:</label>
                  <select name="watcs" id="watcs">
                         <option value="Yellow Gold">Black Gold</option>
                         <option value="Oystersteel and white gold">Oystersteel and white gold</option>
                         <option value="Everose Gold">Everose Gold</option>
                         <option value="Yellow Gold">Yellow Gold</option>
                         </select></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Classic Watch</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            </div>
        </div>
      </div>
    </div>
</div>
       
<?php include "./footer.php" ?>