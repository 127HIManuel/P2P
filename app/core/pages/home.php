<?php
require "header.php";
?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="<?=ASSETS?>img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">INSPIRE. PERSPIRE. EMPOWER.</h2>
        <p data-aos="fade-up" data-aos-delay="200">Helping people discover their value and direction through meaningful work.</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="<?=ROOT?>login" class="btn-get-started">Get Started</a>
          <a href="" class="btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us:</h3>
            <p>Driven by compassion and action, we work with local partners, volunteers, and industry professionals to create pathways that lead to lasting change.</p>
            <img src="<?=ASSETS?>img/abouts.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Pathway to Purpose (P2P) is a youth-focused NGO dedicated to empowering young adults through access to education, mentorship, and meaningful opportunities. We believe every young person deserves the chance to build a purposeful life, regardless of their background or circumstances.</p>
            <p>Through programs in skill development, career readiness, leadership training, and mental wellness, we equip individuals with the tools they need to succeed personally and professionally. At P2P, we're not just preparing young adults for jobs—we're helping them discover their voice, unlock their potential, and become active contributors to their communities.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Our Triadic approach involves:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Empowerment Through Opportunity</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Holistic Personal and Professional Development</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Community-Driven Impact</span></li>
              </ul>
              <p>
                At <strong>P2P</strong>, our mission is rooted in a simple yet powerful belief: when young adults are empowered with opportunity, nurtured in their personal growth, and supported by a strong community, they can shape a better future—for themselves and for those around them. Through this triadic approach, we are not just building individuals; we are cultivating purpose, leadership, and lasting impact. Together, we walk the path toward a stronger, more empowered generation.
              </p>

              <div class="position-relative mt-4">
                <img src="<?=ASSETS?>img/abouts-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="" class="pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Featured Srvices<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?=ASSETS?>img/service-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-book"></i>
                </div>
                <a href="<?=ROOT?>service-details" class="stretched-link">
                  <h3>Education & Skill Development</h3>
                </a>
                <p>At <strong>P2P</strong>, we believe that education is the foundation of empowerment. Our programs are designed to equip young adults with the practical skills and knowledge they need to thrive in today's evolving job market.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="<?=ASSETS?>img/service-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-buildings"></i>
                </div>
                <a href="<?=ROOT?>service-details" class="stretched-link">
                  <h3>Career & Employment Support</h3>
                </a>
                <p>At <strong>P2P</strong>, we're committed to bridging the gap between ambition and opportunity. Our Career and Employment Support programs are designed to help young adults prepare for, access, and succeed in the workforce.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="<?=ASSETS?>img/service-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="<?=ROOT?>service-details" class="stretched-link">
                  <h3>Mentorship & Leadership Programs</h3>
                </a>
                <p>At <strong>P2P</strong>, we believe guidance and role models shape an adult's future. Our Mentorship programs connect participants with experienced mentors who offer support, career advice, and encouragement for growth.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->



        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-book"></i>
              <h4 class="d-none d-lg-block">Education & Skill Development</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-buildings"></i>
              <h4 class="d-none d-lg-block">Career & Employment Support</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-easel"></i>
              <h4 class="d-none d-lg-block">Mentorship & Leadership Programs</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-briefcase"></i>
              <h4 class="d-none d-lg-block">Entrepreneurship & Innovation</h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Education & Skill Development</h3>
                <p class="fst-italic">
                  Our Education & Skill Development programs include a range of initiatives designed to equip young adults with the knowledge and skills they need to thrive in today's job market. Some of which include:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i><span>Vocational training (carpentry, tailoring, coding, etc.)</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Digital literacy & IT training</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Certification programs (e.g., Google, Microsoft)</span></li>
                </ul>
                <p>
                  We focus on both foundational education and specialized vocational training,
                   ensuring that participants are well-prepared for their future careers.
                   Whether you're looking to learn a trade, master digital tools, or complete a certification course,
                    we offer a range of training opportunities tailored to your interests and goals.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?=ASSETS?>img/service-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Career and Employment Support</h3>
                <p>
                    At <strong>P2P</strong>, we target the gap between education and employment by providing comprehensive career support services. 
                    Our Career and Employment Support programs are designed to help young adults prepare for, access, and succeed in the workforce. 
                    We provide a range of services to support job seekers, including:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Job fairs & employer networking events</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Micro-job marketplaces (for freelancers or gig work)</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>CV/resume writing assistance</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Job search guidance</span></li>
                </ul>
                <p class="fst-italic">
                  Whether you're entering the job market for the first time or seeking a fresh start, 
                  we're here to guide you every step of the way.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?=ASSETS?>img/service-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Mentorship & Leadership Programs</h3>
                <p>
                    Our Mentorship & Leadership Programs are designed to connect young adults with experienced mentors who can provide guidance, support, and encouragement. 
                    These programs include:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>One-on-one mentoring</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Youth leadership seminars</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Community service projects</span></li>
                </ul>
                <p class="fst-italic">
                  Through structured mentorship, peer learning, and leadership workshops, we nurture the confidence, decision-making skills, and sense of responsibility needed to lead in today's world. 
                  Participants are given opportunities to take on community projects, engage in youth leadership forums, and build the soft skills that empower them to influence change—not just in their lives, but in their communities as well.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?=ASSETS?>img/service-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Entrepreneurship & Innovation</h3>
                <p>
                  At <strong>P2P</strong>, we believe that innovation is a powerful tool for change and that entrepreneurship offers young adults a pathway to financial independence and impact.
                    Our Entrepreneurship & Innovation programs are designed to foster creativity, critical thinking, and business acumen. Some of them include:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Business Idea Pitch Competitions</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Business Startup Bootcamps</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Innovation Challenges / Hackathons</span></li>
                </ul>
                <p class="fst-italic">
                  Through hands-on workshops, business bootcamps, mentorship, and real-world pitch events, 
                  we guide young innovators in developing viable business models and building confidence.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?=ASSETS?>img/service-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="<?=ASSETS?>img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?=ASSETS?>img/team/ceo.jpg" class="testimonial-img" alt="">
                <h3>Abodunrin Oluwatomiwo</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>At <strong>P2P</strong>, we don't just run programs—we change lives. Every young person who walks through our doors carries untapped potential, and it's our mission to help them realize it. I've watched individuals go from feeling overlooked to becoming confident, capable leaders in their communities. That's what drives us—seeing purpose come to life, one person at a time.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?=ASSETS?>img/team/cto.jpg" class="testimonial-img" alt="">
                <h3>John Afolabi</h3>
                <h4>Chief Technical Officer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Technology is more than a tool—it's a bridge to opportunity. At <strong>P2P</strong>, we're using tech to break down barriers and connect young people to skills, mentors, and resources they never thought possible. From digital training to virtual mentorship, we're building systems that make empowerment scalable and inclusive.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?=ASSETS?>img/team/mrs-catherine.jpg" class="testimonial-img" alt="">
                <h3>Mrs. Catherine Okunola</h3>
                <h4>Sponsor</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Supporting Pathway to Purpose has been one of the most rewarding decisions I have made. Their dedication to empowering young adults is not just inspiring—it's effective. We've seen our contributions translate into real impact: young people gaining skills, starting businesses, and giving back to their communities. P2P doesn't just talk about change—they make it happen.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?=ASSETS?>img/team/Product-Manager.jpg" class="testimonial-img" alt="">
                <h3>Sarah Jhonson</h3>
                <h4>Product Manager</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>At <strong>P2P</strong>, every program we design starts with a simple question: 'Will this truly empower someone?' As Product Manager, I work closely with our teams to ensure our initiatives are practical, user-focused, and impactful. Seeing young adults use what we've built—whether it's an app, a training module, or a mentorship platform—to take control of their future is what makes this work deeply fulfilling.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?=ASSETS?>img/team/miss-sarima.jpg" class="testimonial-img" alt="">
                <h3>Sarima Akanni</h3>
                <h4>Special Advisor to the CEO</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Being part of <strong>P2P</strong> means witnessing transformation at every level. As Special Advisor to the CEO, I have a front-row seat to the strategy, passion, and purpose that drive this organization forward. What sets P2P apart is its commitment to not just short-term support, but long-term empowerment. We're building more than programs—we're shaping futures.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?=ASSETS?>img/team/miss-aisha.jpg" class="testimonial-img" alt="">
                <h3>Aisha Abdulraheem</h3>
                <h4>Special Advisor to the CEO</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>At <strong>P2P</strong>, we don't just respond to challenges—we anticipate them. My role as Special Advisor involves shaping strategy that keeps us agile, relevant, and deeply connected to the communities we serve. The impact we've seen—young people launching careers, leading change, and discovering their purpose—is proof that intentional planning backed by compassion works.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->
    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>CHECK OUT OUR TEAM</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img style="height: 300px;" src="<?=ASSETS?>img/team/ceo.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abodunrin Oluwatomiwo</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img style="height: 300px;" src="<?=ASSETS?>img/team/Product-Manager.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img style="height: 300px;" src="<?=ASSETS?>img/team/cto.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>John Afolabi</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <?php require "contact.php"?>
  </main>
<?php require "footer.php"?>
