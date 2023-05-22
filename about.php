<!DOCTYPEhtml>
    <html>

    <head>
        <link rel="stylesheet" href="stylesnew.css">
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
            <li class="menu"><a href='htmlnew.html'><u>Home</u></a></li>
            <li class="menu"><a href="newsnew.html"><u>News</u></a></li>
            <li class="menu"><a href="register.html"><u>Contact</u></a></li>
            <li class="menu"><a href="about.php"><u>About</u></a></li>
        </ul>
        <?php
              
              
                define("CompanyName","Shopping cart");
                echo "<h2>".CompanyName."</h2><br>";
                echo "<h4>This page is mainly about the ".CompanyName." web site </h4>";

                
                echo"The Shopping cart: <br>";
                echo "Number of sold items :";
               
                ?>
        <footer>
            <center>
                <h3 style="font-weight: bold; font-style: italic;">Created By : <a href="https://courseweb.sliit.lk/"> Disara Methmali </a></h3>
            </center>
        </footer>
    </body>