<?php
    if (count($_POST) > 0) {
        $errors = [];
        $arr = [];

        $arr['firstname'] = $_POST['firstname'];
        $arr['lastname'] = $_POST['lastname'];
        $arr['email'] = $_POST['email'];
        $arr['subject'] = $_POST['subject'];
        $arr['message'] = $_POST['message'];

        if (empty($arr['firstname'])) {
            $errors['firstname'] = "Firstname is required";
        }
        if (empty($arr['lastname'])) {
            $errors['lastname'] = "Lastname is required";
        }
        if (empty($arr['email'])) {
            $errors['email'] = "Email is required";
        }
        if (empty($arr['subject'])) {
            $errors['subject'] = "Subject is required";
        }
        if (empty($arr['message'])) {
            $errors['message'] = "Message is required";
        }

        if (empty($errors)) {
            $query = "INSERT INTO messages (firstname, lastname, email, subject, message) VALUES (:firstname, :lastname, :email, :subject, :message)";
            $result = query($query, $arr);
            if ($result) {
                echo '<script>
                        alert("Message sent successfully");
                        window.location.assign("' . ROOT . 'contact");
                      </script>';
            } else {
                $errors['general'] = "Failed to send message. Please try again.";
            }
        }
    }
?>