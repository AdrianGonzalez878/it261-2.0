<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal</title>
    <style>
        body{
            background-color: skyblue;
        }
        nav {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        nav a {
            text-decoration: none;
            color: white;
            margin: 0 10px;
        }

        /* Style the sections */
        section {
            padding: 20px;
            text-align: center;
        }

        img{
            border-radius: 90px;
        }

        aside{
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="./website/daily.php" id="switch">Switch</a>
            <a href="./website/adder.php" id="troubleshoot">Troubleshoot</a>
            <a href="#" id="calculator">Calculator</a>
            <a href="#" id="email">Email</a>
            <a href="#" id="gallery">Gallery</a>
            <a href="#" id="database">Database</a>
        </nav>
    </header>

    <section id="about-me">
        <h2>About Me</h2>
        <p>Hello everyone, my name is Adrian and I'm a web development student in seattle central college <br>
           as a internacional student, I'm from mexico and at the moment I'm taking classes online. <br>
            One of my principal hobbies is play basketbol, I really love that sport and I'm always training, in tournaments <br>
            and have a lot of teams, I live with my mom and I have a cute cat which is called Nube. <br>
            I also like spend time with friends, every week we go to some places juts to have fun and enjoy. <br>
            I hope I can understand all my classes and get good notes this quarter and all the rest of my program :)  </p>
    </section>

    <section class="picture">
        <img src="images/me.png" height="300px" width="350px" alt="me Picture">
    </section>

    <aside>
        <h2>My Class Work Exercise</h2>
        <h3>Week 2</h3>
        <ol>
            <li><a href="weeks/week2/var.php">var.php</a></li>
            <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
            <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
            <li><a href="weeks/week2/currency.php">currency.php</a></li>
        </ol>

        <h3>Week 3</h3>
        <ol>
            <li><a href="weeks/week3/about.php">about.php</a></li>
            <li><a href="weeks/week3/date.php">date.php</a></li>
            <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
            <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
            <li><a href="weeks/week3/if.php">if.php</a></li>
            <li><a href="weeks/week3/index.php">index.php</a></li>
            <li><a href="weeks/week3/swich.php">swich.php</a></li>
        </ol>

        <h3>Week 4</h3>
        <ol>
            <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
            <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
            <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
            <li><a href="weeks/week4/form1.php">form1.php</a></li>
            <li><a href="weeks/week4/form2.php">form2.php</a></li>
            <li><a href="weeks/week4/form3.php">form3.php</a></li>
        </ol>

    </aside>

    <div>
        <img src="images/mam.png" alt="" height="400px" width="550px">
        <img src="images/warning.png" alt="" height="400px" width="550px">
    </div>

    <footer>
        <p><small>&copy; 2023 by 
            Adrian Gonzalez, All Rights Reserved ~ 
            <a id="html-checker" href="#">Check HTML</a> ~ 
            <a id="css-checker" href="#">Check CSS</a></small>
        </p>
    </footer>
    <script>
        //https://tinyurl.com/dynamic-html-checker
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    </script>
</body>
</html>
