<?php include "./php/header.php" ?>
<?php include "./lib/database.php" ?>

<?php 
  $db = new Database();
  if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "INSERT INTO tbl_customer (cus_name, cus_mail, cus_phone, cus_messages) VALUES ('$name', '$email', '$phone', '$message')";
    $result = $db->insert($query);
    if($result != false) {
      echo '<script>swal("We have successfully receive your information. We would contact you as soon as possible!");</script>';
    }
    else {
      echo '<script>swal("We fail to receive your information. Please try again!");</script>';
    }
  }

  $query = "SELECT * from tbl_page_info";
    $result = $db->select($query);
    $value = $result->fetch_assoc();
?>
   
    <div class="bannerContact">
        <h2 data-aos="fade-down">Contact Us</h2>
        
    </div>

   
    <section id="contact">
  
  <h1 class="section-header">Contact</h1>
  
  <div class="contact-wrapper">
  
  <!-- Left contact page --> 
    
    <form id="contact-form" class="form-horizontal" role="form" action="contact.php" method="POST">
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="phone" class="form-control" id="phone" placeholder="PHONE" name="phone" value="" required>
        </div>
      </div>
      <textarea class="form-control" rows="10" placeholder="PLEASE LET US KNOW IF YOU HAVE ANY TYPE OF PRODUCT THAT YOU INTERESTED IN" name="message" required></textarea>
      
      <button class="btn btn-primary send-button" id="submit" type="submit" name="send">
        <div class="alt-send-button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
      
    </form>
    
  <!-- Left contact page --> 
    
      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="bi bi-pin-map-fill size"><span class="contact-text place"> <?php echo $value['address']; ?></span></i></li>
          
          <li class="list-item"><i class="bi bi-telephone"><span class="contact-text phone"><?php echo $value['phone']; ?></span></i></li>
          
          <li class="list-item"><i class="bi bi-envelope-fill"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email"><?php echo $value['email']; ?></a></span></i></li>
          
        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="bi bi-facebook" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-codepen" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>       
        </ul>
        <hr>

        <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

      </div>
    
  </div>
  
</section>  
    
   
<?php include "./php/footer.php" ?>