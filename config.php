<?php
require_once('vendor/autoload.php');
//loader to taki pomocnik do ładowania szablonów
$loader = new Twig\Loader\FilesystemLoader('templates');
//inicjuje twiga
$twig = new Twig\Environment($loader);

$db = new mysqli('localhost', 'root', '', 'loginform');
?>