<?php 
require 'vendor/autoload.php';

$userController = new App\Controllers\UserConrtoller();
echo $userController->index();
?>