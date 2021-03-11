<?php
    session_start();
    $con=mysqli_connect('localhost','root','') 
        or die(mysql_error());  
    mysqli_select_db($con,'booking system') 
        or die("cannot select DB"); 
    ?>
