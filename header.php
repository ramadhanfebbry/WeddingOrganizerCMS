<html lang="en"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/favicon.png" type="image/png">
  <title>Real State Multi</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="vendors/animate-css/animate.css">
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/jquery-ui/jquery-ui.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
</head>
<body>
  
  <!--================Header Menu Area =================-->
  <header class="header_area" style="border-bottom: 1px solid #cdcdcd">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container box_1620">
      <!-- Brand and toggle get grouped for better mobile display -->
      <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
        <ul class="nav navbar-nav menu_nav ml-auto">
          <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ?  'active' : '');  ?>"><a class="nav-link" href="index.php">Home</a></li> 
          <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'paket.php' ?  'active' : ''); ?>"><a class="nav-link" href="paket.php">Paket</a></li>
          <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'barang_sewa.php' ?  'active' : '');  ?>"><a class="nav-link" href="barang_sewa.php">Barang</a></li>
          <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'jasa.php' ?  'active' : '');  ?>"><a class="nav-link" href="jasa.php">Jasa</a></li>
          <?php 
            if(isset($_SESSION['username'])){
              echo "<li class='nav-item'><a class=\"nav-link\" href=\"logout.php\">Log Out</a></li>";
            }else{
              $is_active = ((basename($_SERVER['PHP_SELF']) == 'login.php' || basename($_SERVER['PHP_SELF']) == 'signup.php') ?  'active' : '');
              echo "<li class='nav-item $is_active '><a class=\"nav-link\" href=\"login.php\">Log In</a></li>";
            }
          ?>
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
        </ul>
      </div> 
    </div>
        </nav>
      </div>
  </header>