<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
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
                
                <form>
                    <label>Update About Us: </label><br>
                    <textarea name="about" class="medium" >
                    </textarea><br>
                                        
                    <input type="submit" name="submit" Value="Update" class="button">
                </form>
            </div>

            <div class="category" id="contact-us-pos">
                <h5>Contact Us </h5>
                
                <form>
                    <label>Phone Number: </label><br>
                    <input type="text" placeholder="Enter new phone number"  name="phone" class="medium" ><br>

                    <label>Address: </label><br>
                    <input type="text" placeholder="Enter new address"  name="address" class="medium" ><br>

                    <label>E-mail: </label><br>
                    <input type="text" placeholder="Enter new e-mail"  name="email" class="medium" ><br>
                                        
                    <input type="submit" name="submit" Value="Update" class="button">
                </form>
            </div>
        </div>

        <h4>Slider Option</h4>
        <div class="section">
            <div class="category" id="slider-pos">
                <h5>Add Slider</h5>
              
                <form>
                    <label>Slider Title: </label><br>
                    <input type="text" placeholder="Enter Website Title"  name="slider-title" class="medium" ><br>
                            
                    <label>Slider Image: </label><br>
                    <input type="file" name="slider-image" class="medium" ><br>
            
                    <input type="submit" name="submit" Value="Update" class="button">
                </form>
            </div>
           
        </div>

        <h4>Category Option</h4>
        <div class="section">
            <div class="category" id="category-pos">
                <h5>Add Category</h5>
              
                <form>
                    <label>Category Name: </label><br>
                    <input type="text" placeholder="Enter Website Title"  name="category-name" class="medium" ><br>
                                       
                    <input type="submit" name="submit" Value="Update" class="button">
                </form>
            </div>
        </div>

        <h4>Product Option</h4>
        <div class="section">
        <div class="category" id="product-pos">
                <h5>Add Product</h5>
              
                <form>
                    <label>Product Name: </label><br>
                    <input type="text" placeholder="Enter Website Title"  name="category-name" class="medium" ><br>

                    <label>Category: </label><br>
                    <button class="btn btn-warning button-drop dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="category-dropdown">
                        Category
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul><br>

                    <label>Brand: </label><br>
                    <button class="btn btn-warning button-drop dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="brand-dropdown">
                        Brand
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

                    <label>Type: </label><br>
                    <button class="btn btn-warning button-drop dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="type-dropdown">
                        Type
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul><br>
                                       
                    <input type="submit" name="submit" Value="Update" class="button">
                </form>
            </div>
        </div>

        <button class="scroll-to-top"><span class="material-icons">keyboard_double_arrow_up</span></button>
    </div>
<?php include 'inc/footer.php';?>