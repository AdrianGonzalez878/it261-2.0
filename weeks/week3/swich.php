<?php
//$variable= 'This is our variable';
//if (isset($variable)) {
   // echo 'Varibale has been set';
//} else
//echo 'Variable has been set';

//echo '<br>';

//if(isset($_GET['today'])) {
   // echo 'Today has been set';
//} else {
   //echo 'NOT!!!!!';
//}

if(isset($_GET['today'])) {
    $today= $_GET['today'];
} else {
    $today= date('l');
}

switch($today) {
case 'Friday' :
$coffe= '<h2>Friday is our pumpkin latte day!</h2>';
$pic= 'Pumpkin.jpeg';
$alt= 'pumpkin latte';
$content= '<p> <b> Aenean ultrices turpis at nisi volutpat iaculis.</b> Phasellus congue vulputate quam nec aliquam. Duis posuere nunc sed purus elementum finibus. Phasellus odio enim, bibendum ut tellus sit amet, ornare dictum enim. </p>';
break;

case 'Saturday' :
    $coffe= '<h2>Saturday is our Green Tea day!</h2>';
    $pic= 'green tea.png';
    $alt= 'Green Tea ';
    $content= '<p> <b>Green tea </b>is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia.</p>';
    break;

case 'Sunday' :
    $coffe= '<h2>Sunday is our Regular Joe Day!</h2>';
    $pic= 'coffee.png';
    $alt= 'Regular Coffee';
    $content= '<p> <b> Black coffee </b> is as simple as it gets with ground coffee beans steeped in hot water, served warm. And if you want to sound fancy, you can call black coffee by its proper name: cafe noir. Since it is not doctored up with milk or sugar, the quality of coffee is especially important.</p>';
    break;

case 'Monday' :
    $coffe= '<h2>Monday is our Latte day!</h2>';
    $pic= 'latte.png';
    $alt= 'Latte ';
    $content= '<p> <b>Latte</b> is a coffee drink of Italian origin made with espresso and steamed milk. Variants include the chocolate-flavored mocha or replacing the coffee with another beverage base such as masala chai (spiced Indian tea), mate, matcha, turmeric or rooibos; alternatives to milk, such as soy milk or almond milk, are also used.</p>';
    break;

case 'Tuesday' :
    $coffe= '<h2>Tuesday is our Americano day!</h2>';
    $pic= 'americano.png';
    $alt= 'Americano';
    $content= '<p> <b>Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso shot with hot water at a 1:3 to 1:4 ratio, resulting in a drink that retains the complex flavors of espresso, but in a lighter way</p>';
    break;

case 'Wednesday' :
    $coffe= '<h2>Wednesday is our Espresso day!</h2>';
    $pic= 'espresso.png';
    $alt= 'Espresso';
    $content= '<p> <b>Espresso</b>is one of the most popular coffee-brewing methods, of Italian origin. The French also made a significant contribution to the invention of the first coffee makers, predecessors of todayespresso machines, and generally to the café culture.</p>';
    break;

case 'Thursday' :
    $coffe= '<h2>Thursday is our Mayordomo day!</h2>';
    $pic= 'mayordomo.png';
    $alt= 'Mayordomo';
    $content= '<p> <b>Mayordomo</b> Due to its undissolved granulated sugar, and its rough and gritty texture, the table chocolate is not meant to be eaten like a chocolate bar, although Mayordomo bars can be eaten out of hand. The bars and discs are primarily used to make hot chocolate in traditional Mexican form. Chocolate Mayordomo is prepared on the stove by dissolving the squares in hot milk or water.</p>';
    break;

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch classwork exercise</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #wrapper {
            width: 940px;
            margin: 20px auto;
        }

        h1, h2 {
            margin-bottom: 10px;
        }

        p{
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div id="wrapper">
        <h1>My wonderful switch classwork exercise (Not the daily homework)</h1>
        <?php
        echo $coffe;
        ?>
        <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
        <?php echo $content; ?>
        <h2>Check out our Daily specials</h2>

        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
    </div>
    
</body>
</html>