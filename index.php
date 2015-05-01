<?php

// index.php file
include_once("controller/Controller.php");

$controller = new Controller();
$controller->call_view('interface.php', [
               "title" => 'CLAM',
               "heading" => 'Welcome to CLAM'
          ]);