<?php

if (isset($_POST['submit'])) {

  if (!$_POST['firstName']) {
    $error = "- Please enter your first name.";
  }

  if (!$_POST['lastName']) {
    $error = "<br>- Please enter your last name.";
  }

  if (!$_POST['email']) {
    $error .= "<br>- Please enter your email adress.";
  }

  if (!$_POST['message']) {
    $error .= "<br>- Please enter your message.";
  }

  if ($error) {
    $result = "Oh no! An Error! Please correct the following: $error";
  }

  else {

    mail(
      "william.stara@optistud.fi",
      "Subject line",
      "Name: " .$_POST['firstName'].
      "Name: " .$_POST['lastName'].
      "\r\nEmail: " .$_POST['email'].
      "\r\nMessage: " .$_POST['message'],
      "Content-Type: text/plain; charset=utf-8\r\n"

    );

    {
      $result = "Thank you! We will be in touch shortly.";
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/portfolio.css">
  </head>
  <body>
    <nav>
      <a href="index.html">Home</a>
      <a href="mywork.html">My work</a>
      <a href="contact.php" style="border-bottom: 2px solid #fff;">Contact</a>
    </nav>
    <header class="contact">
      <img class="logo img-fluid" src="img/logo.png" alt="name">
    </header>
<section>
  <h2>Contact!</h2>
  <form class="col-md-4 offset-md-4" method="post">
        <?php echo $result; ?>
        <div class="form-group">
          <input type="text" name="firstName" class="form-control" placeholder="First name">
        </div>
        <div class="form-group">
          <input type="text" name="lastName" class="form-control" placeholder="Last name">
        </div>
        <div class="form-group">
          <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" placeholder="Message...." rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary button" name="submit">Submit</button>
      </form>
</section>


<footer>
  <div class="icons">
    <a href="https://www.instagram.com/williamstara00/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="https://www.facebook.com/william.stara.5" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
    <a href="https://github.com/wStarko" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
  </div>
  <div class="copyright">@Stara</div>
  </footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>