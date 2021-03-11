<?php

include('Server.php');

        $msg=$_SESSION['msg'];
        $TripID =$_SESSION['TripID'];
        $email=$_SESSION['username'];
        $noSeats=$_SESSION['seats'];

        $BookID=$_POST[input2];


        if($msg=='Your trip has been booked succesfully!'){

        $sql="INSERT INTO book (no_seats, Email, TripID) VALUES ('$noSeats', '$email', '$TripID'); ";
        $result=$con->query($sql);

        }
        else{
        $sql="DELETE FROM book WHERE BookID=$BookID;";
        $result=$con->query($sql);
        }

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'Exception.php';
        require 'PHPMailer.php';
        require 'SMTP.php';

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'xxxxx@gmail.com';
        $mail->Password = 'xxxxxx';
        $mail->setFrom('xxxxxx@gmail.com', 'TRAIN PROJECT');
        $mail->addAddress($email);
        $mail->Subject = 'Confirmation Email';
        $mail->msgHTML("$msg");
        $mail->AltBody = 'HTML messaging not supported';
        if(!$mail->send()){
        echo "Mailer Error: " . $mail->ErrorInfo;
        }else{
        echo "Message sent!";
        }

        header("location:user.html");


        ?>

