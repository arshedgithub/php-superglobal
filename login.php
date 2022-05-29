<?php 


if(!(isset($_POST['txtUsername']) && isset($_POST['txtPassword']))){
    include "login.html";
    die();
}

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

if ($username == 'root' && $password == '1234') {
    session_start();
    $_SESSION['username'] = $username;
    include "mainWindow.php";

} else {
    echo('Incorrect Username or Password');
    include "login.html";
}
?>