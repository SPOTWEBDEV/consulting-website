<?php
include('../../database.php');


if (isset($_POST['from'])) {
     $url = $domain . 'client/access/index.php';
     
     
     if ($_POST['from'] == $url) {

          if ($_POST['subForm'] == 'email') {
               $email = $_POST['email'];
               $password = $_POST['password'];
               $select = mysqli_query($connection, "SELECT `id`,`verifiactionStatus` FROM `clients` WHERE `email`='$email' AND `password`='$password'");
          } else {
               $phone = $_POST['phoneNumber'];
               $phonePassword = $_POST['phonePassword'];
               $select = mysqli_query($connection, "SELECT `id`,`verifiactionStatus` FROM `clients` WHERE `phone`='$phone' AND `password`='$phonePassword'");
          }
          if (mysqli_num_rows($select)) {
               while ($row = mysqli_fetch_assoc($select)) {
                    $verifiactionStatus = $row['verifiactionStatus'];
                    // if ($verifiactionStatus == 1) {
                         $_SESSION['user_login'] = $row['id'];
                         echo "LOGIN";
                    // } else {
                    //      echo "NOT_VERIFIED";
                    // }
               }
          } else {
               echo "NOT_CORRECT";
          }
     }
}
