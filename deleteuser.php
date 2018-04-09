<?php

$conn=mysqli_connect("localhost","root","","onps");
$c=$_GET['delete'];

$qry="DELETE FROM user WHERE user_id=$c";

$rs=mysqli_query($conn,$qry);

if($rs)
{
    echo "<script>alert('Successfully Deleted')</script>";
    header("location:manageuser.php");   
}
else
{
    echo "<script>alert('Deletion Failed')</script>";
}

?>
