<?php
//this file will demostrate for loops and in addition to placing your php inside your HTML!!!
//The for loop -- Loops throungh a block of code a specified number of times.
//for (intit counter; test counter; increment counter) {code to be executed for each interaction;}

//celcius and fahrenheit
// $far= ($celcius * 9/5) + 32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Celcius Table</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        table{
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid lightblue;
        }

        td, th {
            border: 1px solid lightblue;
            border-collapse: collapse;
            padding: 5px;
        }

        h1 h2 {
            text-align: center;
            margin: 10px 0;
            color: green;
        }

    </style>
</head>
<body>
    <h1>My celcius / fahrenheit Table!</h1>
    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
        for($cel = 0; $cel <= 100; $cel +=3) {
            $far= ($cel * 9/5) + 32;
            $cel = intval($cel); 
            $far = intval($far);
            echo '<tr>';
            echo '<td> '.$cel.' degrees </td>';
            echo '<td> '.$far.' degrees </td>';


            echo '</tr>';
        }
        ?>

    </table>

    <h2>You will now complete a kilometer/mileage table on your own!</h2>

</body>
</html>