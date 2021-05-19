<?php
include ("config.php");

use PHPMailer\PHPMailer\PHPMailer;
require_once('phpMailer/Exception.php');
 require_once('phpMailer/PHPMailer.php');
  require_once('phpMailer/SMTP.php');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phoneNum'];
  $agent = $_POST['agent-question'];
  $day = $_POST['appointment-day'];
  $time = $_POST['time'];

  if(isset($_POST['email']) && ($_POST['email'] != '')
   && ($_POST['name'] != '') && ($_POST['phoneNum'] != '')&& ($agent != '')
  && ($day != 'Select') && ($time!= 'Select')) {
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {


$sql="INSERT INTO `vipeventform`(`name`, `email`, `phone`,`agent`,`day`,`time`)
VALUES ('$name', '$email', '$phone','$agent','$day','$time')";
mysqli_query($conn, $sql);


  //Email Form
     $mail = new PHPMailer();
     $mail->IsSMTP();
     $mail->SMTPDebug = 1;
     $mail->Host='smtp.gmail.com';
     $mail->Port=587;
    $mail->SMTPSecure='tls';
    $mail->SMTPAuth=true;
      $mail->Username='eventcontactform@gmail.com';
       $mail->Password='ar$had123';

     $mail->setFrom('eventcontactform@gmail.com');
     $mail->addAddress('ayesharshad88@gmail.com');
     $mail->addReplyTo($_POST['email'],$_POST['name']);

     $mail->isHTML(true);
     $mail->Subject = "Registration Form";
     $mail->Body ="Registered User's Name: ".$_POST['name']."\n";
     $mail->Body .="Email: ".$_POST['email']."\r\n";
      $mail->Body .="phone Number: ".$phone."\r\n";
      $mail->Body .="Are they an agent? ".$agent."\r\n";
      $mail->Body .="Appointment Day and Time: ".$day." at ".$time."\r\n";

   if(!$mail->Send()){
      echo "message failed";
    } else {
      echo "message sent!";
    }


 }

}



?>
