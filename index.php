<?php

use Steampixel\Route;

require_once('config.php');
require_once('class/User.class.php');

Route::add('/', function() {
    echo "Strona główna";
});

Route::add('/login', function() {
    //echo "Strona logowania";
    global $twig;
    $twig->display('login.html.twig');
});

Route::add('/register', function() {
   //echo "Strona rejestracji";
   global $twig;
   $twig->display('register.html.twig');
});

Route::run('/loginform');
?>