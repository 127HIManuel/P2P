<?php require "header.php"?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(<?=ASSETS?>img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Error Page</h1>
        <p>Check the URL properly, this path is invalid.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?=ROOT?>">Home</a></li>
            <li class="current">Error Page</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p style="color: red;">Error 404</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <p>Page not found</p>
      </div>

    </section><!-- /Starter Section Section -->

  </main>

  <?php require "footer.php"?>