<?php
 require "includes/contact_controller.php";
?>

<style>
    form {
  background: #f8f9fa;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.form-group .row {
  margin-bottom: 15px;
}

.form-control {
  border-radius: 5px;
  padding: 10px 15px;
  font-size: 1rem;
}

textarea.form-control {
  resize: vertical;
}

button[type="submit"] {
  background-color:rgb(0, 0, 0);
  color: #fff;
  border: none;
  padding: 10px 30px;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s;
}

button[type="submit"]:hover {
  background-color:rgb(249, 0, 0);
}

.error-message {
  color: red;
  margin-bottom: 10px;
  font-size: 0.9rem;
}

</style>
<!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Keep in Touch</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>House I-2, Linktin Orchard Homes, Karmo District, Abuja</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+234 9031456970</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>abodunrinoluwatomiwo@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form method="post" data-aos="fade-up" data-aos-delay="500">
                <div class="form-group">
                    <div class="row gy-4">
                        <?php if(!empty($errors['firstname'])):?>
                            <div class="text-danger"><?=$errors['firstname']?></div>
                        <?php endif;?>
                        <div class="col-md-6">
                            <input type="text" name="firstname" class="form-control" placeholder="Your Firstname">
                        </div>
                        <?php if(!empty($errors['lastname'])):?>
                            <div class="text-danger"><?=$errors['lastname']?></div>
                        <?php endif;?>
                        <div class="col-md-6">
                            <input type="text" name="lastname" class="form-control" placeholder="Your Lastname">
                        </div>
                        <?php if(!empty($errors['email'])):?>
                            <div class="text-danger"><?=$errors['email']?></div>
                        <?php endif;?>
                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <?php if(!empty($errors['subject'])):?>
                            <div class="text-danger"><?=$errors['subject']?></div>
                        <?php endif;?>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <?php if(!empty($errors['message'])):?>
                            <div class="text-danger"><?=$errors['message']?></div>
                        <?php endif;?>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="4" placeholder="Message"></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="error-message"></div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
