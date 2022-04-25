<?php
require_once "controller/BookController.php";

//khoi tao 1 instance cua controller
$controller = new BookController();

//goi den ham execute cua controller de chay web
$controller->execute();
