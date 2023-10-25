<?php
//if statements
//if else statements
//if elseif statements

$temperature = 61;
if ($temperature <= 60) {
    echo'It is a semi-warm day!';
} else {
    echo'It may be getting warner!';
}
echo '<br>';
$new_temp =81;
if ($new_temp<= 60) {
    echo'Not a very warm day!';
} elseif ($new_temp <=70) {
    echo 'It is getting warmer';
} elseif ($new_temp <=80) {
    echo 'We might be going to the beach!';
} else {
    echo 'We will <b>definetely</b> go the beach!';
}

echo '<h2>This exercise will be about a salary, a bonus and sales!</h2>';
//a salary anual of 95000 -- anual
//sales need to be above 100000, you will start making bonus!!!
//100000 = 5%
//120000 = 10%
//140000 = 15%
//150000 = 20%

$salary == 95000;
$sales == 150000;

if ($sales <= 99999) {
    echo 'sorry, you did not make your bonus!';
} elseif ($sales <= 119000) {
    $salary *= 1.05;
    echo '$'.number_format($salary, 2). 'dollars';
} elseif ($sales <= 139999) {
    $salary*= 1.10;
    echo '$'.number_format($salary, 2). 'dollars';
} elseif ($sales <= 149999) {
    $salary*= 1.15;
    echo '$'.number_format($salary, 2). 'dollars';
} else {
    $salary*= 1.20;
    echo 'Awesome! you made 20% bonus!!! your annual salary including bonus totals $'.number_format($salary, 2). 'dollars';
}