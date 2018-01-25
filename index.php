<?php

$path = trim($_SERVER['REQUEST_URI'], '/');
$routes = [
'' => 'controls/indexcontrol.php',
'about'=> 'controls/aboutcontrol.php'
];
if (array_key_exists($path, $routes)) {
  require $routes[$path];
}else {
  require 'controls/notFound.php';
}
?>