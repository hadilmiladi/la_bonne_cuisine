<?php include  "connexion.php";

$requete = "SELECT * FROM client WHERE id=".$_GET['identifiant'];
$resultat = $mysqli->query($requete) or die ($mysqli->error());
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.7.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>28221997</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lundi - Dimanche: 11:00 - 23:00 </span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">La Bonne Cuisine</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="inner-page.html">Home</a></li>
          <li><a class="nav-link scrollto" href="affichermenu.php">Plats</a></li>
          <li><a class="nav-link scrollto" href="account.php">Compte client</a></li>
          <li><a class="nav-link scrollto" href="afficherreservation.php">Réservations</a></li>
          <li><a class="nav-link scrollto" href="reclamation.php">Réclamations</a></li>
        </ul>
      </nav>
      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gestion compte client</h2>
          
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
<?php
echo "<table width='30%' align='center' cellpadding='15' >
<td></td>

	<td><font color='black'>Id</font></td>
	<td><font color='black'>Prénom</font></td>
	<td><font color='black'>Nom</font></td>
	<td><font color='black'>E-mail</font></td>
	<td><font color='black'>Date de naissance</font></td>
	<td><font color='black'>Mot de pass</font></td>
	<td><font color='black'>Adresse</font></td>
	<td><font color='black'>Tél</font></td>
";

$ligne = $resultat->fetch_assoc();

	echo '<tr>
  <td></td>


  <td>'. $ligne["id"] .'</td>';
	echo '<td>'. $ligne["prenom"] .'</td>
	<td>'. $ligne["nom"] .'</td>
	<td>'. $ligne["email"] .'</td>
	<td>'. $ligne["Dnaiss"] .'</td>
	<td>'. $ligne["password"] .'</td>
	<td>'. $ligne["adresse"] .'</td>
	<td>'. $ligne["telephone"] .'</td>
	</tr>';
	echo "</table>";
?>
<br><center><a href="account.php">Liste des comptes</a></center>
      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
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