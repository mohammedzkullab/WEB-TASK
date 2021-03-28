<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-task-2</title>
    <link rel="stylesheet" href="style.css" role="">
</head>

<body>
    <!--Main container-->
    <div class="main-container">
        <h1 class="h1">
            In Which Country A City Is Located?
        </h1>

        <h3 class="h3">
            Please Choose a City
        </h3>

        <form action="web-task.php" method="post">





            <?php

            $op = array(
                "Japan"     =>  "Tokyo",
                "Mexico"    =>  "Mexico City",
                "USA"       =>  "New York City",
                "India"     =>  "Mumbai",
                "Korea"     =>  "Seoul",
                "China"     =>  "Shanghai",
                "Nigeria"   =>  "Lagos",
                "Argentina" =>  "Buenos Aires",
                "Egypt"     =>  "Cairo",
                "UK"        =>  "London"

            );
            $city = @$_POST['country-selection'];
?>
           

            <select name="country-selection" id="country-selection">
                <option value="Tokyo" <?php if (isset($city) && $city == "Tokyo") echo "selected"; ?>>Tokyo</option>
                <option value="Mexico City" <?php if (isset($city) && $city == "Mexico City") echo "selected"; ?>>Mexico City</option>
                <option value="New York City" <?php if (isset($city) && $city == "New York City") echo "selected"; ?>>New York City</option>
                <option value="Mumbai" <?php if (isset($city) && $city == "Mumbai") echo "selected"; ?>>Mumbai</option>
                <option value="Seoul" <?php if (isset($city) && $city == "Seoul") echo "selected"; ?>>Seoul</option>
                <option value="Shanghai" <?php if (isset($city) && $city == "Shanghai") echo "selected"; ?>>Shanghai</option>
                <option value="Lagos" <?php if (isset($city) && $city == "Lagos") echo "selected"; ?>>Lagos</option>
                <option value="Buenos Aires" <?php if (isset($city) && $city == "Buenos Aires") echo "selected"; ?>>Buenos Aires</option>
                <option value="Cairo" <?php if (isset($city) && $city == "Cairo") echo "selected"; ?>>Cairo</option>
                <option value="London" <?php if (isset($city) && $city == "London") echo "selected"; ?>>London</option>
            </select>
            <button type="submit" class="submit" name="submit">Go</button>

            <?php
             if (isset($_POST['submit'])) {
                echo "<div class=\"output\">";
                echo "<p>";
                echo "<span class=\"val\">";
                echo $op[array_search($city, $op, true)];
                echo "</span>";
                echo " is in : ";
                echo "<span class=\"cont\">";
                echo array_search($city, $op, true);
                echo "</span>";
                echo "</p>";
                echo "</div>";
            }

            ?>
        </form>
    </div>
</body>

</html>