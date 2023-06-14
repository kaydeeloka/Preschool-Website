<?php 
//database details
$db_user = "root";
$db_pass = "";
$db_name = "userlap";

//new object in PDO class
$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);