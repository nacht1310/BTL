<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/banner.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/news.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    
</head>
  <div class="container-fluid">
    
    <!-- Header -->
    <header>
      <span class="brand" data-aos="zoom-in" data-aos-duration="1000">Brand</span>
      
      
      <div class="menu">
        

        <!-- <a class= "navItem un" href="#">Home</a>
        <a class= "navItem un" href="#about">About us</a>
        <a class= "navItem un" href="#">Category</a>
        <a class= "navItem un" href="#">News</a>
        <a class= "navItem un" href="#">Contact</a>       -->
        <ul class="nav">
          <li class="nav-item">
            <a class="navItem un" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="navItem un" href="#about">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="navItem un dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
            
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Luxury watch</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="navItem un" href="#news">News</a>
          </li>
          <li class="nav-item">
            <a class="navItem un" href="#">Contact</a>
          </li>
        </ul>     
        
      </div>
      <div class="search-btn"><i class="bi bi-search"></i></div>
      <div id="logReg"><a href="#">Login/Register</a></div>
  
    </header>
    
    
    <!-- End Header -->
    
    <!-- Banner -->
    <div id="banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/carousel/Rolex_OysterPerpetualDatejust31-7.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
           
              <h3>New Collection </h3>
              <h2>THE WATCH EVERYONE DESIRE!</h2>
              <p>the best in class elegant watches from the luxury brand swiss eagle high-quality watches into which a lot of care has gone in.</p>
            
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/carousel/rolex-daytona-ceramic-cufflink.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>BUILT FOR MEN</h3>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/carousel/Gemma_Blog_Featured_Image-10.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
    <!-- End Banner -->


    <!-- Product -->
    <!-- <div id="product">
      <h3 class="productHeading">PRODUCT</h3>
      <div class="row align-items-center">
        
        <div class="card col-sm-4 col-6" style="width: 18rem;">
          <div class="imgProduct">
            <img src="img/product/product2.jpg" class="card-img-top" alt="...">
            <div class="iconList">
              <a  href="#" title="Add to cart"><div class="iconItem"><h2><i class="bi bi-cart-fill"></i></h2></div> </a> 
              <a  href="#" title="View Detail"><div class="iconItem"><h2><i class="bi bi-eye-fill"></i></h2></div> </a> 
            </div>
          </div>          
          <div class="card-body">
            <p class="card-text">Tên sản phẩm</p>
            <p>Giá</p>
          </div>
        </div>
  
        <div class="card col-sm-4 col-6" style="width: 18rem;">
          <div class="imgProduct">
            <img src="img/product/product2.jpg" class="card-img-top" alt="...">
            <div class="iconList">
              <a  href="#" title="Add to cart"><div class="iconItem"><h2><i class="bi bi-cart-fill"></i></h2></div> </a> 
              <a  href="#" title="View Detail"><div class="iconItem"><h2><i class="bi bi-eye-fill"></i></h2></div> </a> 
            </div>
          </div>          
          <div class="card-body">
            <p class="card-text">Tên sản phẩm</p>
            <p>Giá</p>
          </div>
        </div>
        <div class="card col-sm-4 col-6" style="width: 18rem;">
          <div class="imgProduct">
            <img src="img/product/product2.jpg" class="card-img-top" alt="...">
            <div class="iconList">
              <a  href="#" title="Add to cart"><div class="iconItem"><h2><i class="bi bi-cart-fill"></i></h2></div> </a> 
              <a  href="#" title="View Detail"><div class="iconItem"><h2><i class="bi bi-eye-fill"></i></h2></div> </a> 
            </div>
          </div>          
          <div class="card-body">
            <p class="card-text">Tên sản phẩm</p>
            <p>Giá</p>
          </div>
        </div>
        <div class="card col-sm-4 col-6" style="width: 18rem;">
          <div class="imgProduct">
            <img src="img/product/product2.jpg" class="card-img-top" alt="...">
            <div class="iconList">
              <a  href="#" title="Add to cart"><div class="iconItem" ><h2><i class="bi bi-cart-fill"></i></h2></div> </a> 
              <a  href="#" title="View Detail"><div class="iconItem"><h2><i class="bi bi-eye-fill"></i></h2></div> </a> 
            </div>
          </div>          
          <div class="card-body">
            <p class="card-text">Tên sản phẩm</p>
            <p>Giá</p>
          </div>
        </div>
        <div class="card col-sm-4 col-6" style="width: 18rem;">
          <div class="imgProduct">
            <img src="img/product/product2.jpg" class="card-img-top" alt="...">
            <div class="iconList">
              <a  href="#" title="Add to cart"><div class="iconItem" ><h2><i class="bi bi-cart-fill"></i></h2></div> </a> 
              <a  href="#" title="View Detail"><div class="iconItem"><h2><i class="bi bi-eye-fill"></i></h2></div> </a> 
            </div>
          </div>          
          <div class="card-body">
            <p class="card-text">Tên sản phẩm</p>
            <p>Giá</p>
          </div>
        </div>
        <div class="card col-sm-4 col-6" style="width: 18rem;">
          <div class="imgProduct">
            <img src="img/product/product2.jpg" class="card-img-top" alt="...">
            <div class="iconList">
              <a  href="#" title="Add to cart"><div class="iconItem" ><h2><i class="bi bi-cart-fill"></i></h2></div> </a> 
              <a  href="#" title="View Detail"><div class="iconItem"><h2><i class="bi bi-eye-fill"></i></h2></div> </a> 
            </div>
          </div>          
          <div class="card-body">
            <p class="card-text">Tên sản phẩm</p>
            <p>Giá</p>
          </div>
        </div>
        <div class="card col-sm-4 col-6" style="width: 18rem;">
          <div class="imgProduct">
            <img src="img/product/product2.jpg" class="card-img-top" alt="...">
            <div class="iconList">
              <a  href="#" title="Add to cart"><div class="iconItem"><h2><i class="bi bi-cart-fill"></i></h2></div> </a> 
              <a  href="#" title="View Detail"><div class="iconItem"><h2><i class="bi bi-eye-fill"></i></h2></div> </a> 
            </div>
          </div>          
          <div class="card-body">
            <p class="card-text">Tên sản phẩm</p>
            <p>Giá</p>
          </div>
        </div>
        <div class="card col-sm-4 col-6" style="width: 18rem;">
          <div class="imgProduct">
            <img src="img/product/product2.jpg" class="card-img-top" alt="...">
            <div class="iconList">
              <a  href="#" title="Add to cart"><div class="iconItem"><h2><i class="bi bi-cart-fill"></i></h2></div> </a> 
              <a  href="#" title="View Detail"><div class="iconItem"><h2><i class="bi bi-eye-fill"></i></h2></div> </a> 
            </div>
          </div>          
          <div class="card-body">
            <p class="card-text">Tên sản phẩm</p>
            <p>Giá</p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- End Product -->

  <?php include "./php/product.php" ?>

</div> 
    <div id="about">

        <div class="content" data-aos="zoom-out-right">
          <h2>A WATCH DEFINES YOUR CHARACTER WHICH DEFINES YOUR ATTITUDE</h2>           
        </div>
        <div class="aboutContent" data-aos="flip-right">
          <h2>ABOUT US</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div> 
    </div>
    <div class="container-fluid black">
      <div id="news" data-aos="fade-down" data-aos-duration="1000">
    
        <div class="row newsContent" >
          <h2 data-aos="fade-down">NEWS</h2>
          <div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2 pb-5" data-aos="flip-left">
            <div class="card text-center">
              <img class="card-img-top" src="img/News/News2.jpg" alt="Hinh tin tuc 1">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-warning">24-12-2022</h6>
                <h4 class="card-title text-uppercase">Giáng Sinh an lành!</h4>
                <p class="card-text">
                  Nhận ưu đãi lên đến 20% khi mua đồng hồ vào ngày 24-12-2022...</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2 pb-5" data-aos="flip-left">
            <div class="card text-center">
              <img class="card-img-top" src="img/News/News3.jpg" alt="Hinh tin tuc 2">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-warning">13-12-2019</h6>
                <h4 class="card-title text-uppercase">Cloud tech day - Giải mã bài toán</h4>
                <p class="card-text">
                  Ông Vũ Minh Trí, CEO nhấn mạnh "Các doanh nghiệp cần hiểu rõ vấn đề của mình, từ..."</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6  col-md-3 col-lg-3 px-2 pb-5" data-aos="flip-left">
            <div class="card text-center">
              <img class="card-img-top" src="img/News/News1.jpg" alt="Hinh tin tuc 3">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-warning">12-12-2019</h6>
                <h4 class="card-title text-uppercase">Ra mắt Bộ sưu tập Rolex Christmas.</h4>
                <p class="card-text">
                  Ra mắt bộ sản</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2 pb-5" data-aos="flip-left">
            <div class="card text-center">
              <img class="card-img-top" src="img/ro1.jpg" alt="Hinh tin tuc 4">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-warning">13-12-2019</h6>
                <h4 class="card-title text-uppercase">Tuyên bố thành nhà phát triển toàn cầu.</h4>
                <p class="card-text">
                  Trở thành nhà phát triển toàn cầu, ngoài khu vực ASEAN còn hướng đến khu vực châu Mỹ...</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"></div>
       
         <footer data-aos="fade-down">
          <div class="col-md-12 text-center footerContent">
            <div class="footer-site-logo mb-4">
              <a href="#">Brand</a>
            </div>
            <ul class="list-unstyled mb-5 ">
              <li><a class="nav-link" href="#">Home</a></li>
              <li><a class="nav-link" href="#about">About</a></li>
              <li><a class="nav-link" href="#">Press</a></li>
              <li><a class="nav-link" href="#">Careers</a></li>
              <li><a class="nav-link" href="#">FAQ</a></li>
              <li><a class="nav-link" href="#">Legal</a></li>
              <li><a class="nav-link" href="#">Contact</a></li>
            </ul>

          <div class="social mb-4">
            <h3>Stay in touch</h3>
            <ul class="list-unstyled">
              <li><a href="#"><span><i class="bi bi-facebook" ></i></span></a></li>
              <li><a href="#"><span><i class="bi bi-twitter" ></i></span></a></li>              
              <li><a href="#"><span><i class="bi bi-instagram" style="color:rgb(223, 37, 68)"></i></span></a></li>
            </ul>
          </div>

          <div class="copyright">
            <p class="mb-0"><small>&copy; Brand. All Rights Reserved.</small></p>
          </div>


        </div>
       </footer>
    </div> 
      
     
    

      
  
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>