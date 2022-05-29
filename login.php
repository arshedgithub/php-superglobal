<?php 


if(!(isset($_POST['txtUsername']) && isset($_POST['txtPassword']))){
    include "login.html";
    die();
}

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

if ($username == 'root' && $password == '1234') {
    setcookie('username', $username, time() + 2*60);
    include "mainWindow.php";

} else {
    echo('Incorrect Username or Password');
    include "login.html";
}
?>