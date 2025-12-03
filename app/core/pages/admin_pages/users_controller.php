<?php
    if ($operation == "add") {
        if (count($_POST) > 0) {
            $arr = [];
            $errors = [];

            $arr['firstname'] = $_POST['firstname'];
            $arr['lastname'] = $_POST['lastname'];
            $arr['email'] = $_POST['email'];
            $arr['role'] = $_POST['role'];
            $arr['password'] = $_POST['password'];
            $con_pass = $_POST['confirm-password'];

            if (empty($arr['firstname'])) {
                $errors['firstname'] = "Firstname is required";
            }
            if (empty($arr['lastname'])) {
                $errors['lastname'] = "Lastname is required";
            }

            $data = [];
            $data['email'] = $arr['email'];

            $query = "SELECT * FROM users WHERE email = :email LIMIT 1";
            $result = query_one($query, ['email' => $data['email']]);

            if (empty($arr['email'])) {
                $errors['email'] = "Email is required";
            }elseif (!filter_var($arr['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Enter a valid email address";
            }elseif($result){
                $errors['email'] = "User already exists";
            }


            if (empty($arr['role'])) {
                $errors['role'] = "Role is required";
            }elseif ($arr['role'] !== 'user' && $arr['role'] !== 'admin') {
                $errors['role'] = "Valid Roles are 'user' or 'admin'";
            }


            if (empty($arr['password'])) {
                $errors['password'] = "Password is required";
            }elseif ($arr['password'] !== $con_pass) {
                $errors['confirm-password'] = "Passwords do not match";
            }
            elseif (strlen($arr['password']) < 6) {
                $errors['password'] = "Password must be at least 6 characters";
            }

            if (empty($errors)) {
                $arr['firstname'] = strtolower(($arr['firstname']));
                $arr['lastname'] = strtolower(($arr['lastname']));
                $arr['email'] = strtolower(($arr['email']));
                $arr['role'] = strtolower(($arr['role']));
                $arr['password'] = password_hash($arr['password'], PASSWORD_DEFAULT);

                $query = "INSERT INTO users (firstname, lastname, email, password, role) VALUES (:firstname, :lastname, :email, :password, :role)";
                $result = query_one($query, $arr);
                if ($result) {
                    echo "<script>redirect('admin/users');</script>";
                }
            }
        }
    }
    elseif ($operation == "edit") {
        $query = "SELECT * FROM users WHERE id = :id LIMIT 1";
        $user = query_one($query, ['id' => $id]);
        
        if (count($_POST) > 0) {
            $errors = [];
            $arr = [];

            $arr['firstname'] = $_POST['firstname'];
            $arr['lastname'] = $_POST['lastname'];
            $arr['email'] = $_POST['email'];
            $arr['role'] = $_POST['role'];
            $arr['password'] = $_POST['password'];
            $arr['id'] = $user['id'];


            if (empty($arr['firstname'])) {
                $errors['firstname'] = "Firstname is required";
            }
            if (empty($arr['lastname'])) {
                $errors['lastname'] = "Lastname is required";
            }
            if (empty($arr['email'])) {
                $errors['email'] = "Enter your Email";
            } elseif (!filter_var($arr['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Enter a Valid Email";
            }
            if (!empty($arr['password']) && !empty($arr['confirm-password'])) {
                if(strlen($arr['password']) < 6) {
                    $errors['password'] = "Password should be greater than 6 Characters";
                } elseif ($arr['password'] !== $con_pass) {
                    $errors['password'] = "Passwords must Match";
                }
            }
            

            if (empty($arr['role'])) {
                $errors['role'] = "Role is required";
            } elseif ($arr['role'] !== 'user' && $arr['role'] !== 'admin') {
                $errors['role'] = "Valid Roles are 'user' or 'admin'";
            }

            if (empty($errors)) {
                if(empty($arr['password'])) {
                    $query = "update users set id = :id, firstname = :firstname, lastname = :lastname, email = :email, role = :role where id = :id limit 1";

                    query_one($query,$arr);
                    echo '<script>
        			    window.location.assign("'.ROOT.'admin/users");
        			</script>';
                } else {
                    $arr['password'] = password_hash($arr['password'], PASSWORD_DEFAULT);
                    $query = "update users set id = :id, firstname = :firstname, lastname = :lastname, email = :email, role = :role, password = :password where id = :id limit 1";

                    query_one($query,$arr);
                    echo '<script>
        			    window.location.assign("'.ROOT.'admin/users");
        			</script>';


                }
            }
        }

    }
    elseif($operation == "delete") {
        $query = " select * from users where id =:id limit 1";
        $result = query_one($query,['id'=>$id]);
         if(count($_POST)>0) {
            if($result) {
                $query = "delete from users where id =:id limit 1";
                $row = query($query,['id'=>$result['id']] );
                $_SESSION['notification'] = true;

                echo'<script>
                    window.location.assign("'.ROOT.'admin/users");
                </script>';
            }
        }
    }
?>