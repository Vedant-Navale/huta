<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['E-mail'];
$pediatrician = $_REQUEST['pediatrician'];
$dermat = $_REQUEST['dermat'];
$gastrologist = $_REQUEST['gastrologist'];
$cardiologist = $_REQUEST['cardiologist'];
$Gynacologist = $_REQUEST['Gynacologist'];

//check input fields
if (empty($name) || empty($email) || empty($message) || empty($pediatrician, $dermat, $gastrologist, $cardiologist, $Gynacologist)) {
  echo "Please fill all the fields";
}
else {
  mail("chayyasnavale@gmail.com", "appointment request", $message , $pediatrician , $dermat , $gastrologist , $cardiologist , $Gynacologist , "From: $name <$email>");
  echo "<script type='text/javascript'>alert('your request has been sent succesfully, you will be sent a confirmation E-Mail shortly,Thank you');
  window.history.log(-1);
  </script>;
}


 ?>
