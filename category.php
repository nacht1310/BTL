<?php include "./lib/database.php" ?>
<?php include "./php/category-support.php" ?>

<?php 
    $db = new Database();

    $brand = getData($db, "name", "tbl_brand");
    $model = getData($db, "name", "tbl_model");
    $year = getData($db, "year", "tbl_year");
    $product = getData($db, "*", "tbl_products");
    $min = 0;
    $max = 100000;

    $checkYear = [];
    if(isset($_GET['year'])) {
        $checkYear = $_GET['year'];
    }
    
    $checkBrand =[];
    if(isset($_GET['brand'])) {
        $checkBrand = $_GET['brand'];
    }

    $checkModel =[];
    if(isset($_GET['model'])) {
        $checkModel = $_GET['model'];
    }

    if(isset($_GET['range-a'])) {
        $min = $_GET['range-a'];
    }

    if(isset($_GET['range-b'])) {
        $max = $_GET['range-b'];
    }

?>


<?php include "./php/header.php" ?>

<div class="container">
    <h3>Our most popular models</h3>

    <form class="owl-carousel owl-theme" action="detail.php" method="POST">
        <?php 
            $value = $product; 
            for($i = 0; $i < count($value); $i++) {
                if($value[$i]['sold'] > 10000) {
                    echo '<div class="item">
                    <img src="../img/product/';
                    echo $value[$i]['img'].'" class="watch-image">
                    <p class="watch-brand">';
                    echo $value[$i]['brand'].'</p>
                    <p class="watch-name">';
                    echo $value[$i]['prd_name'].'</p>
                    <p class="watch-price">from $';
                    echo $value[$i]['price'];
                    echo '</p>
                    <button class="btn" type="submit" name="product" value="';
                    echo $product[$i]['prd_id'];
                    echo '">Check Product</button>
                    </div>';
                }
            }
        
        ?>
        
        </form>

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

    <form class="filter-board" action="category.php" method="GET">
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
                    <?php displayBrand($brand, $checkBrand) ?>
                </div>
            </div>
            <div class="board" id="model-board">
                <h3>Model</h3>
                <h4>All Model</h4>

                <div class="row">
                <?php displayModel($model, $checkModel) ?>
                </div>
            </div>
            <div class="board" id="year-board">
                <h3>Year</h3>

                <div class="row"> 
                    <?php displayYear($year, $checkYear) ?>
                    
                </div>
            </div>
            <div class="board" id="price-board">
                <h3>Price</h3>
                <div class="slider">
                    <div class="slider-track"></div>
                    <input type="range" name="range-a" id="range-a" min="0" max="100000" value="<?php echo $min ?>" oninput="slideA()">
                    <input type="range" name="range-b" id="range-b" min="0" max="100000" value="<?php echo $max ?>" oninput="slideB()">
                </div>
                <div class="values">
                    <div>
                        <label style="font-weight:500;" for="min" >Minimum Price</label><br>
                        <input type="text" name="min" id="min">
                    </div>
                    <div>
                        <label style="font-weight:500;" for="max" >Maximum Price</label><br>
                        <input type="text" name="max" id="max">
                    </div>
                </div>
            </div>
            
        </div>
        <div style="display: flex; flex-direction: row-reverse;padding:20px; height:15%">
            <button class="btn" type="submit">Apply Filter(s)</button>
        </div>
    </form>

    <form class="product-list" action="detail.php" method="POST">
        
        <?php 
            if(empty($checkBrand) && empty($checkModel) && empty($checkYear)) {
                for($i = 0; $i < count($product); $i++) {
                    if($product[$i]['price'] >= $min && $product[$i]['price'] <= $max) {
                        echo '<div class="item" >
                        <img src="../img/product/';
                        echo $product[$i]['img'];
                        echo '" class="watch-image">
                        <p class="watch-name">';
                        echo $product[$i]['prd_name'];
                        echo '</p>
                        <p class="watch-price">';
                        echo '$'.$product[$i]['price'];
                        echo '</p>
                        <button class="btn" type="submit" name="product" value="';
                        echo $product[$i]['prd_id'];
                        echo '">Check Product</button>
                        </div>';
                    }
                }
            }
            else {

                $value2 = [];
                $a=0;
                for($i = 0; $i < count($product); $i++) {
                    if($product[$i]['price'] >= $min && $product[$i]['price'] <= $max) {
                        $value[$i] = $product[$i];
                        if(in_array($value[$i]['brand'], $checkBrand) || in_array($value[$i]['model'], $checkModel) || in_array($value[$i]['year'], $checkYear))  {
                            $value2[$a] = $value[$i];
                            $a++;
                        }

                    }
                    
                }

                if(empty($value2)) {
                    echo "There is no item that match your search";
                }
                else {
                    for($i = 0; $i < count($value2); $i++) {
                        if(array_key_exists($i, $value2)) {
                            echo '<div class="item">
                            <img src="../img/product/';
                            echo $value2[$i]['img'];
                            echo '" class="watch-image">
                            <p class="watch-name">';
                            echo $value2[$i]['prd_name'];
                            echo '</p>
                            <p class="watch-price">';
                            echo '$'.$value2[$i]['price'];
                            echo '</p>
                            <button class="btn" type="submit" name="product" value="';
                            echo $value2[$i]['prd_id'];
                            echo '">Check Product</button>
                            </div>';
                        }
                    }
                }
            }
        ?>

        </form>
</div>

<?php include "./php/footer.php" ?>