<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Calculator</title>
    <link rel="stylesheet" href="css folder/styles4.css">
</head>
<body>
    <h1>My Travel Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
        
        <label>TOTAL MILES DRIVING?</label>
        <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ?>">
        
        <label>HOW FAST DO YOU TYPICALLY DRIVE?</label>
        <input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>">
        
        <label>HOW MANY HOURS PER DAY DO YOU PLAN ON DRIVING?</label>
        <input type="number" name="day" value="<?php if(isset($_POST['day'])) echo htmlspecialchars($_POST['day']); ?>">
        
        <label>PRICE OF GAS</label>
        <ul>
        <li> <input type="radio" name="currency" value="3.00" <?php if(isset($_POST['currency']) && $_POST['currency'] == 3.00) echo 'checked="checked"'; ?> > $3.00 </li>   
        <li> <input type="radio" name="currency" value="3.50" <?php if(isset($_POST['currency']) && $_POST['currency'] == 3.50) echo 'checked="checked"'; ?> > $3.50 </li>
        <li> <input type="radio" name="currency" value="4.00" <?php if(isset($_POST['currency']) && $_POST['currency'] == 4.00) echo 'checked="checked"'; ?> > $4.00 </li>
        </ul>
        
        <label>FUEL EFFICIENCY</label>
        <select name="bank">
            <option value="" <?php if(isset($_POST['bank']) && is_null($_POST['bank'])) echo 'selected = "unselected"'; ?>>Select one:</option>
            <option value="40" <?php if(isset($_POST['bank']) && $_POST['bank'] == 40) echo 'selected = "selected"'; ?>>Great @ 40mpg</option>
            <option value="10" <?php if(isset($_POST['bank']) && $_POST['bank'] == 10) echo 'selected = "selected"'; ?>>Terrible @ 10mpg</option>
            <option value="25" <?php if(isset($_POST['bank']) && $_POST['bank'] == 25) echo 'selected = "selected"'; ?> >Good @ 25mpg</option>
        </select>
        
        <input type="submit" value="Calculate">
        <p><a href="">Reset it!</a></p>
    </fieldset>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name!</p>';
        }
        if(empty($_POST['miles'])) {
            echo '<p class="error">Please fill out your total miles driving</p>';
        }
        if(empty($_POST['amount'])) {
            echo '<p class="error">Please fill out how fast you will be driving</p>';
        }
        if(empty($_POST['day'])) {
            echo '<p class="error">How many hours per day would you like to drive?</p>';
        }
        if(empty($_POST['currency'])) {
            echo '<p class="error">Please specify the cost of gas</p>';
        }
        if($_POST['bank'] == NULL) {
            echo '<p class="error">Please select your car efficiency</p>';
        }
        if(isset($_POST['name'], $_POST['miles'], $_POST['amount'], $_POST['day'], $_POST['currency'], $_POST['bank'])) {
            $name = $_POST['name'];
            $miles = floatval($_POST['miles']);
            $amount = floatval($_POST['amount']);
            $day = floatval($_POST['day']);
            $currency = floatval($_POST['currency']);
            $bank = floatval($_POST['bank']);
            $totalHours = $miles / $amount;
            $totalDays = $totalHours / $day;
            $totalGallons = $miles / $bank;
            $totalCost = $totalGallons * $currency;
            if (!empty($name && $miles && $amount && $day && $currency) && ($bank != NULL)) {
                echo '
                <div class="box">
                    <h2>Hello '.$name.',</h2>
                    <p>You will be traveling a total of <b> '.number_format($totalHours, 2).' hours</b>, taking <b>'.number_format($totalDays, 2).' days</b>, and you will be using <b>'.$totalGallons.' gallons</b> of gas, costing you <b>$'.$totalCost.'</b>.</p>
                </div>';
            }
        }
    }
    ?>

    <footer>
        <p><small>&copy; 2023 by Adrian Gonzalez, All Rights Reserved ~ <a id="html-checker" href="#">Check HTML</a> ~ <a id="css-checker" href="#">Check CSS</a></small></p>
    </footer>
    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
</body>
</html>
