<?php
$user = 'root';
$password = '';

$pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="test_css.css">
  <title>Document</title>
</head>
<body>
<?php $stmt = $pdo->prepare('SELECT * FROM `posts` WHERE id = :id');?>
 
 <?php $a = 1;
 while ($a <= 2000):
 
 $stmt->execute([':id' => $a]);
 $a++;
 
 
         $ALL = $stmt->fetchAll(); ?>   
 
            <?php foreach($ALL as $zeile): ?>
<div class="beiträge">
  <h1 class="title"> <?= $zeile["post_title"];?><br><br>
  <img class="pic"src= <?= $zeile["post_url"];?>><br>
  <p class="text"> <?= $zeile["post_text"];?></p>
  <p class="name"> <?= $zeile["created_by"];?></p>
  <p class="name"> <?= $zeile["created_at"];?></p>
  <?php endforeach ?>
<?php endwhile ?>
</div>
</body>
</html>

