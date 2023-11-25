<?php
$mvp_name = '';
$email = '';
$favorite_teams = '';
$selected_mvp = '';
$phone = '';
$privacy = '';
$follow_location = '';

$mvp_name_err = '';
$email_err = '';
$favorite_teams_err = '';
$selected_mvp_err = '';
$phone_err = '';
$privacy_err = '';
$follow_location_err = '';

ob_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty($_POST['favorite_teams'])) {
        $favorite_teams_err = 'What... no favorite teams?';
    } else {
        $favorite_teams = $_POST['favorite_teams'];
    }

    if (empty($_POST['mvp_name'])) {
        $mvp_name_err = 'Please fill in your name';
    } else {
        $mvp_name = $_POST['mvp_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please fill in your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['selected_mvp'])) {
        $selected_mvp_err = 'Please select your MVP';
    } else {
        $selected_mvp = $_POST['selected_mvp'];
    }

    if (empty($_POST['phone'])) {
        $phone_err = 'Please fill in your phone number';
    } else {
        // Validate phone number format
        $phoneRegex = '/^\d{10}$/';
        if (!preg_match($phoneRegex, $_POST['phone'])) {
            $phone_err = 'Please enter a valid 10-digit phone number';
        } else {
            $phone = $_POST['phone'];
        }
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'You must agree to receive spam email';
    } else {
        $privacy = $_POST['privacy'];
    }

    if ($_POST['follow_location'] == NULL) {
        $follow_location_err = 'Please choose your continent';
    } else {
        $follow_location = $_POST['follow_location'];
    }

    function my_favorite_teams($favorite_teams)
    {
        $my_return = '';
        if (!empty($_POST['favorite_teams'])) {
            $my_return = implode(',', $_POST['favorite_teams']);
        }
        return $my_return;
    }


    if (
        isset(
            $_POST['mvp_name'],
            $_POST['email'],
            $_POST['selected_mvp'],
            $_POST['phone'],
            $_POST['favorite_teams'],
            $_POST['follow_location'],
            $_POST['privacy']
        )
    ) { 
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email on ' . date('m/d/y, h i A');
        $body = '
        Name:  ' . $mvp_name . '  ' . PHP_EOL . '
        Email:  ' . $email . '  ' . PHP_EOL . '
        MVP:  ' . $selected_mvp . '  ' . PHP_EOL . '
        Favorite Teams:  ' . my_favorite_teams($favorite_teams) . '  ' . PHP_EOL . '
        From:  ' . $follow_location . '  ' . PHP_EOL . '
        Phone:  ' . $phone . '  ' . PHP_EOL . '
        ';

        $headers = array(
            'From' => 'noreply@studentswa.com'
        );

        // We will be adding an if statement -- that this email form will work ONLY if all the fields are filled out!!
        if (
            !empty(
                $mvp_name &&
                $email &&
                $selected_mvp &&
                $favorite_teams &&
                $follow_location &&
                $phone
            )
        ) {
            mail($to, $subject, $body, $headers);
            ob_end_clean(); // Clear output buffer
            header('Location: thx.php');
            exit(); 
        }
    } //end isset
} //closing server requested method
?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>
                Contact Adrian
            </legend>
            <label>Name</label>
            <input type="text" name="mvp_name" value="<?php if (isset($_POST['mvp_name'])) echo htmlspecialchars($_POST['mvp_name']); ?>">

            <span><?php echo $mvp_name_err; ?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">

            <span><?php echo $email_err; ?></span>

            <label>Who will be the MVP this season?</label>
            <ul>
                <li><input type="radio" name="selected_mvp" value="luka" <?php if (isset($_POST['selected_mvp']) && $_POST['selected_mvp'] == 'luka') echo 'checked= "checked"'; ?>>Luka Doncic</li>
                <li><input type="radio" name="selected_mvp" value="giannis" <?php if (isset($_POST['selected_mvp']) && $_POST['selected_mvp'] == 'giannis') echo 'checked= "checked"'; ?>>Giannis Antetokounmpo</li>
                <li><input type="radio" name="selected_mvp" value="jokic" <?php if (isset($_POST['selected_mvp']) && $_POST['selected_mvp'] == 'jokic') echo 'checked= "checked"'; ?>>Nicola Jokic</li>
            </ul>

            <span><?php echo $selected_mvp_err; ?></span>

            <label>Phone</label>
            <input type="tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">

            <span><?php echo $phone_err; ?></span>

            <label>Favorite Teams</label>
            <ul>
                <li><input type="checkbox" name="favorite_teams[]" value="Lakers" <?php if (isset($_POST['favorite_teams']) && in_array('Lakers', $favorite_teams)) echo 'checked= "checked"'; ?>>Lakers</li>
                <li><input type="checkbox" name="favorite_teams[]" value="Celtics" <?php if (isset($_POST['favorite_teams']) && in_array('Celtics', $favorite_teams)) echo 'checked= "checked"'; ?>>Celtics</li>
                <li><input type="checkbox" name="favorite_teams[]" value="Nuggets" <?php if (isset($_POST['favorite_teams']) && in_array('Nuggets', $favorite_teams)) echo 'checked= "checked"'; ?>>Nuggets</li>
                <li><input type="checkbox" name="favorite_teams[]" value="Bucks" <?php if (isset($_POST['favorite_teams']) && in_array('Bucks', $favorite_teams)) echo 'checked= "checked"'; ?>>Bucks</li>
                <li><input type="checkbox" name="favorite_teams[]" value="Raptors" <?php if (isset($_POST['favorite_teams']) && in_array('Raptors', $favorite_teams)) echo 'checked= "checked"'; ?>>Raptors</li>
            </ul>

            <span><?php echo $favorite_teams_err; ?></span>

            <label>From where do you follow the NBA</label>
            <select name="follow_location">
                <option value="" <?php if (isset($_POST['follow_location']) && is_null($_POST['follow_location'])) echo 'selected="unselected"'; ?>>Select one!</option>
                <option value="North America" <?php if (isset($_POST['follow_location']) && $_POST['follow_location'] == 'North America') echo 'selected="selected"'; ?>>North America</option>
                <option value="South America" <?php if (isset($_POST['follow_location']) && $_POST['follow_location'] == 'South America') echo 'selected="selected"'; ?>>South America</option>
                <option value="Asia" <?php if (isset($_POST['follow_location']) && $_POST['follow_location'] == 'Asia') echo 'selected="selected"'; ?>>Asia</option>
                <option value="Europe" <?php if (isset($_POST['follow_location']) && $_POST['follow_location'] == 'Europe') echo 'selected="selected"'; ?>>Europe</option>
                <option value="Africa" <?php if (isset($_POST['follow_location']) && $_POST['follow_location'] == 'Africa') echo 'selected="selected"'; ?>>Africa</option>
            </select>

            <span><?php echo $follow_location_err; ?></span>

            <label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked = "checked"'; ?>>Yes</li>
            </ul>

            <span><?php echo $privacy_err; ?></span>

            <input type="submit" value="Send it">

            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
