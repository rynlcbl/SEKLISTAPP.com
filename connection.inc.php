<?php
session_start();
$con=mysqli_connect("localhost","root","","seklistapp");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT']);
define('SITE_PATH','https://localhost/Seklista/');
?>