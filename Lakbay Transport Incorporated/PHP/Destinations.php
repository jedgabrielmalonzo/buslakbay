<?php

session_start();

if (isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Destinations</title>
  <link rel="icon" type="image/x-icon" href="../images/lakbayorig.png">
  <link rel="stylesheet" href="../CSS/Destination.css" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Grotesk:wght@300..700&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/BasicNeeds.css">
</head>

<body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#">
        <img src="../images/Lakbay.png" alt="Logo" style="height: 95px; width: auto;">
    </a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav mr-auto ml-4">
            <li class="nav-item">
                <a class="nav-link" href="../PHP/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../PHP/AboutUs.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../PHP/Destinations.php">Destinations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../PHP/BookNow.php">Book Now</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../PHP/Schedule.php">Schedule</a>
            </li>
        </ul>

        <!-- User Greeting Section -->
        <div class="ml-auto d-flex align-items-center poppins-light mr-4">
            <?php if (isset($user)): ?>
                <span class="navbar-text text-white mr-3">
                    Hello, <?= htmlspecialchars($user["name"]) ?>
                </span>
                <a href="logout.php">
            <button class="Btn">
        <div class="sign">
            <svg viewBox="0 0 512 512">
              <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
              </svg>
        </div>
        <div class="text">Logout</div>
            </button>
            </a>
            <?php else: ?>
                <a href="../PHP/login.php" class="btn btn-outline-light btn-sm mr-2">Login</a>
                <a href="../HTML/signup.html" class="btn btn-outline-light btn-sm">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
  <!-- Bottom Section -->
  






  <!-- About Banner Section -->
  <div class="banner">
    <div class="banner-overlay"></div>
    <div class="banner-content">
      <h2 class="banner-title">DESTINATIONS</h1>
    </div>
  </div>

  <div class="container marketing">
    <!-- START THE FEATURETTES -->
    <div class="container marketing">
      <div class="destinations-list">
        <h4>Metro Manila</h4>
        <p>Sampaloc, Manila</p>
        <p>Cubao, Quezon City (operated by: Dagupan Bus Company)</p>
        <p>Kamias, Quezon City (New Terminal)</p>

        <h4>Provincial Destinations</h4>
        <p>Cagayan Valley</p>
        <p>
          Tuguegarao City, Cagayan (Via SCTEX/Ilagan) (selected trips via
          Roxas/Cabatuan)
        </p>
        <p>Aparri, Cagayan</p>
        <p>Gonzaga, Cagayan</p>
        <p>Jct Iuna Abulug, Cagayan (Via Laoag)</p>
        <p>Ballesteros, Cagayan</p>
        <p>Buguey, Cagayan</p>
        <p>Santa Ana, Cagayan</p>
        <p>Lasam, Cagayan</p>
        <p>Gattaran, Cagayan</p>
        <p>Baggao, Cagayan</p>
        <p>Piat, Cagayan</p>
        <p>Solana, Cagayan</p>
        <p>Enrile, Cagayan</p>
        <p>Sanchez-Mira, Cagayan (Via Laoag)</p>
        <p>Banaue, Ifugao</p>
        <p>Burgos, Isabela</p>
        <p>Echague, Isabela</p>
        <p>Quirino, Isabela</p>
        <p>Jones, Isabela</p>
        <p>Roxas, Isabela</p>
        <p>Ilagan City, Isabela</p>
        <p>San Mariano, Isabela</p>
        <p>San Mateo, Isabela</p>
        <p>Santiago City</p>
        <p>Santo Tomas, Isabela (via Delfin Albano)</p>
        <p>Tabuk City, Kalinga (via Roxas-Quezon)</p>
        <p>Solano, Nueva Vizcaya</p>
        <p>Maddela, Quirino (via Cordon)/(via Cabarroguis)</p>

        <h4>Ilocos Region</h4>
        <p>... (add more destinations if needed)</p>
        <p>... (add more destinations if needed)</p>
        <p>... (add more destinations if needed)</p>
        <p>... (add more destinations if needed)</p>
        <p>... (add more destinations if needed)</p>
      </div>
    </div>

    <!-- /END THE FEATURETTES -->
  </div>

  <div class="container-footer my-5">
    <footer class="text-center text-lg-start">
      <div class="container p-4 pb-0">
        <section>
          <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                LAKBAY TRANSPORT INC.
              </h6>
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>

            <hr class="w-100 clearfix d-md-none" />

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
              <p><a class="text-dark" href="LakbayHomepage.html">Home</a></p>
              <p><a class="text-dark" href="About Us Page.html">About Us</a></p>
              <p><a class="text-dark" href="Destination.html">Destination</a></p>
              <p><a class="text-dark" href="Schedule.html">Schedule</a></p>
              <p><a class="text-dark" href="">Contact Us</a></p>
          </div>

            <hr class="w-100 clearfix d-md-none" />

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class=""></i> Manila M, PH</p>
              <p><i class=""></i> lakbaytransport@gmail.com</p>
              <p><i class=""></i> +639664034113</p>
            </div>
          </div>
        </section>

        <hr class="my-3" />

        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center copyright-row">
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <div class="p-3">
                © 2024 Copyright:
                <a class="text-dark" href="">LAKBAY TRANSPORT INC.</a>
              </div>
            </div>
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <a class="btn btn-outline-dark btn-floating m-1" role="button"
                href="https://www.facebook.com/SoyaBeanCurdz"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-dark btn-floating m-1" role="button" href="#"><i
                  class="fab fa-instagram"></i></a>
              <a class="btn btn-outline-dark btn-floating m-1" role="button" href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </section>
      </div>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9Y2E0AqMG6KF9e2D8XohhpltM9I6a+Q8zD7YM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>