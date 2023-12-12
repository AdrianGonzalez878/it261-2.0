<?php //this is our index.php which in the big picture, it represents the home page of a website
session_start();
include('config.php');

if(!isset($_SESSION['username'])) {
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('./includes/header.php'); ?>
<header>


<?php 
if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
    <?php echo $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
</h3>
</div>
<!--end success-->

<?php endif; 

if(isset($_SESSION['username'])) :?>

<div class="Welcome-logout">
    <h3>Hello
        <?php echo $_SESSION['username'] ;?>
    </h3>

    <a href="index.php?logout='1' ">Log out</a>

</div>
<!--end welcome-logout-->

<?php endif ;?>
</header>
<!--MY WRAPPER STARTS HERE-->
<div id="wrapper">
<h1>Welcome to the home page of our website!!</h1>

</div>
<!--end wrapper-->
<?php include('./includes/footer.php');?>