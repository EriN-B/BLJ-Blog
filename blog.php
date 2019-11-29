<?php
$user = 'root';
$password = '';

$pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

  
]);
?>

<?php

$formSent = false;
$namesent = false;
$titlesent = false;
$urlsent = false;
$messagesent= false;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$name = htmlentities( $_POST["name1"] ?? '');
$title = htmlentities($_POST["title"] ?? '' );
$URL = ($_POST["url"]??'');
$message =htmlentities($_POST["message"] ?? '');


$errors  = [];
$formSent  = false;
$namesent = false;
$titlesent = false;
$urlsent = false;
$messagesent= false;

if($name === ''){
    $errors[]='Bitte geben Sie einen Namen ein.';
    $formSent = true;
    $namesent = true;
}

if($title===''){
    $errors[]='Bitte geben Sie einen Titel ein. ';
    $formSent = true;
    $titlesent = true;
}

if($URL===''){
    $errors='Geben Sie eine URL ein.';
    $formSent = true;
    $urlsent = true;
}

if($message===''){
    $errors='Geben Sie eine Nachricht ein.';
    $formSent = true;
    $messagesent= true;
}

$user = 'root';
$password = '';

$pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);

if ($formSent===false){
$stmt = $pdo->prepare("INSERT INTO `posts` (created_by,post_title,post_text,post_url) VALUES(:by, :title, :text,:url) ");
$stmt->execute([':by' => $name, ':title' => $title, ':text' => $message, ':url' => $URL]);
}
}
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Website Creator Description">
  
  <title>Make Your Own Blog</title>
  <link rel="stylesheet" href="assets/blog/error_style.css">
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
                    <a href="blog.php">
                         <img src="assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="blog.php">Your Blog</a></span>
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

<section class="engine"><a href="">web creation software</a></section><section class="mbr-section fo rm1 cid-rJ8gireKJO" id="form1-14">

    
    
<div class="container">
    <div class="row justify-content-center">
        <div class="title col-12 col-lg-8">
            <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                Create Your Own Blog
            </h2>
            <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                Schreiben Sie ganz einfach Ihren eigenen Blog
            </h3>
        </div>
    </div>
</div>

<div class="wrapper">
<?php

if ($namesent===true){
    echo "Bitte geben Sie einen Namen ein.<br>";
}

if ($titlesent=== true){
    echo "Bitte geben Sie einen Titel ein.<br>";
}

if ($urlsent===true){
    echo "Bitte geben Sie eine URL ein.<br>";
}

if ($messagesent===true){
    echo "Bitte geben Sie eine Nachricht ein.<br><br><br><br>";
}

?>

</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="media-container-column col-lg-8" data-form-type="formoid">
            <!---Formbuilder Form--->


            <form action="blog.php" method="POST">
                <div class="row">
                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Vielen Dank! Ihre Nachricht wurde verschickt!</div>
                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                    </div>
                </div>
                <div class="dragArea row">
                    <div class="col-md-4  form-group" data-for="name">
                        <label for="name-form1-a" class="form-control-label mbr-fonts-style display-7">Name</label>
                        <input type="text" name="name1" data-form-field="Name"class="form-control display-7" id="name-form1-a">
                    </div>
                    <div class="col-md-4  form-group" data-for="email">
                        <label for="email-form1-a" class="form-control-label mbr-fonts-style display-7">Titel Ihres Beitrags</label>
                        <input type="text" name="title" data-form-field="title"class="form-control display-7" id="email-form1-a">
                    </div>
                    <div class="col-md-4  form-group" data-for="url">
                        <label for="name-form1-a" class="form-control-label mbr-fonts-style display-7">Bild URL</label>
                        <input type="text" name="url" data-form-field="url"class="form-control display-7" id="name-form1-a">
                    </div>
                    <div data-for="message" class="col-md-12 form-group">
                        <label for="message-form1-a" class="form-control-label mbr-fonts-style display-7">Ihr Beitrag</label>
                        <textarea name="message" data-form-field="Message" class="form-control display-7" id="message-form1-a"></textarea>
                    </div>
                    <div class="col-md-12 input-group-btn align-center">
                        <button type="submit" href="landing_page.php"class="btn btn-primary btn-form display-4">Veröffentlichen</button>

                    </div>
                </div>
            </form><!---Formbuilder Form--->
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


</body>
</html>



