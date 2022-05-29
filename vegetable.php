<?php 
if (!isset($_COOKIE['username'])) {
    include 'login.html';
    die();
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetables</title>
</head>
<body>
    <h1>Welcome to Harvest Super</h1>
    <h4>You are login as <?php echo($_COOKIE['username']) ?></h4>
    <h4><a href="logout.php">logout</a></h4>

    <table border="1">
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>Carrots</td>
            <td>270</td>
        </tr>
        <tr>
            <td>Beans</td>
            <td>250</td>
        </tr>
        <tr>
            <td>Pumpkins</td>
            <td>100</td>
        </tr>

    </table>
</body>
</html>