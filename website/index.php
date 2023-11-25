<?php
include('config.php');
include('./includes/header.php');
?>

    <div id="wrapper">

        <div id="hero">
        
        <?php
        $photos[0] = 'dexter';
        $photos[1] = 'mordecai';
        $photos[2] = 'succession';

        $i = rand(0,2);

        $selected_image= ''.$photos[$i].'.jpg';
        echo '<img src="images folder/'.$selected_image.'" alt="'.$photos[$i].'">';
        ?>
    

        </div>

        <main>
            <h1>Welcome to our Web App Programming class!</h1>
            <h2>We are going to learn PHP!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In posuere leo a est dictum rhoncus. Maecenas lorem nibh, egestas vel gravida ac, pulvinar at quam. Nam metus tortor, aliquet sit amet libero eu, hendrerit rhoncus mauris. Curabitur accumsan tortor eu metus egestas fermentum. Pellentesque placerat quis ligula id convallis. Nunc congue, neque a efficitur sagittis, massa elit ultrices ipsum, at imperdiet nibh nisi sed elit. Donec faucibus hendrerit est eget placerat. </p>
            <h2>Another Headline 2!</h2>
            <p>Mauris a ligula tempor felis semper efficitur. Nam eu lacus a metus tincidunt vehicula. Duis in purus posuere, pulvinar felis malesuada, efficitur urna. Nulla maximus turpis et porta imperdiet. Phasellus feugiat, elit eu luctus egestas, ante risus volutpat erat, ut bibendum tellus elit a ex. Donec at vestibulum felis. Donec in euismod augue. Donec quis quam interdum, ullamcorper justo nec, laoreet arcu. Ut at molestie dolor. Integer fringilla ut erat ut dignissim. </p>

        </main>

        <aside>
            <h3>This is our line three in our beautiful aside</h3>
            <p>In posuere leo a est dictum rhoncus. Maecenas lorem nibh, egestas vel gravida ac, pulvinar at quam. Nam metus tortor, aliquet sit amet libero eu, hendrerit rhoncus mauris. Curabitur accumsan tortor eu metus egestas fermentum. Pellentesque placerat quis ligula id convallis. Nunc congue, neque a efficitur sagittis, massa elit ultrices ipsum, at imperdiet nibh nisi sed elit. Donec faucibus hendrerit est eget placerat.</p>

        </aside>
    </div>

    <?php
    include('./includes/footer.php');

    