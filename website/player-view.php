<?php

// do not call out the header include yet!!!
// the following information is above the doctype
include('config.php');
include('config1.php');

// is Get set??

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: project.php');
}

$sql = 'SELECT * FROM players WHERE player_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $birthdate = stripslashes($row['birthdate']);
        $club = stripslashes($row['club']);
        $position = stripslashes($row['position']);
        $country = stripslashes($row['country']);
        $favorite_foot = stripslashes($row['favorite_foot']);
        $about = stripslashes($row['about']);
        $blurb = stripslashes($row['blurb']);
        // will I add a colum?
        $feedback = '';




    } // close the while loop



} else {
    $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');

?>

<main>
<h1>Welcome to my Players view Page</h1>
<h2>Introducing: <?php echo $last_name;?></h2>
<ul>
<?php
echo '
<li><b>First Name:</b>'.$first_name.'</li>
<li><b>Last Name:</b>'.$last_name.'</li>
<li><b>Club:</b>'.$club.'</li>
<li><b>Position:<clubb>'.$position.'</li>
<li><b>Country:</b>'.$country.'</li>
<li><b>Favorite Foot:</b>'.$favorite_foot.'</li>

';
?>
</ul>
<p><?php echo $about;?></p>
<p>Return to my <a href="project.php">Project page!</a></p>

</main>

<aside>
<h3>Aside information that will display my player's image!</h3>

<figure>
<img src="./images folder/player<?php echo $id;?>.jpg" alt="<?php echo $first_name;?>">
<figcaption>
    <?php echo $blurb ;?>
</figcaption>
</figure>

</aside>

</div>
<!--end wrapper-->

<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');