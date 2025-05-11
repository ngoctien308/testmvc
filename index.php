<?php
$controllerName = ucfirst($_GET['controller'] ?? 'product').'Controller';
$actionName = $_GET['action'] ?? 'index';

require "./controllers/${controllerName}.php";

$controllerObject = new $controllerName;
$controllerObject->$actionName();