<?php include('Server.php') ?>
<?php
        $trainID = $_POST['trainID'];
        $source = $_POST['source'];
        $destination = $_POST['destination'];
        $price = $_POST['price'];
        $avDate = $_POST['date'];
        $time=$_POST['time'];
        $query = "INSERT INTO trip (source,Destination,Price,t_date,t_time,TrainID) 
                VALUES('$source', '$destination', '$price','$avDate','$time','$trainID') ";
        $query_run=mysqli_query($con, $query);
         if($query_run)
            {
                    echo' <script type="text\javascript">alert("Train  added ")</script>';
                    header("Location: ../admin.html");
                    
            }
            else
            {
             echo ("<h1>Train not found</h1>");
             header("Location: ../AddTrip.html");
            }

?>