<?php
    $errors = array();

    if (isset($_POST['username'], $_POST['password'])){
    if (empty($_POST['username'])){
        $errors[] = 'The username cannot be empty.';
    }
    if (empty($_POST['password'])){
        $errors[] = 'The password field cannot be empty.';
    }
    if (valid_credentials(strtolower($_POST['username']), $_POST['password']) == false){
        $errors[] = 'Username / Password incorrect.';
    }
    if (empty($errors)){
        $_SESSION['username'] = $_POST['username'];
        header('Location: ../main.php');
        die();
    }

}
?>
