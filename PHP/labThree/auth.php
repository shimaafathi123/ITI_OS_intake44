<?php
include '/base.php';
session_start(); // Start session
var_dump($_SESSION);

$authenticated = false;
$authenticatedEmail = "";

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = file("users.txt");
    foreach ($users as $user) {
        $userData = json_decode($user, true);
        if ($email === $userData['email'] && password_verify($password, $userData['password'])) {
            $authenticated = true;
            $authenticatedEmail = $email;
            $_SESSION['email'] = $email; 
            var_dump($_SESSION);
            break;
        }
    }
}

if ($authenticated) {
    echo "<h1>Welcome, $authenticatedEmail</h1>";
} else {
    echo "<h1>Email or password not matched</h1>";
}
?>
