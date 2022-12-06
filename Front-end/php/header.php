<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <div class="container-fluid">
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
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>