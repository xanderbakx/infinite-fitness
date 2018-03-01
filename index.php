<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
  <link rel="apple-touch-icon" href="img/bookmark_icon.png" />
  <title>Sign Up</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar sticky-top navbar-dark navbar-custom navbar-expand-lg">
    <a class="navbar-brand" href="index.html">
      <img src="img/nav_white.png" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon">
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="us.html">Why Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-signup text-center">
    <h1 class="blue display-2 my-5 py-5">Join Infinite Fitness</h1>
  </div>

  <!-- Free Trial -->
  <div class="container text-center my-4">
    <a target="_blank" href="https://goo.gl/forms/BgVvh7MH21QTJy143" class="btn btn-primary btn-lg" role="button">Click here to sign up for a free trial!</a>
  </div>

  <!-- Join Infinite Fitness -->
  <div class="container my-2">
    <h3 class="blue">Sign-up</h3>
    <p class="gray">We'll send you an email giving you your next steps to get started</p>
    <form id="signup" method="post" action="send.php">


      <!-- Form Inputs -->
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="fname">First name</label>
          <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lname">Last name</label>
          <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="phone">Phone</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label>Sex</label><br>
          <div class="form-check form-check-inline pr-3">
            <label class="form-check-label pr-2" for="male">Male</label>
            <input class="form-check-input" type="radio" name="sex" id="male" value="male" required>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label pr-2" for="female">Female</label>
            <input class="form-check-input" type="radio" name="sex" id="female" value="female">
          </div>
          <div id="radio"></div>
        </div>
        <div class="col-md-6">
          <label for="dob">Date of birth</label>
          <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of birth" required>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
          <label class="form-check-label" for="terms">Agree to terms and conditions</label>
        </div>
        <div id="checkbox"></div>
      </div>
      <input type="hidden" name="phone2">

      <?php if (isset($_POST['submit'])) : ?>
      <div class="alert alert-success text-center" role="alert">
        Thank you for signing up! You will recieve an email confirmation shortly.
      </div>
      <?php endif; ?>

      <div class="text-center pb-3">
        <button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
      </div>
    </form>
  </div>

  <!-- Footer -->
  <footer class="container-fluid container-blue">
    <div class="offwhite container text-center">
      <div class="p-3">
        <a target="_blank" href="https://www.facebook.com/InfiniteFitnessOfficial/"><i class="fab fa-facebook fa-3x fa-fw"></i></a>
        <a target="_blank" href="https://www.instagram.com/iaminfinitelyfit/"><i class="fab fa-instagram fa-3x fa-fw"></i></a>
      </div>
      <h6 class="text-left">Disclaimer :</h6>
      <p class="text-justify"><small>Always consult with a qualified healthcare professional prior to beginning any diet or exercise program, or taking any dietary supplements. The content on both our website and social media pages is for informational and educational purposes only and it is not intended as medical advice or to replace a relationship with a qualified Healthcare Professional.</small></p>
    </div>
    <div class="text-right">
      <a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=iaminfinitelyfit.com','SiteLock','width=600,height=600,left=160,top=170');"><img class="img-responsive" alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/iaminfinitelyfit.com"></a>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script>
    $("#signup").validate({
      errorPlacement: function(error, element) {
        if (element.attr('name') == 'terms') {
          error.insertAfter('#checkbox');
        } else {
          error.appendTo(element.parent());
        }
        if (element.attr('name') == 'sex') {
          error.insertAfter('#radio');
        } else {
          error.appendTo(element.parent());
        }
      }
    });
  </script>
  <script src="http://localhost:35729/livereload.js"></script>
</body>

</html>
