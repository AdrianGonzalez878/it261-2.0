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

<?php
include('config.php');
include('./includes/header.php');
?>

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


</body>

<?php include('./includes/footer.php'); ?>