<?php
require "header.php";
require "includes/login_controller.php";
?>

    <main class="main">
    
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url(<?=ASSETS?>img/page-title-bg.webp);">
        <div class="container position-relative">
            <h1>Login Page</h1>
            <nav class="breadcrumbs">
            </nav>
        </div>
        </div><!-- End Page Title -->
        <!-- Login Section -->
        <section id="login-section" class="login-section section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-form">
                            <h2>Login</h2>
                            <form method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address:</label>
                                    <?php if(!empty($errors['email'])):?>
                                        <div class="alert alert-danger">
                                            <?=$errors['email']?>
                                        </div>
                                    <?php endif;?>
                                    <input class="form-control" id="email" name="email">
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
                                <button class="btn btn-primary">Login</button><p class="mt-3">Don't have an account? <a href="<?=ROOT?>signup">Register here</a></p>
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