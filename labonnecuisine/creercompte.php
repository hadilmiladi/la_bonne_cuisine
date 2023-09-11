<?php
include  "connexion.php";


$n=$_POST['nom'];
$p=$_POST['prenom'];
$e=$_POST['email'];
$d=$_POST['dnaiss'];
$m=$_POST['password'];
$a=$_POST['adresse'];
$t=$_POST['Telephone'];

$r = "INSERT INTO client (prenom,nom,email,Dnaiss,password,adresse,telephone) 
VALUES ('$p','$n','$e','$d','$m','$a','$t')";
$resultat = $mysqli->query($r) or die ($mysqli->error());
echo "<script> alert ('votre compte a été crée');</script>";
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>La Bonne Cuisine</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>28221997</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lundi-Mardi: 11:00 - 23:00 </span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">La Bonne Cuisine</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="menu1.php">Notre Menu</a></li>
          <li><a class="nav-link scrollto" href="#events">Evennement</a></li>
          <li><a class="nav-link scrollto" href="#book-a-table">Réservez une table</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="profil.html">Profil</a></li>


          
        </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="index.html" class="book-a-table-btn scrollto">Se déconnecter</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Cuisine <span>Traditionelle</span></h2>
                <p class="animate__animated animate__fadeInUp">Découvrez notre large selection de plats traditionels faits à partir d'ingrédients 100% Bio et provenants de notre agriculture locale. Votre satisfaction est notre priorité.</p>
                <div>
                  <a href="menu1.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Notre Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto"> Réservez une Table</a>
                </div>
              </div>
            </div>
          </div>

          

        </div>

       

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    

    <!-- ======= Menu Section ======= -->
    

    

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organizez vos <span>Evennements</span> chez nous</h2>
        </div>

        <div class="events-slider swiper">
          <div >

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Evennement customisé</h3>
                  <div class="price">
                    <p><span>à partir de 289 DT</span></p>
                  </div>
                  <p class="fst-italic">
                    Vous aurez tout notre espace et notre staff à votre disposition pour la soirée.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Plats et boissons pour 10 pax inclus.</li>
                    <li><i class="bi bi-check-circle"></i> Notre band est disponible pour vous régalez.</li>
                  </ul>
                  <p>
                    Contactez nous pour réserver votre évennement le plutot possible.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->


          </div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Réservez une <span>Table</span></h2>
        </div>

        <form action="reserver.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Votre Telephone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars"required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Temps" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="people" id="people" placeholder="# de personnes" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre demande de réservation a été envoyée. Nous vous rappellerons ou vous enverrons un e-mail pour confirmer votre réservation. Merci!</div>
          </div>
          <div class="text-center"><button type="submit">Réserver</button></div>
        </form>

      </div>
    </section>
   
        

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contactez </span> Nous</h2>
          <p>Nous sommes toujours à votre disposition.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.686734178096!2d10.189792899999999!3d36.897841799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb745e5c6f1b%3A0xf69a51ee3c65c12e!2sEsprit%20School%20of%20Business!5e0!3m2!1sfr!2stn!4v1651221805759!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>ESB chotrana<br>Tunis</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Horraires d'ouverture:</h4>
              <p>Lundi-Samedi:<br>11:00 - 23:00 </p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@labonnesuisine.com<br>contact@labonnecuisine.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Appelez:</h4>
              <p>28221997<br></p>
            </div>
          </div>
        </div>

        <form action="contacter.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre message a été envoyé, Merci!</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer Message</button></div>
          
          
        </form>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <center>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>La Bonne Cuisine</h3>
      
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>La Bonne Cuisine</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>