
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?=TITLE?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?=ASSETS?>img/icon.ico" rel="icon">
  <link href="<?=ASSETS?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=ASSETS?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=ASSETS?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=ASSETS?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=ASSETS?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=ASSETS?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?=ASSETS?>css/main.css" rel="stylesheet">

</head>
<style>
  body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  /* rtl:raw:
  right: 0;
  */
  bottom: 0;
  /* rtl:remove */
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  height: calc(100vh - 48px);
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #727272;
}

.sidebar .nav-link.active {
  color: #2470dc;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .navbar-toggler {
  top: .25rem;
  right: 1rem;
}

.navbar .form-control {
  padding: .75rem 1rem;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}
  .custom-navbar {
    height: 80px; /* or match logo height */
    padding: 0 20px;
  }

  .custom-navbar img {
    height: 150px;
    width: auto;
    object-fit: contain;
  }

  .navmenu ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    height: 100%;
    align-items: center;
  }

  .navmenu a {
    padding: 0 15px;
    line-height: 80px; /* align text vertically */
    display: inline-block;
  }
</style>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center custom-navbar">

  <a href="<?=ROOT?>" class="logo d-flex align-items-center me-auto">
    <img src="<?=ASSETS?>img/organization.png" alt="">
  </a>

  <nav id="navmenu" class="navmenu">
    <ul>
      <?php if(isset($_SESSION['user']) && $_SESSION['user']['role']=="user"):?>
        <li><a href="<?=ROOT?>#hero">Home</a></li>
        <li><a href="<?=ROOT?>#about">About</a></li>
        <li><a href="<?=ROOT?>#services">Services</a></li>
        <li><a href="<?=ROOT?>#team">Team</a></li>
        <li><a href="<?=ROOT?>#contact">Contact</a></li>
        <li><a href="<?=ROOT?>course">Courses</a></li>
        <li><a href="<?=ROOT?>signout">Signout</a></li>
      <?php elseif(isset($_SESSION['user']) && $_SESSION['user']['role']=="admin"):?>
        <li><a href="<?=ROOT?>#hero">Home</a></li>
        <li><a href="<?=ROOT?>#about">About</a></li>
        <li><a href="<?=ROOT?>#services">Services</a></li>
        <li><a href="<?=ROOT?>#team">Team</a></li>
        <li><a href="<?=ROOT?>#contact">Contact</a></li>
        <li><a href="<?=ROOT?>course">Courses</a></li>
        <li><a href="<?=ROOT?>admin">Admin</a></li>
        <li><a href="<?=ROOT?>signout">Signout</a></li>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      <?php else:?>
        <li><a href="<?=ROOT?>#hero">Home</a></li>
        <li><a href="<?=ROOT?>#about">About</a></li>
        <li><a href="<?=ROOT?>#services">Services</a></li>
        <li><a href="<?=ROOT?>#team">Team</a></li>
        <li><a href="<?=ROOT?>#contact">Contact</a></li>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
   </nav>
        <a class="cta-btn" href="<?=ROOT1?>login">Get Started</a>
      <?php endif;?>
      
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
 
  <?php if(!isset($_SESSION)):?>
    <a class="cta-btn" href="<?=ROOT?>login">Get Started</a>
  <?php endif;?>

</div>

  </header>