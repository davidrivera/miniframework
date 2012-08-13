<?php 
session_start();
ini_set('display_errors', '1'); 
//error_reporting(E_ALL | E_STRICT);

// connect to database //
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "";

@mysql_connect ("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
@mysql_select_db("$db_name") or die ("No database");
// connect to database // 
$ROOT= '/var/www/sitename/';

include('user_ini.php');
include("login_validation.php");
include("utils.php");
include("queries.php");
include("partials.php");

function outnit() {
	mysql_close();
}

?>
