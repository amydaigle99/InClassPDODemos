<?php

/* 
 * 2 ways to bring external scripts into existing:
 * 1- INCLUDE
 * 2- REQUIRE
 * 
 * Note: There is also an INCLUDE_ONCE and REQUIRE_ONCE
 * 
 * Differences b/w each are:
 * 
 * Failure to include a file results in a warning and the script continues...
 * Failure to require a file results in a fatal error abd the script is halted
 * 
 * Typically INCLUDE files like HTML header, footer, sidebar, etc.
 * 
 * Typically REQUIRE files that are critical to the sites functionality
 * like database connections, configuration files, etc
 * 
 */

// Retrieve the datbase info (outside of root folder)
$root = dirname($_SERVER['DOCUMENT_ROOT']).'/dbconn';
//echo $root;//C:/xampp/dbconn

// Create a constant to represent the final db connection file location
define('MYSQL',$root.'/2017_pdo_connect.php');
// giving the final path
// C:/xampp/dbconn/2017_mysqli_connect.php
//var_dump(MYSQL);

