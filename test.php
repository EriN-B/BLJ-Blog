<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action = "test.php" method = "post" >
 <input name = "vorname" type="text" >
 <label>Vorname </label>
 <br><br>
 <input name = "title" type="text" >
 <label>Titel </label>
 <br><br>
 <input name = "message" type="text" >
 <label>Blog-Inhalt </label>

 <input type="submit" value="Abschicken">
 </form>

 <?php
$name = $_POST["vorname"] ?? '';
$title = $_POST["title"] ?? '' ;
$message = $_POST["message"] ?? '';

$user = 'root';
$password = '';

$pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);


$stmt = $pdo->prepare("INSERT INTO `posts` (created_by,post_title,post_text) VALUES(:by, :title, :text) ");
$stmt->execute([':by' => $name, ':title' => $title, ':text' => $message]);

$stmt = $pdo->prepare('SELECT * FROM `posts` WHERE id = :id');
$stmt->execute([':id' => 1]);



        $ALL = $stmt->fetchAll();    

            foreach($ALL as $zeile) {
                echo '<div class="post">';
                echo '<h2>' . $zeile["post_title"] . '</h2>';
                echo 'gepostet von: ' . $zeile["created_by"] . '<br>am: ' . $zeile["created_at"] .  '<br>';
                    echo '<div class="post-text">';
                    echo $zeile["post_text"];
                    echo '</div>';
                echo '</div>';
            
    

        
}


?> 
</body>
</html>
