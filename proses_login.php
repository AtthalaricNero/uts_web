<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "Admin" && $password == "Admin") {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("Location: home.php");
    }
}

?>