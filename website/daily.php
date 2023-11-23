<?php
include('config.php');
include('./includes/header.php');
?>
<div id="wrapper">
    <main>
        <h1>Welcome to our daily page!</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur, accusantium! Assumenda harum iste ea, quis quaerat fugiat culpa! Repudiandae sit illum ipsa impedit, quam cupiditate debitis quisquam dignissimos excepturi assumenda!</p>

        <h2 class="<?php echo $actDay ;?> ">
        <?php echo $day; ?></h2>
            <p><?php echo $details; ?></p>
            <h2>Don't see your favorite show? 
                Check out the days below!
            </h2>

        <ul>
            <li><a style="color:<?php
            if ($today == 'Sunday') {
                echo 'orange';
            } else{
                echo 'blue';
            } ; ?>" href="daily.php?
            today=Sunday">Sunday</a></li>

            <li><a style="color:<?php
            if ($today == 'Monday') {
                echo 'green';
            } else{
                echo 'blue';
            } ; ?>" href="daily.php?
            today=Monday">Monday</a></li>

            <li><a style="color:<?php
            if ($today == 'Tuesday') {
                echo 'purple';
            } else{
                echo 'blue';
            } ; ?>" href="daily.php?
            today=Tuesday">Tuesday</a></li>

            <li><a style="color:<?php
            if ($today == 'Wednesday') {
                echo 'pink';
            } else{
                echo 'blue';
            } ; ?>" href="daily.php?
            today=Wednesday">Wednesday</a></li>

            <li><a style="color:<?php
            if ($today == 'Thursday') {
                echo 'orange';
            } else{
                echo 'blue';
            } ; ?>" href="daily.php?
            today=Thursday">Thursday</a></li>

            <li><a style="color:<?php
            if ($today == 'Friday') {
                echo 'red';
            } else{
                echo 'blue';
            } ; ?>" href="daily.php?
            today=Friday">Friday</a></li>

            <li><a style="color:<?php
            if ($today == 'Saturday') {
                echo 'black';
            } else{
                echo 'blue';
            } ; ?>" href="daily.php?
            today=Saturday">Saturday</a></li>

        </ul>

    </main>
    <aside>
        <h2>This is my aside</h2>
        <img src="/.images folder/ <?php echo $picture; ?>" alt="<?php echo $altTag; ?>">
    </aside>

<?php include('./includes/footer.php'); ?>
</div>