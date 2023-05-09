<?php
/**
 * WordPress User Page
 *
 * Handles authentication, registering, resetting passwords, forgot password,
 * and other user handling.
 *
 * @package WordPress
 */

/** Make sure that the WordPress bootstrap has run before continuing. */
//require( dirname(__FILE__) . '/wp-load.php' );

$host= 'ftp1.trader.com';
$user = 'CAGE_Gwebpro';
$password = 'jl4%UXb9w,';
$source = "/Transformed4359.csv";
$target = fopen("Transformed4359.csv", "w");
$newconn = ftp_connect($host) or die("Could not connect");
ftp_login($newconn,$user,$password );
if(ftp_fget($newconn,$target,$source,FTP_ASCII))
echo "file downloaded.\n";
else
echo "file not downloaded.\n";


?>
