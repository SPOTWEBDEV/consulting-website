<?php
session_start();
define("HOST","localhost");
define("USER","tifkvkth_bustax");
define("PASS","tifkvkth_bustax");
define("NAME","tifkvkth_bustax");;

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);



if (!$connection) {
    die('not conneted to databse');
}

$domain = 'https://bustaxbookkeeping.com/';
$sitename = 'Mybustaxbookkeeping';
$siteshort = 'Mybustax B-K';
$siteemail = 'Francisikeokwu@gmail.com';
$sitelogo = 'Mybustaxbookkeeping';
$sitenumber ='(904) 254-9343';
$siteaddress = 'Jacksonville, Florida 32203';
$sitepobox = 'P. O. Box 43092';

$payment_key = 'sk_test_6670ce23fe0169c865415cf6d9bf8ce0843ad392'



?>