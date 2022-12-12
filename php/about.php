<?php 
    $db = new Database();
    $query = "SELECT about from tbl_page_info";
    $result = $db->select($query);
    $value = $result->fetch_assoc();
?>
    <div id="about">

        <div class="content" data-aos="zoom-out-right">
          <h2>A WATCH DEFINES YOUR CHARACTER WHICH DEFINES YOUR ATTITUDE</h2>           
        </div>
        <div class="aboutContent" data-aos="flip-right">
          <h2>ABOUT US</h2>
          <p><?php echo $value['about']; ?></p>
        </div> 
    </div>
   