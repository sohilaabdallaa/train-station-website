<?php include('Server.php') ?>
<?php
        $trainName = $_POST['trainName'];
        $trainID = $_POST['trainID'];
        $traintype = $_POST['traintype'];
        $nofseat = $_POST['seat'];

        $train_check_query = "SELECT * FROM train WHERE TrainID='$trainID' ";
        $result = mysqli_query($con, $train_check_query);

        $train = mysqli_fetch_assoc($result);
        if ($train) { 
            if ($train['TrainID'] === $trainID) {
              array_push($missing_values, "train already exist");
              header('admin.html');
            }
        }
        $query = "INSERT INTO train (name,type, TrainID,no_seats) 
                VALUES('$trainName', '$traintype', '$trainID','$nofseat') ";
        $query_run=mysqli_query($con, $query);
        if($query_run)
        {
            echo' <script type="text\javascript">alert("Train  added ")</script>';
            header("Location: ../admin.html");
            
        }
        else
        {
            echo ' <script type="text\javascript">alert("Train not add ")</script>';
        }
?>

