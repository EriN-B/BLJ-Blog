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
    <title>Document</title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css"><link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
    <section class="engine"><a href="https://mobirise.info/r">bootstrap templates</a></section><section class="testimonials2 cid-rJ21xljJqP" id="testimonials2-h">
    <?php $stmt = $pdo->prepare('SELECT * FROM `posts` WHERE id = :id');?>
 
 <?php $a = 1;
 while ($a <= 2000):
 
 $stmt->execute([':id' => $a]);
 $a++;
 
 
         $ALL = $stmt->fetchAll(); ?>   
 
            <?php foreach($ALL as $zeile): ?>

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure pr-lg-5" style="width: 90%;">
              <img src= <?= $zeile["post_url"];?>>
            </div>
            <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">
                    <?= $zeile["post_text"] ?>
</p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">
                       Verfasst von: <?= $zeile["created_by"]?></p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">
                       Verfasst am: <?= $zeile["created_at"] ?>s </p>
                       <?php endforeach ?>
<?php endwhile ?>
            </div>
        </div>
    </div>
</section>
</body>
</html>









































<?php $stmt = $pdo->prepare('SELECT * FROM `posts` WHERE id = :id');?>
 
<?php $a = 1;

while ($a <= 20):

$stmt->execute([':id' => $a]);
$a++;


        $ALL = $stmt->fetchAll(); ?>   
<?php var_dump($ALL); ?>
           <?php foreach($ALL as $zeile): ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
<section class="engine"><a href="https://mobirise.info/r">bootstrap templates</a></section><section class="testimonials2 cid-rJ21xljJqP" id="testimonials2-h">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure pr-lg-5" style="width: 90%;">
              <img src= <?= $zeile["post_url"];?>>
            </div>
            <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">
                    <?= $zeile["post_text"] ?>
</p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">
                       Verfasst von: <?= $zeile["created_by"]?></p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">
                       Verfasst am: <?= $zeile["created_at"] ?>s </p>

                       <br>
            </div>
        </div>
    </div>
</section>
 
<?php endforeach ?>
        <?php endwhile ?>



</body>
</html>


           
