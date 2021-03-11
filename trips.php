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
            background-color: #343A40;
            transition: all 0.3s ease 0s;
            margin:0 px;

            }
            h1{
            color:#C0BFBE;
            text-align:center;
            font-family: "Montserrat", sans-serif;
            font-size:30px;
            }

            #result-container {
            height: 92vh;
            background-image: url(images/traintry.jfif);
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            background-repeat: no-repeat;
            }
</style>
<header>
<h1>Train Page</h1>
</header>
<div id ="result-container">
<?php
        $sql="SELECT * FROM trip";
        $result=mysqli_query($con,$sql);
        $queryResults=mysqli_num_rows($result);
        if($queryResults > 0)
        {
        while($row=mysqli_fetch_assoc($result))
        {

            echo ("

                <div id = 'trip' style='background-color:#313A40;
                        margin:20px; padding:20px; font-family: 'Montserrat', sans-serif;'>

                <img src='images/train.png' style='width:128px;height:128px; margin-left:45px; margin-top:-90px;' >
                <form action = 'uptripform.php' method ='POST'>

                <h3 style = 'color:#C0BFBE; text-align:center; font-size:25px; margin:10px;'>Trip Number $row[TripID]</h3>
                <h4 style = 'color:#C0BFBE; margin 10px; font-size:20px; padding:7px;'>Trip Date: $row[t_date]</h4>

                <h4 style = 'color:#C0BFBE; margin 10px; font-size:20px; padding:7px; '>Trip time: $row[t_time]</h4>

                <p id= 'source' style = 'color:#C0BFBE; margin 10px; font-size:20px; padding:7px; '>Source: $row[source]</p>

                <p id= 'destination' style = 'color:#C0BFBE; margin 10px; font-size:20px; padding:7px; '>Destination: $row[Destination]</p>

                <p id= 'Price' style = 'color:#C0BFBE; margin 10px; font-size:20px; padding:7px; '>Price per seat: $row[Price] L.E</p>

                <p id= 'Train Number' style = 'color:#C0BFBE; margin 10px; font-size:20px; padding:7px; '>Train Number: $row[TrainID]</p>

                <button id='Book-btn'  name='update-btn' type='submit' style=' text-decoration: none;border: none; padding: 12px;
                        background-color: powderblue;color: black;font-size:20px;
                        border-radius: 40px;cursor: pointer;margin-left:90px; margin-top:20px; width:150px;'>Update</button >

                <input type='hidden' value= $row[TripID] name='input4'/>



                </form>
                </div>"   );

        }
    }
        else
        {
            echo (" <h1 style = 'color:powderblue; text-align:center; font-size:30px; margin:10px; background-color: rgba(0,0, 0, 0.6); padding:25px; border-radius: 30px;'>No Result found</h>");
        }
    ?>
</div>