<?php
$people['Lebron_James'] = 'lebro_player for the Los Angeles Lakers of the National Basketball Association (NBA).';
$people['Anthony_davies'] = 'antho_player for the Los Angeles Lakers of the National Basketball Association (NBA).';
$people['Jayson_tatum'] = 'tatum_player for the Boston Celtics of the National Basketball Association (NBA)..';
$people['Nikola_jokic'] = 'jokic_player who is a center for the Denver Nuggets of the National Basketball Association (NBA).';
$people['Luka_Doncic'] = 'lukak_player who is a center for the Dallas Mavericks of the National Basketball Association (NBA).';
$people['Jimmy_butler'] = 'butle_player for the Miami Heat of the National Basketball Association (NBA).';
$people['Victor_wembanyama'] = 'wemby_professional basketball player for the San Antonio Spurs of the National Basketball Association (NBA). .';

// variable key.....value
//$name.............$image
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery.php</title>
    <style>
        table{
            border: 1px solid red;
            border-collapse: collapse;
            text-align: center;
        }

        td{
            border: 1px solid red;

        }

        footer{
        height: 60px;
        line-height: 60px;
        background: #ddd;
        clear: both;
        }

        footer ul{
        display: flex;
        justify-content: center;
        list-style-type: none;
        }

        footer li{
        justify-content: center;
        margin: 0 15px;
        }

    </style>
</head>
<body>
    <table>
        <?php foreach($people as $name => $image) :?>
            <tr>
                <td> <img src="images folder/<?php echo substr($image,0,5);?>.jpg" alt="<?php echo str_replace('_',' ', $name)  ;?>" ></td>
                <td> <?php echo str_replace('_',' ', $name)  ;?></td>
                <td> <?php echo substr($image,6);?></td>
            </tr>
            <?php endforeach ; ?>
    </table>

    <footer>
        <p><small>&copy; 2023 by 
            Adrian Gonzalez, All Rights Reserved ~ 
            <a id="html-checker" href="#">Check HTML</a> ~ 
            <a id="css-checker" href="#">Check CSS</a></small>
        </p>
    </footer>
    <script>
        //https://tinyurl.com/dynamic-html-checker
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    </script>
</body>
</html>