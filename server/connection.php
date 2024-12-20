<?php

define("HOST","localhost");
define("USER","root");
define("PASS","");
define("NAME","bustax");
$connection = mysqli_connect(HOST, USER, PASS, NAME);
session_start();
$domain = 'http://localhost/consulting-website/';
$sitename = 'Mybustaxbookkeeping';
$siteshort = 'Mybustax B-K';
$siteemail = 'Francisikeokwu@gmail.com';
$sitelogo = 'Mybustaxbookkeeping';
$sitenumber ='(904) 254-9343';
$siteaddress = 'Jacksonville, Florida 32203';
$sitepobox = 'P. O. Box 43092';

$payment_key = 'sk_test_6670ce23fe0169c865415cf6d9bf8ce0843ad392'

?>