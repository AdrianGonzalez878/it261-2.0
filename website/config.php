<?php


ob_start();

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

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if (THIS_PAGE == $key){
            $my_return .= '<li><a class="current" href=" '.$key.' "> '.$value. '</a> </li> ';

        } else {
            $my_return .= '<li><a href=" '.$key.' "> '.$value.'</a> </li>' ;
        }
    } //end foreach
    return $my_return;
}// end function

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
 // my form's php
 
 $first_name= '';
 $last_name= '';
 $email= '';
 $wines= '';
 $gender= '';
 $phone= '';
 $comments= '';
 $privacy= '';
 $regions= '';
 
 $first_name_err= '';
 $last_name_err= '';
 $email_err= '';
 $wines_err= '';
 $gender_err= '';
 $phone_err= '';
 $comments_err= '';
 $privacy_err= '';
 $regions_err= '';
 
 
 
 if($_SERVER['REQUEST_METHOD'] == "POST") {
 
 if(empty($_POST['wines'])) {
     $wines_err= 'What... no wines?';
 
 } else {
     $wines = $_POST['wines'];
 }
 
 
 
 if(empty($_POST['first_name'])) {
     $first_name_err= 'Please fill in your first name';
 
 } else {
     $first_name = $_POST['first_name'];
 }
 
 
 if(empty($_POST['last_name'])) {
     $last_name_err= 'Please fill in your last name';
 
 } else {
     $last_name = $_POST['last_name'];
 }
 
 
 if(empty($_POST['email'])) {
     $email_err= 'Please fill in your email';
 
 } else {
     $email = $_POST['email'];
 }
 
 
 if(empty($_POST['gender'])) {
     $gender_err= 'Please check your gender';
 
 } else {
     $gender = $_POST['gender'];
 }
 
 
 if(empty($_POST['phone'])) {
     $phone_err= 'Please fill in your phone number';
 
 } else {
     $phone = $_POST['phone'];
 }
 
 
 if(empty($_POST['comments'])) {
     $comments_err= 'we value your input';
 
 } else {
     $comments = $_POST['comments'];
 }
 
 
 if(empty($_POST['privacy'])) {
     $privacy_err= 'You must agree to receive spam email';
 
 } else {
     $privacy = $_POST['privacy'];
 }
 
 
 if($_POST['regions'] == NULL) {
 
     $regions_err= 'Please choose your region';
 
 } else {
     $regions = $_POST['regions'];
 }
 
 
 
 function my_wines ($wines) {
     $my_return='';
     if(!empty($_POST['wines'])) {
         $my_return= implode(',' , $_POST['wines']);
     }
     return $my_return;
 
 } //end my_wines function
 
 if(isset($_POST['first_name'],
 $_POST['last_name'],
 $_POST['email'],
 $_POST['gender'],
 $_POST['phone'],
 $_POST['wines'],
 $_POST['regions'],
 $_POST['comments'],
 $_POST['privacy'])) {
 
     $to = 'adrianrobertogonzalezantonio@gmail.com';
     $subject= 'Test email on '.date('m/d/y, h i A');
     $body= '
     First name:  '.$first_name.'  '.PHP_EOL.'
     Last name:  '.$last_name.'  '.PHP_EOL.'
     Email:  '.$email.'  '.PHP_EOL.'
     Gender:  '.$gender.'  '.PHP_EOL.'
     Wines:  '.my_wines($wines).'  '.PHP_EOL.'
     Regions:  '.$regions.'  '.PHP_EOL.'
     Phone:  '.$phone.'  '.PHP_EOL.'
     Comments:  '.$comments.'  '.PHP_EOL.'
     
     ';
 
     $headers= array(
         'From' => 'noreply@studentswa.com'
     );
 
     //we will be adding an if statement -- that this email form will work ONLY if all the fields are filled out!!
 
     if(!empty(
         $first_name &&
         $last_name &&
         $email &&
         $gender &&
         $wines &&
         $regions &&
         $phone &&
         $comments )) {
 
         mail($to, $subject, $body, $headers);
         header('Location:thx.php');
 
         }
 

 
 } //end isset
 
 } //closing server requested method
 
