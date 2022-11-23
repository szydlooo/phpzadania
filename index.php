<?php
require_once('config.php');
require('class/User.logowanie.php');
echo "<pre>";
$db = new mysqli('localhost', 'root', '', 'loginForm');
$user = new User("jkowalski","tajneHasło");
var_dump($user);

?>