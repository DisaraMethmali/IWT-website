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
        <center>
            <div class="productData" id="tbl" style="border-style:groove; border-color:rgb(10, 71, 30) ">
        
        <table border="1px" width="100%" style="padding: 3px;">
            <tr>
                <th class="col1">Item ID</th>
                <th class="col1">Item Name</th>
                <th class="col1">Item Code</th>
                <th class="col1">Description</th>
                <th class="col1">Price</th>
                <th class="col1">Quantity</th>
                <th class="col1">Edit</th>
                <th class="col1">Delete</th>
                


        </tr>
        <?php
        $sql="select*from item";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
          while($row=$result->fetch_assoc())

          {
            echo"<tr>
            <td>".$row["item_id"]."</td>
            <td>".$row["item_name"]."</td>
            <td>".$row["item_description"]."</td>
            <td>".$row["price"]."</td>
            <td>".$row["Quantity"]."</td>
            <td>".$row["item_code"]."</td>";
            
            echo "<td><a href='editRecord.php?id=".$row['item_id']."'><input type='submit' value='Edit'></a></td>";
            echo "<td><a href='deleteItems.php?id=".$row['item_id']."'><input type='submit' value='Delete'></a></td>
            </tr>";
        
        }
          
          
        }
        else{
            echo"Empty Rows";
        }
        echo"</table>";
        include_once'config.php';
        ?>
          
          
        
       
        </table>
        </div>
        <br>
        <footer>
            <center>
                <h3 style="font-weight: bold; font-style: italic;">Created By : <a href="https://courseweb.sliit.lk/"> Disara Methmali </a></h3>
            </center>
        </footer>
    </body>