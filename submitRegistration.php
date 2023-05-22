
<!DOCTYPEhtml>
    <html>

    <head>
        <link rel="stylesheet" href="stylesnew.css">
        <link rel="stylesheet" href="formstyle.css">
        <script src="js/newsnew.js"></script>
        <title>My Shopping cart</title>
    </head>

    <body>
        <img class="logo" src="images.png" width="200px" height="200px" alt="image.png"><br>
        <h1>
            Shopping Cart
        </h1>
        <br>
        <h3 id="header">The online shopping store</h6>
        <hr id="test"/>
        
        <ul class="menu">
            <li class="menu"><a href="htmlnew.html"><u>Home</u></a></li>
            <li class="menu"><a href="newsnew.html"><u>News</u></a></li>
            <li class="menu"><a href="register.html"><u>Contact</u></a></li>
            <li class="menu"><a href="about.php"><u>About</u></a></li>
        </ul>
       <center>
        <fieldset>
            <legend>
                <h2>Personal Details</h2></legend>
                <?php
                echo "Name :".$_POST["firstname"]." ".$_POST["lastname"]."<br>";
                echo "Gender :".$_POST["gender"]."<br>";
                echo "Moblie :".$_POST["mobile"]."<br>";
                echo "Email :".$_POST["email"]."<br>";
                echo "Address :".$_POST["Address"]."<br>";
                echo "DOB :".$_POST["day"]."<br>";


                ?>
        </fieldset>
        <hr id="test"/>
            <center>
                <h3 style="font-weight: bold; font-style: italic;">Created By : <a href="https://courseweb.sliit.lk/"> Disara Methmali </a></h3>
            </center>
        </footer>
    </body>