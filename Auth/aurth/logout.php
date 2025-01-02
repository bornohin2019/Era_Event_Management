<?php
include_once('../db_root.php');

session_start();

unset($_SESSION['mySession']);
session_destroy();
header('location:http://localhost/Era Event Management');

?>