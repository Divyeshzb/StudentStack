<?php
include("database.php");
$email = $_REQUEST['email_std'];
//echo $id;
$query = mysqli_query($con,"update userdetails set approval=2 where email='$email'");
if($query)
{
   // echo "Succesffuly updated";
    echo "<script>window.location='request.php';</script>";
}
 else 
{
     echo mysqli_error($con);
}
?>