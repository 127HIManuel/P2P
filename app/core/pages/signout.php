<script>
    function redirect(page) {
        window.location.href = "<?=ROOT?>" + page;
    }
</script>
<?php
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        echo "<script>redirect('home');</script>";
    }