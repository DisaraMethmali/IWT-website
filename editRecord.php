<?php
include_once'config.php';
?>
<?php
include_once'config.php';
?>
<?php
 $item_id=$_GET['id'];

 $sql = "Select * from item where item_id = $item_id";
 $result=$conn->query($sql);
 $row = $result->fetch_assoc();
 $item_name = $row['item_name'];
 $item_code=$row['item_code'];
 $item_description=$row['item_description'];
 $price = $row['price'];
 $Quantity=$row['Quantity']

 

?>
<!DOCTYPEhtml>
    

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
    <div class="productData tbl" style="border-style:groove;border-color:Darkblue;">
    <form action="submitUpdateItems.php" method="POST" name="form2">
        <table border="0" width="25%">
            <tr>
                <td>Item ID</td>
                <td><input type="text" name="field0" readonly></td>
</tr>
<tr>
                <td>Item Name</td>
                <td><input type="text" value="<?php echo"$item_id"?>" name="field1" ></td>
</tr>
<tr>
                <td>Item Description</td>
                <td><input type="text" value="<?php echo"$item_name"?>"name="field2"></textarea></td>
</tr>
<tr>
                <td>Price</td>
                <td><input type="text" value="<?php echo" $price"?>" name="field3" readonly></td>
</tr>
<tr>
                <td>Quantity</td>
                <td><input type="text"value="<?php echo" $Quantity"?>" name="field4"></td>
</tr>
<tr>
                <td>Item Code</td>
                <td><input type="text" value="<?php echo" $item_code"?>"name="field5"></td>
</tr>
<tr>
                <td></td>
                <td><input type="submit" value="update" name="submit"></td>
</tr>
            <footer>
                <center>
                    <h3 style="font-weight: bold; font-style: italic;">Created By : <a href="https://courseweb.sliit.lk/"> Disara Methmali </a></h3>
                </center>
            </footer>
        </body>