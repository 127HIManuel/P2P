<?php
require "header.php";
?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(<?=ASSETS?>img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Service Details</h1>
        <p>Pathway to Purpose empowers youth through education, mentorship, entrepreneurship, leadership training, digital skills, and career support programs.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?=ROOT?>">Home</a></li>
            <li class="current">These Services include</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="#" class="active">Web Design</a>
              <a href="#">Vocational Skills</a>
              <a href="#">Software Development</a>
              <a href="#">Product Management</a>
              <a href="#">Graphic Design</a>
              <a href="#">Marketing</a>
              <a href="#">Artificial Intelligence</a>
            </div>

            <h4>About our Services</h4>
            <p>At Pathway to Purpose, we equip young adults with future-ready skills to thrive in a digital world. Our training covers Web Design, Software Development, Product Management, Graphic Design, Marketing, Artificial Intelligence and other fields—empowering participants to launch careers, build innovative projects, and lead with confidence in the tech-driven economy.</p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="<?=ASSETS?>img/service.jpg" alt="" class="img-fluid services-img">
            <h3>Why We Chose These Services</h3>
            <p>
              At <strong>P2P</strong>, our programs are intentionally designed to meet the real needs of today's youth and tomorrow's workforce. The services we offer—ranging from Vocational Training to Graphic Design, and Artificial Intelligence—were chosen based on these key factors:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Industry Demand For These Skills.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Innovation Focused Skills.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Cross-Industry Value.</span></li>
            </ul>
            <p>
              By aligning our services with real-world needs and future trends, Pathway to Purpose provides more than just training—we offer a launchpad for growth, creativity, and meaningful impact. Whether our participants pursue careers, create startups, or lead community change, they do so with the skills and confidence to shape their own future.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

<?php require "footer.php"?>