<?php
session_start();



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["uname"];
    $password=$_POST["pwd"];
    if($username=="test"&&$password=="1234")
    {
        $_SESSION['logged_user']=$username;

    }
    else{
        echo"<script>alert('You have enter the incorrect username or password')</script>";
    }
}
?>

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
        
        </ul>
       <center>
 <div class="form-style-6">
    <h1>Login</h1>
    <form method="POST" action=" welcome.php">
        <input type="text" id="uname" name="uname" placeholder="Your username"/>
        <input type="password" id="pwd" name="pwd"placeholder="Your password"/>
        <br><br>

        <input type="submit" value="Login"/></br>
        <form>
</center>
        <hr id="test"/>
            <center>
                <h3 style="font-weight: bold; font-style: italic;">Created By : <a href="https://courseweb.sliit.lk/"> Disara Methmali </a></h3>
            </center>
        </footer>
    </body>