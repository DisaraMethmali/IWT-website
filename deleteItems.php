<?php
include_once'config.php';
?>
<?php
    $item_id=$_GET['id'];

    $query="delete from item where item_id='$item_id'";

    $data=mysqli_query($conn,$query);

    if($data)
    {
        
            echo"<script>alert('Recorded deleted !!')</script>";
           }
          else{
            echo"<script>alert('Error in delete  !!')</script>";
          
    }
    mysqli_close($conn);
?>