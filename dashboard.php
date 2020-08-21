<?php
session_start();

if (!isset($_SESSION) && !$_SESSION['online']) {
    die('<marquee> Pau no seu cu faz o login vey </marquee>');
}

require('./app/Models/User.php');


$model = new User();
$me = $model->getMe();

echo "Olá " . $me['name'];