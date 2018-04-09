<?php

$conn=mysqli_connect("localhost","root","","onps");
$c=$_GET['delete'];

$qry="DELETE FROM candidate_reg WHERE c_id=$c";

$rs=mysqli_query($conn,$qry);

if($rs)
{
    echo "<script>alert('Successfully Deleted')</script>";
    header("location:managecandidate.php");   
}
else
{
    echo "<script>alert('Deletion Failed')</script>";
}

?>
