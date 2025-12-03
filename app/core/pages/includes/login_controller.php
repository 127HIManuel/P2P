<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    ini_set('session.gc_maxlifetime', 3600); // Set session lifetime to 1 hour
    session_set_cookie_params([
        'lifetime' => 3600,
        'path' => '/',
        'secure' => false, // true if using HTTPS
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    session_start();
}
?>

<script>
    function redirect(page) {
        window.location.href = "<?=ROOT?>" + page;
    }
</script>
<?php

if(count($_POST)>0) {
    $errors =[];
    $query = "select * from users where email = :email limit 1";
    $result = query_one($query,['email'=>$_POST['email']]);
    

    if(empty($_POST['email'])) {
        $errors['email'] = "Enter your Email";
    }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Enter a valid Email";
    }
    if($result) {
        if(empty($_POST['password'])) {
            $errors['password'] = "Enter your password";
        }elseif(!password_verify($_POST['password'],$result['password'])) {
            $errors['password'] = "Invalid Passsword";
        }
    }
    if(empty($errors)) {
        $_SESSION['user'] = $result;
        
        if($result) {
            if($result['role'] == "user") {
               echo "<script>redirect('course');</script>";
            }elseif($result['role'] == "admin") {
                echo "<script>redirect('admin');</script>";
            }
        }
    }
}