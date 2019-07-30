<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$msg=$_REQUEST['msg'];
$to="ghone.nitesh@gmail.com";
$mail_body="You have recevied new message from".$name."\n E-mail address is".$email."\n message is".$msg;
$headers="From: ".$email."\r\n";
mail($to,$subject,$mail_body,$headers)
?>