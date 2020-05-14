<?php

require_once("MyLogger.class.php");
$logger = new MyLogger();
$logger->log("Hello World", 'error');
$logger->log("Hello World", 'info');
$logger->log("Hello World", 'notice');
$logger->log("Hello World", 'waring');

$logger->error("Hello World");
?>