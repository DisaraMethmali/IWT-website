<?php
include_once'config.php';
?>
<?php

$name=$_POST["field1"];
$code=$_POST["field2"];
$price=$_POST["field3"];
$Quantity=$_POST["field4"];
$des=$_POST["field5"];

$sql="insert into item(item_name,item_description,price,Quantity,item_code)values('$name','$des','$price','$Quantity','$code')";
if (mysqli_query($conn,$sql))
{
    echo"<script>alert('Record inserted suceesfully')</script>";
    header("Location:htmlnew.html");
}
else{
    echo"<script>alert('Error')</script>";
}

mysqli_close($conn);
?>