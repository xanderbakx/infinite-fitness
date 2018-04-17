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
        <!-- <li class="nav-item">
          <a class="nav-link" href="science.html">The Science</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="us.html">Why Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reviews.html">Reviews</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="store.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-signup text-center">
    <h1 class="blue display-2 my-3 py-3">Join Infinite Fitness</h1>
  </div>

  <!-- Store -->
  <div class="container my-2">
    <div class="row">
      <div class="col-md-5 mb-5">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Infinite Fit Basic | Membership</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Infinite Fit Pro | Membership</a>
          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">GymnastABS | One-time payment</a>
        </div>
      </div>
      <div class="col-md-7">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <h5 class="text-center">Infinite Fit Basic | Membership</h5>
            <p class="text-center lead">$35 per month</p>
            <ul class="list-group-flush">
              <li class="list-group-item">All at home workouts</li>
              <li class="list-group-item">Progress up level system each month</li>
              <li class="list-group-item">Begin at your fitness level</li>
              <li class="list-group-item">All inclusive workout program
                <ul class="list-group-flush">
                  <li class="list-group-item">Strength</li>
                  <li class="list-group-item">Endurance</li>
                  <li class="list-group-item">Flexibility</li>
                  <li class="list-group-item">Balance</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <h5 class="text-center">Infinite Fit Pro | Membership</h5>
            <p class="text-center lead">$50 per month</p>
            <ul class="list-group-flush">
              <li class="list-group-item">All at home workouts</li>
              <li class="list-group-item">Progress up level system each month</li>
              <li class="list-group-item">Begin at your fitness level</li>
              <li class="list-group-item">All inclusive workout program</li>
              <li class="list-group-item">Monthly workout calendars</li>
              <li class="list-group-item">Results tracking</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <h5 class="text-center">GymnastABS | One-time payment</h5>
            <p class="text-center lead">$60</p>
            <ul class="list-group-flush">
              <li class="list-group-item">Home & Gym based</li>
              <li class="list-group-item">One month wokrout program</li>
              <li class="list-group-item">Triphasic Training protocols</li>
              <li class="list-group-item">Tone & Strengthen your Abdominal cavity, core, and posture</li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Join Infinite Fitness -->
  <div class="container my-2">
    <h3 class="blue">Sign-up</h3>
    <p class="gray">We'll send you an email giving you your next steps to get started</p>
    <form id="signup" method="post" action="send.php">

      <!-- Form Inputs -->
      <div class="form-group row">
        <label class="col-sm-2" for="product">Product</label>
        <div class="col-sm-8">
          <select class="form-control" id="product" name="product" required>
            <option value="">Select Workout</option>
            <option name="fit" value="fit">Infinite Fit Basic | Membership $35/month</option>
            <option name="infinite" value="infinite">Infinite Fit Pro | Membership $50/month</option>
            <option name="abs" value="abs">GymnastABS | One-time payment $60</option>
            <!-- <optgroup label="Gymnast ABS (One-time payment)">
              <option name="beginner" value="beginner">Beginner - $20</option>
              <option name="intermediate" value="intermediate">Intermediate - $40</option>
              <option name="advanced" value="advanced">Advanced - $60</option>
            </optgroup> -->
          </select>
        </div>
      </div>

      <div class="justify-content-center">
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="name" name="name" placeholder="Full name" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
        </div>

        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
            <label class="form-check-label" for="terms">I agree to the <a href="terms.html" target="_blank">terms and conditions</a></label>
          </div>
        </div>
        <div class="checkbox"></div>

        <input type="hidden" name="loadtime" value="<?php echo time(); ?>">

        <?php if (isset($_POST['submit'])) : ?>
        <div class="alert alert-success text-center" role="alert">
          Thank you for signing up! You will recieve an email confirmation shortly.
        </div>
        <?php endif; ?>

        <div class="text-center pb-3">
          <button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div


  <!-- Review Button -->
  <div class="container text-center my-4">
    <a href="reviews.html" class="btn btn-alert btn-lg" role="button">Check out what people are saying</a>
  </div>

  <!-- Footer -->
  <footer class="container-fluid container-blue">
    <div class="offwhite container text-center pb-3">
      <div class="p-3">
        <a target="_blank" href="https://www.facebook.com/InfiniteFitnessOfficial/"><i class="fab fa-facebook fa-3x fa-fw"></i></a>
        <a target="_blank" href="https://www.instagram.com/iaminfinitelyfit/"><i class="fab fa-instagram fa-3x fa-fw"></i></a>
      </div>
      <h6 class="text-left">Disclaimer :</h6>
      <p class="text-justify"><small>Always consult with a qualified healthcare professional prior to beginning any diet or exercise program, or taking any dietary supplements. The content on both our website and social media pages is for informational and educational purposes only and it is not intended as medical advice or to replace a relationship with a qualified Healthcare Professional.</small></p>
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
</body>

</html>
