<?php

$EmailFrom = "noreply@randyvroegop.nl";
$EmailTo = "rjp.vroegop@gmail.com";
$Subject = "email vanuit contact formulier randyvroegop.nl";
$Name = Trim(stripslashes($_POST['naam']));
$Email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['Message']));

// validation
$validationOK=true;

if($Name == "" || $Name == null){
  $validationOK = false;
  echo 'name';
  return false;
}

if($Email == "" || $Email == null){
  $validationOK = false;
  echo 'email';
  return false;
}

if($Message == "" || $Message == null){
  $validationOK = false;
  echo 'message';
  return false;
}

if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=send.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>