<?php include('Server.php') ?>
<?php


if(isset($_POST['upd-btn']))
{
    $TripID=$_SESSION["TripID"];
    $source=mysqli_real_escape_string($con,$_POST['nsource']);
    $Destination=mysqli_real_escape_string($con,$_POST['nDestination']);
    $price=mysqli_real_escape_string($con,$_POST['nprice']);
    $sql="Update trip set trip.Destination='$Destination',
    trip.source='$source',
    trip.Price='$price' 
    where trip.TripID = '$TripID'"; 

    if(mysqli_query($con,$sql))
    {
        header('location: admin.html');
    }
    else 
    {
        echo ("Does not Exist!!");
    }
}
?>