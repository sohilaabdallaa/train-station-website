<?php include('Server.php') ?>
<?php
 //Collect User Info from Sign Up Form
if (isset($_POST['signup'])) {
  
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email_1 = mysqli_real_escape_string($con, $_POST['Email1']);
  $email_comfi = mysqli_real_escape_string($con, $_POST['Email2']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $passComfi = mysqli_real_escape_string($con, $_POST['passComfi']);
  $phone = mysqli_real_escape_string($con, $_POST['phonenumber']);
  
  //To Ensure That User Add All Required Information
  if (empty($username)) { array_push($missing_values, "Username is required"); }
  if (empty($email_1)) { array_push($missing_values, "Email is required"); }
  //Email Comfirmation
  if ($email_1 != $email_comfi) {
  array_push($missing_values, "The two passwords do not match");
  }
  if (empty($password_1)) { array_push($missing_values, "Password is required"); }
  //Password Comfirmation
  if ($password_1 != $passComfi) {
  array_push($missing_values, "The two passwords do not match");
  }
  if(empty($phone)) {array_push($missing_values,"Phone id required") ;}

  //check if this user is already exist with the same information
  $user_check_query = "SELECT * FROM usr WHERE FullName='$username' OR Email='$email_1' ";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($missing_values, "Username already exists");
    }

    if ($user['Email1'] === $email_1) {
      array_push($missing_values, "email already exists");
    }
  }
  
  // Sign Up with NO MISSING VALUES
  if (count($missing_values) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database
     
    $query = "INSERT INTO usr (FullName, Email, Password,PhoneNumber) 
                VALUES('$username', '$email_1', '$password_1','$phone') ";
     
      if(mysqli_query($con, $query))
{  
  echo"You have been successfully registered";
}
else
{  
    die('Invalid query: ' . mysqli_error($con));
}
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: user.html');
  }
}
