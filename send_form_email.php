<?php
if (isset($_REQUEST["email"]))
{
  $emailTwo = "tentsnstuff@email.com";
  //$emailTwo = "brett.a.koenig@gmail.com";
  $address = $_REQUEST["email"];
  $subject = "Rental Request From Website";
  $message = $_REQUEST["request"];
  mail($emailTwo, $subject, $message, "From:" . $address);
}
	header('Location: http://www.tentsnstuffrentals.com/');
	exit();
?>