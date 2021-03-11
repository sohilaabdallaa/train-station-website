<?php include('Server.php') ?>
<?php
//Get user log in info
if (isset($_POST['login'])) {
    $userEmail = mysqli_real_escape_string($con, $_POST['log_Email']);
    $password = mysqli_real_escape_string($con, $_POST['log_password']);
  //To make sure that user inter his Email and Password
    if (empty($userEmail)) {
        array_push($missing_values, "Username is required");
    }
    if (empty($password)) {
        array_push($missing_values, "Password is required");
    }
  // If User Enter all log in info and there is no errors
    if (count($missing_values) == 0) {
        //Encryption user password for security
        $password = md5($password); 
        //Retrieve Email and Pass to compare them with User Info in database
        //which is he has entered in sign up form 
        $query = "SELECT * FROM usr WHERE Email='$userEmail'";
        $results = mysqli_query($con, $query);
        if (mysqli_num_rows($results) == 1) {
            
            $_SESSION['username'] = $userEmail;
            $_SESSION['success'] = "You are now logged in";
            $QRole=mysqli_fetch_assoc($results);
            //GetDetermine if the User is Admin Or Customer
            //To Redirect him to the suitable page
            if($QRole['Role']=='admin'){header('location: admin.html');}
            else{header('location: user.html');}
        }
        
        else {
            array_push($missing_values, "Wrong username/password combination");
        }
    }

  }
  
?>
