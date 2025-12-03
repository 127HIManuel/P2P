<script>
    function redirect(page) {
        window.location.href = "<?=ROOT?>" + page;
    }
</script>
<?php
    if (count($_POST)>0) {
        $errors = [];
        $arr = []; 

        $arr['firstname'] = $_POST['firstname'];
        $arr['lastname'] = $_POST['lastname'];
        $arr['email'] = $_POST['email'];
        $arr['password'] = $_POST['password'];
        $arr['role']= 'user';
        $con_pass = $_POST['confirm-password'];

        if (empty($arr['firstname'])) {
            $errors['firstname'] = "Firstname is required";
        }
        if (empty($arr['lastname'])) {
            $errors['lastname'] = "Lastname is required";
        }
        $data = [];
        $data['email'] = $arr['email'];

        $query = "SELECT * FROM users WHERE email = :email limit 1";
        $result = query_one($query, ['email'=>$data['email']]);

        if (empty($arr['email'])) {
            $errors['email'] = "Email is required";
        }elseif (!filter_var($arr['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Enter a valid email address";
        }elseif ($result) {
            $errors['email'] = "User already exists";
        }
        if (empty($arr['password'])) {
            $errors['password'] = "Password is required";
        }elseif ($con_pass !== $arr['password']) {
            $errors['password'] = "Passwords don't match";
        }elseif (strlen($arr['password'] < 6)) {
            $errors['password'] = "Password must be at least 6 characters";
        }
        if (empty($errors)) {
            $arr['firstname'] = strtolower($arr['firstname']);
            $arr['lastname'] = strtolower($arr['lastname']);
            $arr['email'] = strtolower($arr['email']);
            $arr['password'] = password_hash($arr['password'], PASSWORD_DEFAULT);

            $query = "INSERT INTO users (firstname, lastname, email, password, role) VALUES (:firstname, :lastname, :email, :password, :role)";
            $result = query_one($query, $arr);

            echo "<script>redirect('login');</script>";
        }
    }

?>