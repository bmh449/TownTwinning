<?php



// define variables and set to empty values
$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }
  }

  if (empty($_POST["phone"])) {
    $phone_error = "phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^[0-9+\(\)#\.\s\/ext-]+$/i",$phone)) {
      $phone_error = "Invalid phone number";
    }
  }

  if (empty($_POST["url"])) {
    $url_error = "";
  } else {
    $url_error = test_input($_POST["url"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
      $url_error = "Invalid url";
    }

  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $gender = test_input($_POST["message"]);
  }

if($name_error == '' and $email_error == '' and $phone_error == '' and $url_error =='' ){
  $message_body = '';
  unset($_POST['submit']);
  foreach ($_POST as $key => $value) {
    $message_body .= "key: $value\n";
  }

  $to = 'bmh449@hotmail.com';
  $subject = 'Contact form submit';
  if (mail($to, $subject, $message)){
    $success = "Message sent, thankyou for contacting us!";
    $name = $email = $phone = $message = $url = '';
  }
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}

?>
