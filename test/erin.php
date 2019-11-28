<?php
$user = 'root';
$password = '';

$pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);

?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Web Page Generator Description">
  
  <title>Blogs</title>
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
  <section class="menu cid-rJ7BBHpo3t" once="menu" id="menu1-u">

    

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
                    <a href="https://mobirise.co">
                         <img src="assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="https://mobirise.co">
                        MOBIRISE
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.co">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Dienstleistungen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.co">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        Über Uns
                    </a>
                </li>
            </ul>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="https://mobirise.co">
                    <span class="mbri-save mbr-iconfont mbr-iconfont-btn "></span>
                    Jetzt testen!
                </a>
            </div>
        </div>
    </nav>
</section>
<?php $stmt = $pdo->prepare('SELECT * FROM `posts` WHERE id = :id');?>
 
 <?php $a = 1;
 while ($a <= 2000):
 
 $stmt->execute([':id' => $a]);
 $a++;
 
 
         $ALL = $stmt->fetchAll(); ?>   
 
            <?php foreach($ALL as $zeile): ?>

<section class="engine"><a href="https://mobirise.info/q">responsive web templates</a></section><section class="testimonials2 cid-rJ7yqqbk81" id="testimonials2-t">



    

    

                <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure pr-lg-5" style="max-width: 1000px;
    max-height: auto;">
              <img src=<?= $zeile["post_url"];?>>
            </div>
            <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">
                    <?= $zeile["post_text"];?>
                    </p>
                    <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                    <?= $zeile["created_by"];?>
                    </p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">
                    <?= $zeile["created_at"];?>
                    </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <?php endforeach ?>
<?php endwhile ?>
  
</body>
</html>