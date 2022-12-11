
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
  
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "img/sky-dweller.png" alt = "sky-dweller image">
              <img src = "img/sky-dweller1.png" alt = "sky-dweller image">
              <img src = "img/sky-dweller2.png" alt = "sky-dweller image">
              <img src = "img/sky-dweller3.png" alt = "sky-dweller image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "img/sky-dweller.png" alt = "sky-dwell image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "img/sky-dweller1.png" alt = "sky-dwell image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "img/sky-dweller2.png" alt = "sky-dwell imagee">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "img/sky-dweller3.png" alt = "sky-dwell image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">Đồng Hồ Rolex Sky Dweller 326238 Mặt Số Đen</h2>
          <a href = "#" class = "product-link">visit Rolex store</a>
          

          <div class = "product-price">
            <p class = "last-price">Price: $25.700</p>
          </div>

          <div class = "product-detail">
            <h2>About this watch: </h2>
            <p>Trong năm 2020, Rolex đã làm mới bộ sưu tập Sky-Dweller của mình với việc sử dụng dây Oysterflex thay cho dây da hay dây kim loại. Mẫu đồng hồ Rolex Sky Dweller 326238-0009 Mặt Số Đen là một trong những thiết kế như vậy, với mặt số màu đen trên nền vàng vàng.</p>
            <ul>
            <li>Model:  <span> Mặt số đen</span> </li>
              <li>Year: <span>2022</span></li>
              <li>Brand: <span>Rolex</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Classic Watch</span></li>
              
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

    <script src="script.js"></script>
  </body>
</html>