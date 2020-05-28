<?php

require_once("MyLogger.class.php");
$logger = new MyLogger();
$logger->log("Hello World", 'warning');
?>