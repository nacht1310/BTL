<?php include "../lib/database.php" ?>

<?php 
    $db = new Database();
    $query = "SELECT name FROM tbl_brand";
    $result = $db->select($query);

    for($i = 0; $i < $result->num_rows; $i++) {
        $brand[$i] = $result->fetch_assoc();
    }

    $query = "SELECT name FROM tbl_model";
    $result = $db->select($query);

    for($i = 0; $i < $result->num_rows; $i++) {
        $model[$i] = $result->fetch_assoc();
    }


    $query = "SELECT year FROM tbl_year";
    $result = $db->select($query);

    for($i = 0; $i < $result->num_rows; $i++) {
        $year[$i] = $result->fetch_assoc();
    }

?>


<?php include "./header.php" ?>

<div class="container">
    <h3>Our most popular models</h3>

    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="https://cdn2.chrono24.com/cdn-cgi/image/f=auto,metadata=none,q=65,h=305/images/topmodels/58-23ylh0e75ur1pxmih48bd3x0-Original.png" class="watch-image">
            <p class="watch-brand">Rolex</p>
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-price">from $5,547</p>
        </div>
        
        <div class="item">
            <img src="https://cdn2.chrono24.com/cdn-cgi/image/f=auto,metadata=none,q=65,h=305/images/topmodels/58-23ylh0e75ur1pxmih48bd3x0-Original.png" class="watch-image">
            <p class="watch-brand">Rolex</p>
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-price">from $5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/cdn-cgi/image/f=auto,metadata=none,q=65,h=305/images/topmodels/58-23ylh0e75ur1pxmih48bd3x0-Original.png" class="watch-image">
            <p class="watch-brand">Rolex</p>
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-price">from $5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/cdn-cgi/image/f=auto,metadata=none,q=65,h=305/images/topmodels/58-23ylh0e75ur1pxmih48bd3x0-Original.png" class="watch-image">
            <p class="watch-brand">Rolex</p>
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-price">from $5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/cdn-cgi/image/f=auto,metadata=none,q=65,h=305/images/topmodels/58-23ylh0e75ur1pxmih48bd3x0-Original.png" class="watch-image">
            <p class="watch-brand">Rolex</p>
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-price">from $5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/cdn-cgi/image/f=auto,metadata=none,q=65,h=305/images/topmodels/58-23ylh0e75ur1pxmih48bd3x0-Original.png" class="watch-image">
            <p class="watch-brand">Rolex</p>
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-price">from $5,547</p>
        </div>
    </div>

    <div class="filter">
        <h4 style="margin-right: 20px;">Filter: </h4>
        <div class="button" id="brand">
            <button>Brand</button>
        </div>

        <div class="button" id="model">
            <button>Model</button>
        </div>

        <div class="button" id="year">
            <button>Year</button>
        </div>

        <div class="button" id="price">
            <button>Price</button>
        </div>
        
    </div>

    <form class="filter-board" action="category.php" method="POST">
        <div style="display: flex; width:100%; height:85%">
            <div class="menu">
                <div class="menu-item" id="brand-menu">
                    <div>Brand</div>
                </div>

                <div class="menu-item" id="model-menu">
                    <div>Model</div>
                </div>

                <div class="menu-item" id="year-menu">
                    <div>Year</div>
                </div>

                <div class="menu-item" id="price-menu">
                    <div>Price</div>
                </div>
            </div>
            <div class="board" id="brand-board">
                <h3>Brand</h3>
                <h4>All Brand</h4>

                <div class="row">
                    <?php 
                    $n= floor(count($brand)/3);
                        echo '<div style="width:33%">';
                        for($i = 0; $i < $n+1; $i++) {
                            echo '<div class="check">
                                <input type="checkbox" name="brand" value="';
                            echo $brand[$i]["name"];
                            echo '">
                                <label for="brand">';
                            echo $brand[$i]["name"];
                            echo '</label>
                            </div>
                            ';
                        }
                        echo '</div>';

                        echo '<div style="width:33%">';
                        for($i = $n+1; $i < 2*$n+1; $i++) {
                            echo '<div class="check">
                                <input type="checkbox" name="brand" value="';
                            echo $brand[$i]["name"];
                            echo '">
                                <label for="brand">';
                            echo $brand[$i]["name"];
                            echo '</label>
                            </div>
                            ';
                        }
                        echo '</div>';

                        echo '<div style="width:33%">';
                        for($i = 2*$n+1; $i < count($brand); $i++) {
                            echo '<div class="check">
                                <input type="checkbox" name="brand" value="';
                            echo $brand[$i]["name"];
                            echo '">
                                <label for="brand">';
                            echo $brand[$i]["name"];
                            echo '</label>
                            </div>
                            ';
                        }
                        echo '</div>';
                    ?>
                </div>
            </div>
            <div class="board" id="model-board">
                <h3>Model</h3>
                <h4>All Model</h4>

                <div class="row">
                    <?php 
                    $n= floor(count($model)/3);
                        echo '<div style="width:33%">';
                        for($i = 0; $i < $n+1; $i++) {
                            echo '<div class="check">
                                <input type="checkbox" name="model" value="';
                            echo $model[$i]["name"];
                            echo '">
                                <label for="model">';
                            echo $model[$i]["name"];
                            echo '</label>
                            </div>
                            ';
                        }
                        echo '</div>';

                        echo '<div style="width:33%">';
                        for($i = $n+1; $i < 2*$n+1; $i++) {
                            echo '<div class="check">
                                <input type="checkbox" name="model" value="';
                            echo $model[$i]["name"];
                            echo '">
                                <label for="model">';
                            echo $model[$i]["name"];
                            echo '</label>
                            </div>
                            ';
                        }
                        echo '</div>';

                        echo '<div style="width:33%">';
                        for($i = 2*$n+1; $i < count($model); $i++) {
                            echo '<div class="check">
                                <input type="checkbox" name="model" value="';
                            echo $model[$i]["name"];
                            echo '">
                                <label for="model">';
                            echo $model[$i]["name"];
                            echo '</label>
                            </div>
                            ';
                        }
                        echo '</div>';
                    ?>
                </div>
            </div>
            <div class="board" id="year-board">
                <h3>Year</h3>

                <div class="row">
                    <?php 
                    $n= floor(count($year)/3);
                        echo '<div style="width:33%">';
                        for($i = 0; $i < $n+1; $i++) {
                            echo '<div class="check">
                                <input type="checkbox" name="year" value="';
                            echo $year[$i]["year"];
                            echo '">
                                <label for="year">';
                            echo $year[$i]["year"];
                            echo '</label>
                            </div>
                            ';
                        }
                        echo '</div>';

                        echo '<div style="width:33%">';
                        for($i = $n+1; $i < 2*$n+1; $i++) {
                            echo '<div class="check">
                                <input type="checkbox" name="year" value="';
                            echo $year[$i]["year"];
                            echo '">
                                <label for="year">';
                            echo $year[$i]["year"];
                            echo '</label>
                            </div>
                            ';
                        }
                        echo '</div>';

                        echo '<div style="width:33%">';
                        for($i = 2*$n+1; $i < count($year); $i++) {
                            echo '<div class="check">
                                <input type="checkbox" name="year" value="';
                            echo $year[$i]["year"];
                            echo '">
                                <label for="year">';
                            echo $year[$i]["year"];
                            echo '</label>
                            </div>
                            ';
                        }
                        echo '</div>';
                    ?>
                </div>
            </div>
            <div class="board" id="price-board">
                <h3>Price</h3>

            </div>
            
        </div>
        <div style="display: flex; flex-direction: row-reverse;padding:20px; height:15%">
            <button class="btn" type="submit">Apply Filter(s)</button>
        </div>
    </form>

    <div class="product-list">
        <div class="item">
            <img src="https://cdn2.chrono24.com/images/uhren/25669017-ndrgpu2odu6fy76vyk82eiih-Square360.jpg" class="watch-image">
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-attribute">Chrono Unitime 18k Rose Gold RB0510U0/A733</p>
            <p class="watch-price">$5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/images/uhren/25669017-ndrgpu2odu6fy76vyk82eiih-Square360.jpg" class="watch-image">
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-attribute">Chrono Unitime 18k Rose Gold RB0510U0/A733</p>
            <p class="watch-price">$5,547</p>
        </div>
        
        <div class="item">
            <img src="https://cdn2.chrono24.com/images/uhren/25669017-ndrgpu2odu6fy76vyk82eiih-Square360.jpg" class="watch-image">
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-attribute">Chrono Unitime 18k Rose Gold RB0510U0/A733</p>
            <p class="watch-price">$5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/images/uhren/25669017-ndrgpu2odu6fy76vyk82eiih-Square360.jpg" class="watch-image">
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-attribute">Chrono Unitime 18k Rose Gold RB0510U0/A733</p>
            <p class="watch-price">$5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/images/uhren/25669017-ndrgpu2odu6fy76vyk82eiih-Square360.jpg" class="watch-image">
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-attribute">Chrono Unitime 18k Rose Gold RB0510U0/A733</p>
            <p class="watch-price">$5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/images/uhren/25669017-ndrgpu2odu6fy76vyk82eiih-Square360.jpg" class="watch-image">
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-attribute">Chrono Unitime 18k Rose Gold RB0510U0/A733</p>
            <p class="watch-price">$5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/images/uhren/25669017-ndrgpu2odu6fy76vyk82eiih-Square360.jpg" class="watch-image">
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-attribute">Chrono Unitime 18k Rose Gold RB0510U0/A733</p>
            <p class="watch-price">$5,547</p>
        </div>

        <div class="item">
            <img src="https://cdn2.chrono24.com/images/uhren/25669017-ndrgpu2odu6fy76vyk82eiih-Square360.jpg" class="watch-image">
            <p class="watch-name">Yacht-Master</p>
            <p class="watch-attribute">Chrono Unitime 18k Rose Gold RB0510U0/A733</p>
            <p class="watch-price">$5,547</p>
        </div>
    </div>
</div>

<?php include "./footer.php" ?>