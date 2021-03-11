<?php include('Server.php') ?>
<?php

if(isset($_POST['up-btn']))
{
         $email=$_SESSION['username'];
         $name=mysqli_real_escape_string($con,$_POST['name']);
         $phone=mysqli_real_escape_string($con,$_POST['phone']);
         $npass=mysqli_real_escape_string($con,$_POST['npass']);
         $pass=mysqli_real_escape_string($con,$_POST['opass']);
         if(empty($name)&& empty($phone) &&empty($npass)){
          header('location: user.html');
         }
        elseif(empty($name)&& empty($phone))
        {
            $sql="Update usr set usr.PASSWORD='$npass' where Email = '$email'
            AND PASSWORD = '$pass'"; 
            $result=mysqli_query($con,$sql);
            header('location: user.html');
        }
        elseif(empty($name)&& empty($npass))
        {
            $sql="Update usr set usr.phoneNumber='$phone' where Email = '$email'
            AND PASSWORD = '$pass'"; 
            $result=mysqli_query($con,$sql);
            header('location: user.html');
        }
        elseif(empty($phone)&& empty($npass))
        {
            $sql="Update usr set usr.FullName= '$name' where Email = '$email'
            AND PASSWORD = '$pass'"; 
            $result=mysqli_query($con,$sql);
            header('location: user.html');
        }
        elseif(empty($name))
        {
            $sql="Update usr set usr.PASSWORD='$npass',
            usr.phoneNumber='$phone' 
            where Email = '$email'
            AND PASSWORD = '$pass'"; 
            $result=mysqli_query($con,$sql);
            header('location: user.html');
        }
        elseif(empty($phone))
        {
            $sql="Update usr set usr.PASSWORD='$npass',usr.FullName='$name' where Email = '$email'
            AND PASSWORD = '$pass'"; 
            $result=mysqli_query($con,$sql);
            header('location: user.html');
        }
        elseif(empty($npass))
        {
            $sql="Update usr set usr.phoneNumber='$phone',usr.FullName='$name' where Email = '$email'
            AND PASSWORD = '$pass'"; 
            $result=mysqli_query($con,$sql);
            header('location: user.html');
        }
     }
     $sql="Update usr set usr.phoneNumber='$phone',usr.FullName='$name',usr.password='$npass' where Email = '$email'
            AND PASSWORD = '$pass'"; 
    $result=mysqli_query($con,$sql);
     header('location: user.html');
?>
