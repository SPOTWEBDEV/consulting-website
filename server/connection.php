<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function checkUrlProtocol($url)
{
    $parsedUrl = parse_url($url);
    return isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : 'invalid';
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");

// Determine if online or offline
$isLocalhost = ($_SERVER['HTTP_HOST'] === 'localhost');

// Database connection (Only use one based on environment)
$connection = '';

if ($isLocalhost) {
    // Offline (Localhost)
    $domain = "http://localhost/consulting-website/";

    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "bustax");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
} else {
    // Online (Live Server)
    $domain = "http://bustaxbookkeeping.com/";

    define("USER", "quanstof_bustax");
    define("PASSWORD", "quanstof_bustax");
    define("DATABASE", "quanstof_bustax");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
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