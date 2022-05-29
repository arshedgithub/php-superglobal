<?php 

if(!(isset($_POST['txtUserame']) && isset($_POST['txtPassword']))){
    include "login.html";
    die();
}

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

if ($username == 'root' && $password == '1234') {
    echo('Hi');
} else {
    echo('Incorrect Username or Password');
    include "login.html";
}
?>