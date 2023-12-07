<?php
include('config.php');
include('config1.php');
include('./includes/header.php');
?>

<main class="center">
<h1>Welcome to my Players Page</h1>
<?php
$sql = 'SELECT * FROM players';
 //now, we need to connect to the database!!

 $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//we have a row, wich transaltes into an array
//if our result is greater than 0, we are happy

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {

    echo '
    <h2>Information about: '.$row['first_name'].' '.$row['last_name'].'</h2>
    <ul>

    <li>Club: '.$row['club'].'</li>
    <li>Country: '.$row['country'].'</li>
    <li>Position: '.$row['position'].'</li>
    <li>Favorite Foot: '.$row['favorite_foot'].'</li>

   </ul>
   
   <p>Trajectory about '.$row['first_name'].', click <a href="player-view.php?id='.$row['player_id'].' ">here</a> </p>
    ';
} //end while loop




} else {
    echo 'Nobody home!!';
}

//we are going to realese the server

@mysqli_free_result($result);

@mysqli_close($iConn);

?>

</main>

<aside>

</aside>

</div>
<!--end wrapper-->



<?php 
include('./includes/footer.php'); ?>