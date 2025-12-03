<?php
require "header.php";
require "includes/signup_controller.php";
?>

    <main class="main">
    
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url(<?=ASSETS?>img/page-title-bg.webp);">
        <div class="container position-relative">
            <h1>Signup Page</h1>
            <nav class="breadcrumbs">
            </nav>
        </div>
        </div><!-- End Page Title -->
        <!-- Signup Section -->
        <section id="login-section" class="login-section section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-form">
                            <h2>Signup</h2>
                            <form method="post">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">Firstname:</label>
                                    <?php if(!empty($errors['firstname'])):?>
                                        <div class="alert alert-danger">
                                            <?=$errors['firstname']?>
                                        </div>
                                    <?php endif;?>
                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                </div>
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Lastname:</label>
                                    <?php if(!empty($errors['lastname'])):?>
                                        <div class="alert alert-danger">
                                            <?=$errors['lastname']?>
                                        </div>
                                    <?php endif;?>
                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address:</label>
                                    <?php if(!empty($errors['email'])):?>
                                        <div class="alert alert-danger">
                                            <?=$errors['email']?>
                                        </div>
                                    <?php endif;?>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <?php if(!empty($errors['password'])):?>
                                        <div class="alert alert-danger">
                                            <?=$errors['password']?>
                                        </div>
                                    <?php endif;?>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirm-password" class="form-label">Confirm Password:</label>
                                    <input type="password" class="form-control" id="confirm-password" name="confirm-password">
                                </div>
                                <button type="submit" class="btn btn-primary">Signup</button><p class="mt-3">Already have an account? <a href="<?=ROOT?>signup">Login in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Section -->
    </main>
    <?php
    require "footer.php";
    ?>