<?php
session_start();
?>

<?php
include_once'config.php';
?>

<!DOCTYPEhtml>
    <html>

    <head>
        <link rel="stylesheet" href="stylesnew.css">
        <script src="js/newsnew.js"></script>
        <title>My Shopping cart</title>
    </head>

    <body>
        <img class="logo" src="images.png" width="200px" height="200px" alt="'image.png"><br>
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
        <h2>

            <?php echo $_SESSION['logged_user']=$username?>
           
</h2>
            <center>
                <h3 style="font-weight: bold; font-style: italic;">Created By : <a href="https://courseweb.sliit.lk/"> Disara Methmali </a></h3>
            </center>
        </footer>
    </body>