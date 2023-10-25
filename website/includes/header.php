<?php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Home page of our Website project';
        $body = 'home';
        break;

    case 'about.php' :
        $title = 'About page of our Website project';
        $body = 'about inner';
        break;

    case 'daily.php' :
        $title = 'Daily page of our Website project';
        $body = 'daily inner';
        break;

    case 'project.php' :
        $title = 'Project page of our Website project';
        $body = 'project inner';
        break;

    case 'contact.php' :
        $title = 'Contact page of our Website project';
        $body = 'contact inner';
        break;

    case 'gallery.php' :
        $title = 'Gallery page of our Website project';
        $body = 'gallery inner';
        break;
}
//our navigation array
$nav= array(
    'index.php' => 'Home',  
    'about.php' => 'about',
    'daily.php' => 'daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'gallery',
);

//this is the beginning of the swich for homework 3!!
if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today= date('l');
}

switch($today) {

    case 'Saturday':
        $actDay= 'black';
        $day= 'Saturday is Dexter day';
        $details= 'Dexter Morgan is a Miami-based blood splatter expert who does not just solve murders...';
        $picture= 'dexter.jpg';
        $altTag= 'Dexter';
        break;

    case 'Sunday':
        $actDay= 'orange';
        $day= 'Sunday is reserved for Homeland';
        $details= 'Homeland is a show on showtime about whatever. the main character is Clair Danes... etc';
        $picture= 'carrie.jpg';
        $altTag= 'Carrie';
        break;

    case 'Monday':
        $actDay= 'green';
        $day= 'Monday is reserved for Succession';
        $details= 'Succession is a show on Showtime about whatever. this series is based on the Murdock Family';
        $picture= 'succession.jpg';
        $altTag= 'Succession';
        break;
    
    case 'Tuesday':
        $actDay= 'purple';
        $day= 'Tuesday is reserved for Watchmen';
        $details= 'Watchmen is a 2019 American superhero drama limited series based on the 1986 DC Comics series of the same title created by Alan Moore and Dave Gibbons. The TV series was created for HBO by Damon Lindelof, who also served as an executive producer and writer.';
        $picture= 'regina.jpg';
        $altTag= 'Regina';
        break;

    case 'Wednesday':
        $actDay= 'pink';
        $day= 'Wednesday is reserved for Regular Show';
        $details= 'The series follows the lives of two 23-year old friends, Mordecai (a bluejay) and Rigby (a raccoon), who work at a local park as groundskeepers. Their coworkers are Skips (a yeti), Muscle Man and Hi-Five Ghost.';
        $picture= 'mordecai.jpg';
        $altTag= 'Mordecai';
        break;

    case 'Thursday':
        $actDay= 'orange';
        $day= 'Thursday is reserved for The Night of';
        $details= ' is a 2016 American eight-part crime drama television miniseries based on the first season of Criminal Justice, a 2008 British series';
        $picture= 'night.jpg';
        $altTag= 'The night of';
        break;

    case 'Friday':
        $actDay= 'red';
        $day= 'Friday is reserved for Undoing';
        $details= ' is an American mystery psychological thriller television miniseries based on the 2014 novel You Should Have Known by Jean Hanff Korelitz. It was written and produced by David E. Kelley and directed by Susanne Bier.';
        $picture= 'nicole.jpg';
        $altTag= 'Nicole';
        break;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css folder/styles.css" type="text/css">
</head>
<body class="<?php echo $body; ?>">
    <header>
        <div class="inner-header">
            <a href="index.php">
                <img id="logo" src="images folder/logo.png" alt="logo">
            </a>

            <!--<nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                </ul>
            </nav> -->

            <nav>
                <ul>
                <?php
                    foreach($nav as $key => $value){
                        if(THIS_PAGE ==$key) {
                            echo '<li> <a styles="color: red;" href=" '.$key.' "> '. $value. ' </a></li>';
                    
                        }else {
                            echo '<li> <a styles="color: green;" href=" '.$key.' "> '. $value. ' </a></li>';
                    
                        }
                    
                    }
                ?>
                </ul>
            </nav>
        </div>
        
    </header>