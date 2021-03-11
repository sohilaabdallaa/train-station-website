<?php include('Server.php') ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
    * {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    font-family: "Montserrat", sans-serif
    }
    #traindetails-container {
    height: 100vh;
    background-image: url(images/traintry.jfif);
    background-size:cover;
    background-position: center;
    display: grid;
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;
    }
    
</style>
<html>
<body>
<div id='traindetails-container'>
<?php
$TripID=$_POST['input4'];
$_SESSION["TripID"]=$TripID;
$sql="SELECT * FROM trip where TripID='$TripID'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
if(isset($_POST['update-btn']))
{
echo("

    <form action='upform.php' method='POST' style='background-color:rgba(0,0,0,0.4);
    margin:20px; padding:20px; font-family: 'Montserrat', sans-serif; ' >
        <h1 style='margin: 0px; color: white;text-shadow: 2px 2px 4px #00081a; padding:25px;'> Update For <br> 
        Train Number $row[TripID]</h1>

        <label style=' color: white;text-shadow: 2px 2px 4px #00081a;  margin: 10px; padding 15px;
        font-weight: bold; font-size:20px;'>Name of Train</label><br><br>
        <input type='text' name='nsource' placeholder=' New Source Station' value=$row[source] style='margin: 7px;
        padding: 10px;
        border: none;
        border-radius: 15px;
        background-color: whitesmoke;'>
        <br><br>

        <label style=' color: white;text-shadow: 2px 2px 4px #00081a; margin: 10px; padding 15px;
        font-weight: bold; font-size:20px;'>Type of Train</label><br><br>
        <input type='text' name='nDestination' placeholder='New Destination Station' value=$row[Destination]  style='margin: 7px;
        padding: 10px;
        border: none;
        border-radius: 15px;
        background-color: whitesmoke;'>

        <br><br>

        <label style=' color: white;text-shadow: 2px 2px 4px #00081a; margin: 10px; padding 15px;
        font-weight: bold; font-size:20px;'>Number of Seats </label><br><br>
        <input type='number' name='nprice' placeholder='New Price' value=$row[Price] style='margin: 7px;
        padding: 10px;
        border: none;
        border-radius: 15px;
        background-color: whitesmoke;' >

        <br><br>

        <button id='up-btn' name='upd-btn' type='submit' 
        style='font-weight: 400;font-size: 25px;text-decoration: none;border: none;padding: 15px; 
        background-color:#343A40; color: white;border-radius: 25px;
        cursor: pointer;margin-left: 180px;box-shadow: 4px 4px 6px #00081a;'>Update</button>
    
    </form>");
}
?>
</div>
</body>
</html>