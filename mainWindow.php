<?php
    if (!(isset($_SESSION['username']) && time() - $_SESSION['lastactive'] < 10 )) {
        include 'login.html';
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Harvest Super</h1>
    <h4>You are login as <?php echo($_SESSION['username']) ?></h4>
    <h4><a href="logout.php">logout</a></h4>
    <ul>
        <li><a href="fruit.php">Fruits</a></li>
        <li><a href="vegetable.php">Vegetables</a></li>
    </ul>
</body>
</html>