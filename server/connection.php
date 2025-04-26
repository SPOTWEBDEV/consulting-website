<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);


function checkUrlProtocol($url)
{
    // Parse the URL to get the scheme
    $parsedUrl = parse_url($url);

    // Check if the scheme exists and if it's http or https
    if (isset($parsedUrl['scheme'])) {
        return $parsedUrl['scheme'];
    } else {
        return 'invalid'; // Invalid URL if no scheme is found
    }
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");


// Set configurations based on protocol
if ($request == 'https') {
    $domain = 'https://bustaxbookkeeping.com/';
    define("USER", "tifkvkth_bustax");
    define("PASSWORD", "tifkvkth_bustax");
    define("DATABASE", "tifkvkth_bustax");
}
elseif ($request == 'http') {
    $domain = 'http://localhost/consulting-website/';
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "bustax");
}

// // Database connection
$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}






session_start();

$sitename = 'Business & Tax Consulting Group , INC';
$siteshort = 'Business & Tax Consulting Group , INC';
$siteemail = 'Francisikeokwu@gmail.com';
$sitelogo = 'Mybustaxbookkeeping';
$sitenumber ='(904) 254-9343';
$siteaddress = 'Jacksonville, Florida 32203';
$sitepobox = 'P. O. Box 43092';

// $payment_key = 'sk_test_6670ce23fe0169c865415cf6d9bf8ce0843ad392'
$payment_key = 'sk_live_d8f78677a6721a61fe282e10656cbde0fbfea267'

?>