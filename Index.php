<?php
$user = 'root';
$password = '';
 
$pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);
$stmt = $pdo->query('SELECT * FROM `posts`');
foreach($stmt->fetchAll() as $x) {
    echo $x[1];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Erstellen Sie Ihren eigenen Blog</h1> 
  <form action="index.php" method="post">
                <div class="form-group">
                    <label class="form-label" for="name">Ihr Name</label>
                    <input class="form-control" type="text" id="name" name="name" value="<?= $name ?? '' ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Titel des Beitrages</label>
                    <input class="form-control" type="text" id="titel" name="titel" value="<?= $titel ?? '' ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="phone">Ihr Beitrag</label>
                    <input class="form-control" type="text" id="beitrag" name="beitrag" value="<?= $beitrag ?? '' ?>">
                </div>
        
</body>
</html>