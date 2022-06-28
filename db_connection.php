<?php

session_start();

//defining constants 

define('LOCALHOST','localhost');
define('ROOT','root');
define('PASSWORD','');
define('DATABASE','spacex');
define('URL','http://localhost/spacex/project-SPACEX/');

//connecting DB
$conn = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or 
die(mysqli_error('FAILED TO CANECT TO DATABSE'));

$db_select = mysqli_select_db($conn, DATABASE) 
or die(mysqli_error('DATABSE DOES NOT EXIST'));

?>