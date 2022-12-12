<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include "../helper/format.php" ?>
<?php include 'changepass.php' ?>
<?php include 'changeCategory.php' ?>
<?php include 'changePageInfo.php' ?>

    <div class="container">
        <h4>Site Option</h4>
        <div class="section">
            <div class="category" id="tilte-slogan-pos">
                <h5>Title & Slogan</h5>
                
                <form>
                    <label>Website Title: </label><br>
                    <input type="text" placeholder="Enter Website Title"  name="title" class="medium" ><br>
                            
                    <label>Website Slogan: </label><br>
                    <input type="text" placeholder="Enter Website Slogan" name="slogan" class="medium" ><br>
            
                    <input type="submit" name="submit" Value="Update" class="button">
                </form>
            </div>

            <div class="category" id="social-pos">
                <h5>Social Media</h5>
                
                <form>
                    <label>Facebook: </label><br>
                    <input type="text" placeholder="Link to Facebook"  name="facebook" class="medium" ><br>
                            
                    <label>Twitter: </label><br>
                    <input type="text" placeholder="Link to Twitter" name="twitter" class="medium" ><br>

                    <label>LinkedIn: </label><br>
                    <input type="text" placeholder="Link to LinkedIn"  name="linkedin" class="medium" ><br>
                            
                    <label>Google Plus: </label><br>
                    <input type="text" placeholder="Link to Google Plus" name="google" class="medium" ><br>
            
                    <input type="submit" name="submit" Value="Update" class="button">
                </form>
            </div>

            <div class="category" id="copyright-pos">
                <h5>Copyright</h5>
                
                <form>
                    <label>Update Copyright Text: </label><br>
                    <input type="text" placeholder="Enter Copyright Text"  name="copyright" class="medium" ><br>
                                        
                    <input type="submit" name="submit" Value="Update" class="button">
                </form>
            </div>
        </div>

        <h4>Update Pages</h4>
        <div class="section">
            <div class="category" id="about-us-pos">
                <h5>About Us </h5>
                
                <form action="index.php" method="POST">
                    <label>Update About Us: </label><br>
                    <textarea name="about" class="medium" >
                    </textarea><br>
                                        
                    <input type="submit" name="submit" Value="Update Page" class="button">
                </form>
            </div>

            <div class="category" id="contact-us-pos">
                <h5>Contact Us </h5>
                
                <form action="index.php" method="POST">
                    <label>Phone Number: </label><br>
                    <input type="text" placeholder="Enter new phone number"  name="phone" class="medium" ><br>

                    <label>Address: </label><br>
                    <input type="text" placeholder="Enter new address"  name="address" class="medium" ><br>

                    <label>E-mail: </label><br>
                    <input type="text" placeholder="Enter new e-mail"  name="email" class="medium" ><br>
                                        
                    <input type="submit" name="submit" Value="Update Page" class="button">
                </form>
            </div>
        </div>

        <h4>Category Option</h4>
        <div class="section">
            <div class="category" id="brand-pos">
                <h5>Add Brand</h5>
              
                <form action="index.php" method="POST">
                    <label>Brand Name: </label><br>
                    <input type="text" placeholder="Enter brand name"  name="brand-name" class="medium" ><br>
                                       
                    <input type="submit" name="submit" value="Add Category" class="button">
                </form>
            </div>

            <div class="category" id="model-pos">
                <h5>Add Model</h5>
              
                <form action="index.php" method="POST">
                    <label>Model Name: </label><br>
                    <input type="text" placeholder="Enter model name"  name="model-name" class="medium" ><br>
                                       
                    <input type="submit" name="submit" value="Add Category" class="button">
                </form>
            </div>

            <div class="category" id="year-pos">
                <h5>Add Year</h5>
              
                <form action="index.php" method="POST">
                    <label>Year Name: </label><br>
                    <input type="text" placeholder="Enter year"  name="year-name" class="medium" ><br>
                                       
                    <input type="submit" name="submit" value="Add Category" class="button">
                </form>
            </div>
        </div>

        <h4>Product Option</h4>
        <div class="section">
            <div class="category" id="product-pos">
                <h5>Add Product</h5>
              
                <form>
                    <label>Product Name: </label><br>
                    <input type="text" placeholder="Enter product name"  name="product-name" class="medium" ><br>
                    
                    <label>Brand: </label><br>
                    <button class="btn btn-warning button-drop dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="brand-dropdown">
                        Brand
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul><br>

                    <label>Model: </label><br>
                    <button class="btn btn-warning button-drop dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="category-dropdown">
                        Model
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul><br>

                    <label>Year: </label><br>
                    <button class="btn btn-warning button-drop dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="type-dropdown">
                        Year
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul><br>

                    <label>Description: </label><br>
                    <textarea name="description" class="medium" >
                    </textarea><br>

                    <label>Product Image: </label><br>
                    <input type="file" name="slider-image" class="medium" ><br>

                    <label>Price: </label><br>
                    <input type="number" name="price" class="medium" ><br>
                                       
                    <input type="submit" name="submit" Value="Update" class="button">
                </form>
            </div>
        </div>

        <h4>Change Password</h4>
        <div class="section">
            <div class="category" id="pass-pos">
             
                <form action="index.php" method="POST">
                    <label>Enter your old password: </label><br>
                    <input type="password" placeholder="Enter Your old password"  name="pass_old" class="medium" ><br>

                    <label>Enter your new password: </label><br>
                    <input type="password" placeholder="Enter Your new password"  name="pass_new" class="medium" ><br>

                    <label>Confirm your new password: </label><br>
                    <input type="password" placeholder="Enter Your new password again"  name="pass_confirm" class="medium" ><br>
                                       
                    <input type="submit" name="submit" Value="Change" class="button">
                </form>

            </div>
        </div>

        <button class="scroll-to-top"><span class="material-icons">keyboard_double_arrow_up</span></button>
    </div>
<?php include 'inc/footer.php';?>


<?php 

    $fm = new Format();
    if(isset($_POST['submit']) && $_POST['submit'] == 'Change') {

        $pass_old = $fm->validation($_POST["pass_old"]);
        $pass_new = $fm->validation($_POST["pass_new"]);
        $pass_confirm = $fm->validation($_POST["pass_confirm"]);
        changepass($pass_old, $pass_new, $pass_confirm);
    }
    
    if(isset($_POST['submit']) && $_POST['submit'] == 'Add Category') {
        $brand = $_POST["brand-name"] ?? '';
        $model = $_POST["model-name"] ?? '';
        $year = $_POST["year-name"] ?? '';
        changeCategory($brand, $model, $year);
    }

    if(isset($_POST['submit']) && $_POST['submit'] == 'Update Page') {
        $about = $_POST["about"] ?? '';
        $address = $_POST["address"] ?? '';
        $phone = $_POST["phone"] ?? '';
        $email = $_POST["email"] ?? '';
        changePageInfo($about, $address, $phone, $email);
    }
?>