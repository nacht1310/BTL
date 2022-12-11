<?php 
    function getData($db, $name, $table) {
        $query = "SELECT $name FROM $table";
        $result = $db->select($query);

        for($i = 0; $i < $result->num_rows; $i++) {
            $value[$i] = $result->fetch_assoc();
        }

        return $value;
    }

    function displayBrand($element, $check) {
        $n= floor(count($element)/3);
        echo '<div style="width:33%">';
        for($i = 0; $i < $n+1; $i++) {
            echo '<div class="check">
                <input type="checkbox" name="brand[]" value="';
            echo $element[$i]["name"];
            echo '"';

            if(in_array($element[$i]["name"], $check)) {
                echo 'checked';
            }
            echo '>
                <label for="brand[]">';
            echo $element[$i]["name"];
            echo '</label>
            </div>
            ';
        }
        echo '</div>';

        echo '<div style="width:33%">';
        for($i = $n+1; $i < 2*$n+1; $i++) {
            echo '<div class="check">
                <input type="checkbox" name="brand[]" value="';
            echo $element[$i]["name"];
            echo '"';

            if(in_array($element[$i]["name"], $check)) {
                echo 'checked';
            }
            echo '>
                <label for="brand[]">';
            echo $element[$i]["name"];
            echo '</label>
            </div>
            ';
        }
        echo '</div>';

        echo '<div style="width:33%">';
        for($i = 2*$n+1; $i < count($element); $i++) {
            echo '<div class="check">
                <input type="checkbox" name="brand[]" value="';
            echo $element[$i]["name"];
            echo '"';

            if(in_array($element[$i]["name"], $check)) {
                echo 'checked';
            }
            echo '>
                <label for="brand[]">';
            echo $element[$i]["name"];
            echo '</label>
            </div>
            ';
        }
        echo '</div>';
    }

    function displayModel($element, $check) {
        $n= floor(count($element)/3);
        echo '<div style="width:33%">';
        for($i = 0; $i < $n+1; $i++) {
            echo '<div class="check">
                <input type="checkbox" name="model[]" value="';
            echo $element[$i]["name"];
            echo '"';

            if(in_array($element[$i]["name"], $check)) {
                echo 'checked';
            }
            echo '>
                <label for="model[]">';
            echo $element[$i]["name"];
            echo '</label>
            </div>
            ';
        }
        echo '</div>';

        echo '<div style="width:33%">';
        for($i = $n+1; $i < 2*$n+1; $i++) {
            echo '<div class="check">
                <input type="checkbox" name="model[]" value="';
            echo $element[$i]["name"];
            echo '"';

            if(in_array($element[$i]["name"], $check)) {
                echo 'checked';
            }
            echo '>
                <label for="model[]">';
            echo $element[$i]["name"];
            echo '</label>
            </div>
            ';
        }
        echo '</div>';

        echo '<div style="width:33%">';
        for($i = 2*$n+1; $i < count($element); $i++) {
            echo '<div class="check">
                <input type="checkbox" name="model[]" value="';
            echo $element[$i]["name"];
            echo '"';

            if(in_array($element[$i]["name"], $check)) {
                echo 'checked';
            }
            echo '>
                <label for="model[]">';
            echo $element[$i]["name"];
            echo '</label>
            </div>
            ';
        }
        echo '</div>';
    }

    function displayYear($element, $check) {
        $n= floor(count($element)/3);
        echo '<div style="width:33%">';
        for($i = 0; $i < $n+1; $i++) {
            echo '<div class="check">
                <input type="checkbox" name="year[]" value="';
            echo $element[$i]["year"];
            echo '"';

            if(in_array($element[$i]["year"], $check)) {
                echo 'checked';
            }
            echo '>
                <label for="year[]">';
            echo $element[$i]["year"];
            echo '</label>
            </div>
            ';
        }
        echo '</div>';

        echo '<div style="width:33%">';
        for($i = $n+1; $i < 2*$n+1; $i++) {
            echo '<div class="check">
                <input type="checkbox" name="year[]" value="';
            echo $element[$i]["year"];
            echo '"';

            if(in_array($element[$i]["year"], $check)) {
                echo 'checked';
            }
            echo '>
                <label for="year[]">';
            echo $element[$i]["year"];
            echo '</label>
            </div>
            ';
        }
        echo '</div>';

        echo '<div style="width:33%">';
        for($i = 2*$n+1; $i < count($element); $i++) {
            echo '<div class="check">
                <input type="checkbox" name="year[]" value="';
            echo $element[$i]["year"];
            echo '"';

            if(in_array($element[$i]["year"], $check)) {
                echo 'checked';
            }
            echo '>
                <label for="year[]">';
            echo $element[$i]["year"];
            echo '</label>
            </div>
            ';
        }
        echo '</div>';
    }
?>