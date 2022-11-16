<?php
require_once('class/User.logowanie.php');

$user = new User('jkowalski', 'tajneHasło');

echo '<pre>';
var_dump($user);
?>