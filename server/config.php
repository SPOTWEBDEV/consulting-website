<?php


function encryptNumber($number)
{
    // Add some arbitrary values for encryption
    $salt = 12345;

    // Perform some encryption algorithm, here a simple addition
    $encrypted = $number + $salt;

    // Convert the encrypted number to a 5-character alphanumeric string
    $encryptedString = base_convert($encrypted, 10, 36);

    // Pad the string to make sure it's always 5 characters long
    $encryptedString = str_pad($encryptedString, 5, '0', STR_PAD_LEFT);

    return $encryptedString;
}


function decryptNumber($encryptedString)
{
    // Convert the encrypted string back to the encrypted number
    $encrypted = base_convert($encryptedString, 36, 10);

    // Subtract the salt to get back the original number
    $salt = 12345;
    $number = $encrypted - $salt;

    return $number;
}



?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://cdn.jsdelivr.net/npm/moment@2.30.1/moment.min.js"></script>