<?php include('Server.php') ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
            * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            }
            header {
            display: flex;
            justify-content: Center;
            align-items: center;
            padding: 10px 10%;
            background-color: rgb(0, 50, 63);
            transition: all 0.3s ease 0s;
            margin:0 px;

            }
            h1,h2{
            color:powderblue;
            text-align:center;
            font-family: "Montserrat", sans-serif;
            font-size:30px;
            }

            #result-container {
            height: 92vh;
            background-image: url(images/User.jpeg);
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-repeat: no-repeat;
            }
</style>
<header>
<h1>Confirmation Page</h1>
</header>
<div id ="result-container">
<?php
        $noSeats =$_POST['no_seats'];
        $TripID=$_SESSION["TripID"];
        $sql="SELECT * from Trip where Trip.TripID='$TripID';";
        $result=mysqli_query($con,$sql);
        $queryResults=mysqli_num_rows($result);
        if($queryResults > 0)
        {
        $row=mysqli_fetch_assoc($result);
        $Payment=$noSeats*$row['Price'];
        $_SESSION['msg']='Your trip has been booked succesfully!';
        $_SESSION['seats']=$noSeats;

        echo ("
            <div id = 'trip' style='background-color:rgb(0, 50, 63);
                    margin:20px; padding:20px; font-family: 'Montserrat', sans-serif;'>

            <img src='images/train.png' style='width:128px;height:128px; margin-left:100px; margin-top:-90px;' >
            <form action = 'confEmail.php' onsubmit=\"return confirm('Do you accept to pay $Payment L.E?');\" method ='POST' >

            <h3 style = 'color:powderblue; text-align:center; font-size:25px; margin:10px;'>Trip Number $row[TripID]</h3>
            <h4 style = 'color:white; margin 10px; font-size:20px; padding:7px;'>Trip Date: $row[t_date]</h4>

            <h4 style = 'color:white; margin 10px; font-size:20px; padding:7px; '>Trip time: $row[t_time]</h4>

            <p id= 'source' style = 'color:white; margin 10px; font-size:20px; padding:7px; '>Source: $row[source]</p>

            <p id= 'destination' style = 'color:white; margin 10px; font-size:20px; padding:7px; '>Destination: $row[Destination]</p>

            <p id= 'Price' style = 'color:white; margin 10px; font-size:20px; padding:7px; '>Price per seat: $row[Price] L.E</p>

            <p id= 'Train Number' style = 'color:white; margin 10px; font-size:20px; padding:7px; '>Train Number: $row[TrainID]</p>

            <p id= 'NumberOFSeats' style = 'color:white; margin 10px; font-size:20px; padding:7px; '>Number OF Seats: $noSeats</p>
            <br><br>

            <button id='pay'  name='pay' type='submit'  style=' text-decoration: none;border: none; padding: 12px;
                    background-color: powderblue;color: black;font-size:20px;
                    border-radius: 40px;cursor: pointer;margin-left:90px; margin-top:20px; width:250px;'> Pay $Payment L.E  for $noSeats seats</button >

            </form>
            </div>" );
    }

?>
</div>
