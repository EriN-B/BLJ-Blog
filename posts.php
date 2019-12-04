<?php
$user = 'root';
$password = '';

$pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

  
]);
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Website Creator Description">
  
  <title>Make Your Own Blog</title>
  <link rel="stylesheet" href="assets/posts/post_style187.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rJ8cpPvY2x" once="menu" id="menu1-13">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                         <img src="pictures/icon.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.php">Your Blog</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="posts.php">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>Alle Posts
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="blog.php">
                    <span class="mbri-save mbr-iconfont mbr-iconfont-btn "></span>
                    Make yor own Blog</a></div>
        </div>
    </nav>
</section>

<br>
<br>
<br>
<br>


<?php 

$stmt = $pdo->query('SELECT * FROM `posts` ORDER BY id DESC limit 2000');
$all = $stmt->fetchAll(); ?>
 
<?php foreach($all as $zeile): ?>

    <div class= jeje>
    <h1 class="titel"><?= $zeile["post_title"]?></h1><br>

    <img class="bild" src="<?= $zeile["post_url"];?>">
    <br>
    <br>
    <div class="message">
    <p class="text"> <?= $zeile["post_text"];?></p>
    </div>
    <br>
    <p class="name">Erstellt von: <?= $zeile["created_by"];?></p>
    <br>
    <p class="datum">Erstellt am: <?= $zeile["created_at"];?></p>
    <br>
    </div>
<?php endforeach ?>

</body>
</html>  
