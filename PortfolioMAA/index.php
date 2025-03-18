<?php
require_once 'controllers/Controller.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$controller = new Controller();
$controller->render($page);
?>

