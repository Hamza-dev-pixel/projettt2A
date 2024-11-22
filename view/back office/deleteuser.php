<?php
include '../../controller/usercontroller.php';
$userC = new userController();
$userC->deleteUser($_GET["id"]);
header('Location:userlist.php');
