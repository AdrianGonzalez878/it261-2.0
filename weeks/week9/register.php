<?php
include('server.php');
//eventually we will be conecting to our header inlude
include('./includes/header.php');
?>
<div id="wrapper">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<!--first_name, last name, email, username, password1, password2 -->
<label>First name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">

<label>Last name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">

<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username'])  ;?>">

<label>Password</label>
<input type="password" name="password1" value="<?php if(isset($_POST['password1'])) echo htmlspecialchars($_POST['password1'])  ;?>">

<label>Confirm your Password</label>
<input type="password" name="password2" value="<?php if(isset($_POST['password2'])) echo htmlspecialchars($_POST['password2'])  ;?>">

<button type="submit" name="reg_user" class="btn">Register!</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>' ">Reset </button>

</form>

<?php
include('errors.php'); ?>
</div>
<!--end wrapper-->

<?php include('./includes/footer.php');