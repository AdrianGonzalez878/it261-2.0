<?php
if (isset($_POST['num1'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2; // Initialize $myTotal and calculate the sum
    echo '<h2>You added ' . $num1 . ' and ' . $num2 . '</h2>';
    echo '<p>and the answer is <br><span style="color: red;">' . $myTotal . '!</span></p>';
    echo '<p><a href="">Reset page</a></p>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Adder Assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        form {
            margin: 20px auto;
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        label, input {
            display: block;
            margin: 10px 0;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        span {
            font-size: 24px;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Adder.php</h1>
    <form action="" method="POST">
        <label>Enter the first number:</label>
        <input type="text" name="num1">
        <label>Enter the second number:</label>
        <input type="text" name="num2">
        <input type="submit" value="Add Em!">
    </form>
</body>
</html>

