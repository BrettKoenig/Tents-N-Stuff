<html>
<body>

Welcome <?php echo $_POST["name"]; ?>,<br>
Thank you for your request, we will be in touch with you soon. <br>
<a href="http://www.tentsnstuffrentals.com/contact.html">Return to site</a>
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
?>

</body>
</html>