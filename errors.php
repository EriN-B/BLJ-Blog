<?php
$errors  = [];
$formSent  = false;

if($name === ''){
    $errors[]='Bitte geben Sie einen Namen ein.';
}

if($title===''){
    $errors[]='Bitte geben Sie einen Titel ein. ';
}

if($URL===''){
    $errors='Bitte geben Sie eine URL ein.';
}

if($message===''){
    $errors='Bitte geben Sie eine Nachricht ein.';
}

