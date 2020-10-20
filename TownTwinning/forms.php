<?php

$result = '';
if(isset($_POST ['submit'])){
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;

  //$mail->SMTPDebug = 1;                                 // Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'pixelswebdesigns@gmail.com';                 // SMTP username
  $mail->Password = 'Fannyhair4567890!';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  //Recipients
  //$mail->setFrom($_POST['email'],$_POST['name']);
  //$mail->addAddress('bh449@mail.com');
  $mail->setFrom('pixelswebdesigns@gmail.com');
  $mail->addAddress('pixelswebdesigns@gmail.com', 'Ben');

  $mail->isHTML(true);                                  // Set email format to HTML
  //$mail->Subject = 'Form Submission: ' .$_POST['subject'];
  $mail->Body    = '<h1 align=center>name :'.$_POST['name']. '<br>Email: ' .$_POST['email'].'<br>phone: ' .$_POST['phone']. '<br
  >Message: '.$_POST['message'].' </h1>';

  if(!$mail->send()){
    $result="Sorry something went wrong, please try again later.";
  }
else{
  $result="Thankyou for contacting us. We will get back to you as soon as possible.";
}
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <link href="css/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <!--link rel="stylesheet" href="php/form.css"-->
  <link rel="stylesheet" href="php/index.php">
    <link rel="stylesheet" href="php/form_process.php">
  <link rel="stylesheet" href="php/forms.php">
  <link href="css/style.css" rel="stylesheet">

  <!--animate css -->
  <link rel="stylesheet" href="css/animate.css">

  <!--font-fontawesome-->
  <link href="css/fontawesome.min.css" rel="stylesheet">

  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129021888-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129021888-1');
</script>


  <!--favicon-->
  <link rel="icon" type="image/png" href="/images/logo.png">


  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="form.css" type="text/css">

  <body>
    <div class="container-fluid px-0 content">

  <header class="" id="home">

      <!--Navbar header-->
      <nav class="navbar navbar-expand-lg navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Town Twinning (Maidstone - Beauvais)</a>
        <img class="img-fluid" src="assets/french-flag-nav.png">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forms.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>


    <div class="">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!--logo-->
            <div class="logo text-center">

              <!--img src="images/logo.png" alt="logo"-->

            </div>

          </div>

        </div>
        <div class="row">

          <div class="col-md-12">

            <div class="form-header">

              <!--Title & description-->
			  <br>
              <h1>Town Twinning (Maidstone - Beauvais)</h1>
              <p></p>

            </div>

          </div>



        </div>
      </div>

    </div>
  </header>
  <div class="container">

    <div class="row">

      <div class="col-sm-12">
        <form id="contact" action="<?=$_SERVER['PHP_SELF'];?>" method="post">
          <h3>Contact Us</h3>
          <h4>Send us a message if you want to know about future events</h4>
          <fieldset>
            <input placeholder="Your name" type="text" tabindex="1" name="name" value="" autofocus>
            <span class="error"></span>
          </fieldset>
          <fieldset>
            <input placeholder="Your Email Address" type="text" name="email" value="" tabindex="2">
            <span class="error"></span>
          </fieldset>
          <fieldset>
            <input placeholder="Your Phone Number" type="text" name="phone" value="" tabindex="3">
            <span class="error"></span>
          </fieldset>
          <fieldset>
            <textarea placeholder="Type your Message Here...." type="text" name="message" value="" tabindex="5"></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
          <div class="success"><?= $result; ?></div>
        </form>


      </div>

    </div>

  </div>

</div>
  </body>
<!--Footer-->

<footer class="footer">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div id="copyright">
          <p>Copyright 2019 &copy<a href="#home"> Town Twinning (Maidstone - Beauvais)</a> </p>

        </div>

      </div>

      <div class="col-md-12">
        <div class="scroll-top">
          <a href="#home" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        </div>
      </div>

    </div>


  </div>



</footer>
