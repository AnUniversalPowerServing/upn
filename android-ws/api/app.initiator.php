<?php 

ini_set('max_execution_time',300);
date_default_timezone_set("Asia/Kolkata");
 
/* Logger Declaration in JSON */ 
include('../log4php/Logger.php'); 
Logger::configure('../conf/log-config.xml'); 
	
/* Database Credentials */
$DB_UPSC_SERVERNAME="localhost:3306";
$DB_UPSC_NAME="upn";
$DB_UPSC_USER="root";
$DB_UPSC_PASSWORD="";

/* Middleware Access URLs */	 
	 
// DB: myloc6lh_mlh
// USER: myloc6lh_root
// PASSWORD : myloc6lh_root
// SERVER : localhost:3306